<?php

namespace com\edel\Test\EdelCsvTestSuite;

use Exception;

abstract class helper
{    
    /**
     * __get
     *
     * @param  mixed $propertyName
     * @return void
     */
    public function __get($propertyName)
    {
        $method = 'get' . ucfirst($propertyName);
        if (!method_exists($this, $method)) {
            $method = 'is' . ucfirst($propertyName);
            if (!method_exists($this, $method)) {
                throw new Exception('Invalid read property ' . $propertyName . ' in ' . get_class($this) . ' class.');
            }
        }
        return $this->$method();
    }
    
    /**
     * __isset
     *
     * @param  mixed $propertyName
     * @return void
     */
    public function __isset($propertyName)
    {
        try {
            $_value = $this->__get($propertyName);
            return !empty($_value);
        } catch (Exception $e) {
            return false;
        }
    }
    
    /**
     * __set
     *
     * @param  mixed $propertyName
     * @param  mixed $value
     * @return void
     */
    public function __set($propertyName, $value)
    {
        $method = 'set' . ucfirst(trim($propertyName));
        if ('mapper' == $method || !method_exists($this, $method)) {
            throw new Exception('Invalid write property ' . $propertyName . ' in ' . get_class($this) . ' class.');
        }
        return $this->$method($value);
    }
    
    /**
     * populate
     *
     * @param  mixed $map
     * @return void
     */
    public function populate(array $map = null)
    {
        if (!empty($map)) {
            foreach ($map as $key => $value) {
                try {
                    $this->__set($key, $value);
                } catch (Exception $e) {
                   
                }
            }
        }

        return $this;
    }
}
