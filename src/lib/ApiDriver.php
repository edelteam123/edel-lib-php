<?php

use com\edel\Configuration;
use com\edel\edelconnect\api\EquityTradeApi;

class ApiDriver
{
    protected $accType;
    protected $config;

    public function __construct()
    {
        $this->config = new Configuration;
    }

    public function setHost($basePathEq): ApiDriver
    {
        $this->config->setHost($basePathEq);
        return $this;
    }

    public function setApiKey($sessionId): ApiDriver
    {
        $this->config->setApiKey('Authorization', $sessionId);
        return $this;
    }

    public function setIniFilePath($iniFilePath): ApiDriver
    {
        $this->config->setIniFilePath($iniFilePath);
        return $this;
    }

    public function setAccType($accType): ApiDriver
    {
        $this->accType = $accType;
        return $this;
    }

    public function getPlaceBasketOrder($client, $eqAccId, $Orderlist)
    {
        $apiInstance = new EquityTradeApi($client, $this->config);
        $result = $apiInstance->placeBasketOrder($eqAccId(), $Orderlist);
        $response['eq'] = $result;
        $response['co'] = '';
    }
}
