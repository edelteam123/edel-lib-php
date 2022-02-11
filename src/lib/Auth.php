<?php

namespace com\edel;

use com\edel\ApiException;
use GuzzleHttp\Psr7\Request;
use com\edel\edelconnect\api\CommonLoginApi;
use GuzzleHttp\Client;
use ZipArchive;
use Logger;

class Auth
{
    private $constants;
    private $config;
    private $log;
    private $iniFilePath;
    private $iniConfig;
    private $basePathLogin;
    private $client;
    private $instrumentsFilePath;
    private $instruments = [];
    private $mfInstruments = [];

    /**
     * __construct
     *
     * @param  mixed $client
     * @param  mixed $constants
     * @param  mixed $config
     * @param  mixed $log
     * @param  mixed $iniFilePath
     * @return void
     */
    public function __construct(Client $client, EdelweissApiUtil $edelApiUtil, Configuration $config, Logger $log, $iniFilePath)
    {
        $this->iniFilePath = $iniFilePath;
        $this->iniConfig =  parse_ini_file($iniFilePath);
        $this->basePathLogin = $this->iniConfig['BasePathLogin'];
        $this->constants = $edelApiUtil;
        $this->config = $config;
        $this->log = $log;
        $this->client = $client;
    }

    /**
     * generateVendorSession
     *
     * @param  mixed $apiKey
     * @param  mixed $password
     * @return void
     */
    public function generateVendorSession($apiKey, $password)
    {
        $this->log->info("Inside method : generateVendorSession");
        $this->config->setIniFilePath($this->iniFilePath);
        $this->config->setHost($this->basePathLogin);
        // print_r('sss '. $this->basePathLogin);
        $apiInstance = new CommonLoginApi($this->client, $this->config);
        $body = array('pwd' => $password);
        try {
            $result = $apiInstance->validateVendorCrdntials($apiKey, $apiKey, $body);
            if (isset($result['msg'])) {
                $this->log->debug("Successfully generate validateVendorCrdntials");
                $this->constants->setVendorSession($result['msg']);
                return $result;
            } else {
                $this->log->error("Login: " . $result['error']['errMsg']);
                $result['msg'] = "Login: " . $result['error']['errMsg'];
                throw $result;
            }
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * getAuthorization
     *
     * @param  mixed $reqID
     * @return void
     */
    public function getAuthorization($reqID, $AppIdKey, $filename)
    {
        $this->log->info("Inside method : getAuthorization");
        $this->config->setIniFilePath($this->iniFilePath);
        $this->config->setHost($this->basePathLogin);
        $apiInstance = new CommonLoginApi($this->client, $this->config);
        $body = array('reqId' => $reqID);
        $source_token =  $this->constants->getVendorSession();
        $app_id_key =  $AppIdKey;
        try {
            $result = $apiInstance->loginData($source_token, $app_id_key, $body);
            if (isset($result['data'])) {
                $this->log->debug("Authorization Successfully");
                $obj = $result['data'];
                // print_r($obj);
                $this->constants->setData($obj);
                $this->constants->setAccTyp($obj['lgnData']['accTyp']);
                if ($this->constants->getAccTyp() == "EQ") {
                    $this->constants->setEqaccId($obj['lgnData']['accs']['eqAccID']);
                } else if ($this->constants->getAccTyp() == "CO") {
                    $this->constants->setCoAccId($obj['lgnData']['accs']['coAccID']);
                } else if ($this->constants->getAccTyp() == "COMEQ") {
                    $this->constants->setEqaccId($obj['lgnData']['accs']['eqAccID']);
                    $this->constants->setCoAccId($obj['lgnData']['accs']['coAccID']);
                }
                $this->constants->setJSessionId($obj['auth']);

                $file = array(
                    "vt" => $this->constants->getVendorSession(),
                    "auth" => $this->constants->getJSessionId(),
                    "eqaccid" => $this->constants->getEqAccId(),
                    "coaccid" => $this->constants->getCoAccId(),
                    "data" => $this->constants->getData(),
                    "appidkey" => $this->constants->getAppIdKey(),
                    "acctyp" => $this->constants->getAccTyp()
                );
                file_put_contents($filename, json_encode($file));
                return $result['data'];
            } else {
                $this->log->error("Authorization: " . $result['error']['errMsg'] . " or RequestId expired.");
                echo "Authorization: " . $result['error']['errMsg'] . " or RequestId expired.";
                $result['msg'] = "Authorization: " . $result['error']['errMsg'];
                exit();
            }
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * instruments
     *
     * @return void
     */
    public function instruments($EquityContractURL, $MFContractURL, $instrumentsFilePath)
    {
        try {
            $eq = $this->downloadFile($EquityContractURL);
            $co = $this->downloadFile($MFContractURL);
            if ($eq) {
                $zip = new ZipArchive;
                if ($zip->open($instrumentsFilePath . 'instruments.zip') === TRUE) {
                    $zip->extractTo($instrumentsFilePath);
                    $zip->close();
                    $this->log->debug("instruments.zip extract Successfully");

                    if (($handle = fopen($instrumentsFilePath . "instruments.csv", "r")) !== FALSE) {
                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            array_push($this->instruments, $data);
                        }
                        fclose($handle);
                    }
                } else {
                    $this->log->debug("instruments.zip extract fail");
                }
            }
            if ($co) {
                $zip = new ZipArchive;
                if ($zip->open($instrumentsFilePath . 'mfInstruments.zip') === TRUE) {
                    $zip->extractTo($instrumentsFilePath);
                    $zip->close();
                    $this->log->debug("mfInstruments.zip extract Successfully");

                    if (($handle = fopen($instrumentsFilePath . "mfInstruments.csv", "r")) !== FALSE) {
                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            array_push($this->mfInstruments, $data);
                        }
                        fclose($handle);
                    }
                } else {
                    $this->log->debug("instruments.zip extract fail");
                }
            }
            //  print_r($this->instruments);
            //print_r($this->mfInstruments);
        } catch (ApiException $e) {
            $this->log->error("Instruments :  {$e->getMessage()}");
            throw $e;
        }
    }

    /**
     * downloadFile
     *
     * @param  mixed $url
     * @return void
     */
    private function downloadFile($url)
    {
        $this->log->info("Inside method : downloadFile");
        try {
            $request = new Request('GET', $url);
            $response = $this->client->send($request);
            $file_name = basename($url);
            if (file_put_contents($this->instrumentsFilePath . $file_name, $response->getBody())) {
                $this->log->debug("$file_name File downloaded successfully");
                return true;
            } else {
                $this->log->debug("$file_name File downloaded successfully");
                return false;
            }
        } catch (ApiException $e) {
            $this->log->error("Download File :  {$e->getMessage()}");
            throw $e;
        }
    }
}
