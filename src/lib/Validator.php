<?php

namespace com\edel;

use com\edel\Exceptions\ValidationException;
use DateTime;

class Validator
{

    protected $_data     = array();
    // protected $_errors   = array();
    protected $_pattern  = array();
    // protected $_messages = array();

    /**
     * Construct method (Set the error messages default)
     * @access public
     * @return void
     */
    public function __construct()
    {
        // $this->set_messages_default();
        // $this->define_pattern();
    }


    /**
     * Set a data for validate
     * @access public
     * @param $name String The name of data
     * @param $value Mixed The value of data
     * @return Data_Validator The self instance
     */
    public function set($name, $value)
    {
        $this->_data['name'] = $name;
        $this->_data['value'] = $value;
        return $this;
    }

    /**
     * The number of validators methods available in Validator
     * @access public
     * @return int Number of validators methods
     */
    public function get_number_validators_methods()
    {
        return count($this->_messages);
    }


    /**
     * Verify if the current data is not null
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_required()
    {
        if (empty($this->_data['value'])) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }

    public function isValidEnum()
    {
        if (empty($this->_data['value'])) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }

    /**
     * Verify if the current data is a numeric value
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_num()
    {
        if (!is_numeric($this->_data['value'])) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }

    // public function checkIsEnumsAvail($value){
    //     //value = NSE
    //     return check if value is available in constant_help.php's inside of exchange array.
    // }

    /**
     * Verify if the current data is a integer value
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_integer()
    {
        if (!is_numeric($this->_data['value']) && (int) $this->_data['value'] != $this->_data['value']) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }


    /**
     * Verify if the current data is a float value
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_float()
    {
        if (!is_float(filter_var($this->_data['value'], FILTER_VALIDATE_FLOAT))) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }


    /**
     * Verify if the current data is a string value
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_string()
    {
        if (!is_string($this->_data['value'])) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }


    /**
     * Verify if the current data is a boolean value
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_boolean()
    {
        if (!is_bool($this->_data['value'])) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }

    /**
     * Verify if the current data is a valid Date
     * @access public
     * @param String $format [optional] The Date format
     * @return Data_Validator The self instance
     */
    public function is_date($format = null)
    {
        $verify = true;
        if ($this->_data['value'] instanceof DateTime) {
            return $this;
        } elseif (!is_string($this->_data['value'])) {
            $verify = false;
        } elseif (is_null($format)) {
            $verify = (strtotime($this->_data['value']) !== false);
            if ($verify) {
                return $this;
            }
        }
        if ($verify) {
            $date_from_format = DateTime::createFromFormat($format, $this->_data['value']);
            $verify = $date_from_format && $this->_data['value'] === date($format, $date_from_format->getTimestamp());
        }
        if (!$verify) {
            throw new ValidationException($this->_data['name'] . ' is required', 422);
        }
        return $this;
    }

    /**
     * Validate the data
     * @access public
     * @return bool The validation of data
     */
    public function validate()
    {
        return (count($this->_errors) > 0 ? false : true);
    }
}
