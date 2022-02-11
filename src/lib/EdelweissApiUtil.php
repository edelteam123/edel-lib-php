<?php

namespace com\edel;

class EdelweissApiUtil
{
    public function __construct(array $data = null)
    {
        $this->container['vendorSession'] = $data['vendorSession'] ?? null;
        $this->container['apiKey'] = $data['apiKey'] ?? null;
        $this->container['eqAccId'] = $data['eqAccId'] ?? null;
        $this->container['coAccId'] = $data['coAccId'] ?? null;
        $this->container['jSessionId'] = $data['jSessionId'] ?? null;
        $this->container['appIdKey'] = $data['appIdKey'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['filename'] = $data['filename'] ?? null;
    }

    public function getVendorSession()
    {
        return $this->container['vendorSession'];
    }

    public function setVendorSession($vendorSession)
    {
        $this->container['vendorSession'] = $vendorSession;

        return $this;
    }

    public function getApiKey()
    {
        return $this->container['apiKey'];
    }

    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;

        return $this;
    }

    public function getEqAccId()
    {
        return $this->container['eqAccId'];
    }

    public function setEqAccId($eqAccId)
    {
        $this->container['eqAccId'] = $eqAccId;

        return $this;
    }

    public function getCoAccId()
    {
        return $this->container['coAccId'];
    }

    public function setCoAccId($coAccId)
    {
        $this->container['coAccId'] = $coAccId;

        return $this;
    }

    public function getJSessionId()
    {
        return $this->container['jSessionId'];
    }

    public function setJSessionId($jSessionId)
    {
        $this->container['jSessionId'] = $jSessionId;

        return $this;
    }

    public function getAppIdKey()
    {
        return $this->container['appIdKey'];
    }

    public function setAppIdKey($appIdKey)
    {
        $this->container['appIdKey'] = $appIdKey;

        return $this;
    }

    public function getData()
    {
        return $this->container['data'];
    }

    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    public function getFilename()
    {
        return $this->container['filename'];
    }

    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    public function getAccTyp()
    {
        return $this->container['acctyp'];
    }

    public function setAccTyp($acctyp)
    {
        $this->container['acctyp'] = $acctyp;

        return $this;
    }
}
