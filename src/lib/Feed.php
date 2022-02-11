<?php

namespace com\edel;

use Logger;
use com\edel\LogConfig;
use GuzzleHttp\Client;
use com\edel\ApiException;
use com\edel\Configuration;
use com\edel\HeaderSelector;
use com\edel\ObjectSerializer;
use stdClass;
///use com\edel\SubscribeFeed;

class Feed
{
    protected $log;
    protected $iniFilePath;
    protected $accId;
    protected $userId;
    protected $appId;
    protected $formFactor;
    protected $server;
    protected $port;
    protected $filename;
    protected $symbols = [];
    protected $sock;
    protected $callBack;

    //protected $downloadContract;
    protected $apiKey;

    public function __construct(String $accId, String $userId, String $iniFilePath)
    {
        $this->iniConfig = parse_ini_file($iniFilePath);
        $this->accId = $accId;
        $this->userId = $userId;
        $this->appId = $this->iniConfig['AppIdKey'];
        $this->formFactor = $this->iniConfig['FormFactor'];
        $this->server = $this->iniConfig['Server'];
        $this->port = $this->iniConfig['Port'];
        $logConfig = new LogConfig;
        Logger::configure($logConfig->getLogConfig($this->iniConfig['LogLevel'], $this->iniConfig['LogFilePath']));
        $this->log = Logger::getRootLogger();
        $this->sock = $this->socketConnect();
    }

    private function socketConnect()
    {
        $socket = socket_create(AF_INET, SOCK_STREAM, 0);
        if ($socket === false) {
            $this->log->error("socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n");
        } else {
            $this->log->debug("socket_create OK.\n");
        }
        $result = socket_connect($socket, $this->server, $this->port);
        if ($result === false) {
            $this->log->error("socket_connect() failed.\nReason: (" . json_encode($result) . ") " . socket_strerror(socket_last_error($result)) . "\n");
        } else {
            $this->log->debug("socket_connect OK.\n");
        }
        return $socket && $result ? $socket : null;
    }
    public function subscribe($sysmbls, $callBack, $subscribeOrder = True, $subscribeQuote = True)
    {
        $this->symbols = $sysmbls;
        if ($subscribeOrder) {
            $quote = $this->CreateMessageQuote($sysmbls);
            $this->log->debug("subscribeOrder:" . $quote);
            socket_write($this->sock, $quote, strlen($quote));
        }
        if ($subscribeQuote) {
            $OrderFiler = $this->CreateMessageOrderFiler($sysmbls);
            $this->log->debug("subscribeOrder:" . $OrderFiler);
            socket_write($this->sock, $OrderFiler, strlen($OrderFiler));
        }
        while (true) {
            $result = socket_read($this->sock, 2048);
            $this->log->debug("subscribe:" . $result);
            call_user_func($callBack, $result);
        }
        socket_close($this->sock);
    }
    private function CreateMessageQuote($symbols)
    {
        $symset = [];
        foreach ($symbols as $syms) {
            array_push($symset, array("symbol" => $syms));
        }

        $req['request'] =
            array(
                'streaming_type' => "quote3",
                "data" => array("accType" => "EQ", "symbols" => $symset),
                "formFactor" => "M",
                "appID" => $this->appId,
                "response_format" => "json",
                "request_type" => "subscribe"
            );
        $req['echo'] = new stdClass;
        return json_encode($req) . "\n";
    }
    private function CreateMessageOrderFiler()
    {
        $req['request'] =
            array(
                'streaming_type' => "orderFiler",
                "data" => array(
                    "accType" => "EQ",
                    "userID" => $this->userId,
                    "accID" => $this->accId,
                    "responseType" => ["ORDER_UPDATE", "TRADE_UPDATE"]
                ),
                "formFactor" => "M",
                "appID" => $this->appId,
                "response_format" => "json",
                "request_type" => "subscribe"
            );
        $req['echo'] = new stdClass;
        return json_encode($req) . "\n";
    }
    public function unsubscribe($symbols,$callBack = NULL)
    {

        if ($symbols) {
            $symset = [];
            foreach ($symbols as $syms) {
                array_push($symset, array("symbol" => $syms));
            }
        }
        $req['request'] =
            array(
                'streaming_type' => "quote3", "data" => array("symbols" => $symset),
                "formFactor" => "M",
                "appID" => $this->appId,
                "response_format" => "json",
                "request_type" => "subscribe"
            );
        $req['echo'] = new stdClass;
        $this->log->debug("UnSubscribe Request:" . json_encode($req));
        isset($callBack) ? call_user_func($callBack, json_encode($req)) : null;

        $data = json_encode($req) . "\n";
        if (!socket_send($this->sock, $data, strlen($data), 0)) {
            $errorcode = socket_last_error();
            $errormsg = socket_strerror($errorcode);
            $this->log->debug("Could not send data: [$errorcode] $errormsg \n");
            die("Could not send data: [$errorcode] $errormsg \n");
        }
        $this->log->debug("Message send successfully \n");
        socket_close($this->sock);
    }
}
