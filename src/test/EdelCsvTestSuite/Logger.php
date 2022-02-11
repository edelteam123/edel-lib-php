<?php

namespace com\edel\Test\EdelCsvTestSuite;

class Logger
{
    const INFO = 'info';

    private static $instance;
    private $config;

    /**
     * __construct
     *
     * @return void
     */
    private function __construct()
    {
        $this->config = parse_ini_file("config.ini");
    }

    /**
     * getInstance
     *
     * @return 
     */
    private static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    /**
     * writeToFile
     *
     * @param  mixed $message
     * @return void
     */
    private function writeToFile($message)
    {
        file_put_contents($this->config['LogFilePath'], "$message\n", FILE_APPEND);
    }

    /**
     * log
     *
     * @param  mixed $message
     * @param  mixed $level
     * @return void
     */
    public static function log($message, $level = Logger::INFO)
    {
        $date = date('Y-m-d H:i:s');
        $severity = "[$level]";
        $message = "$date $severity ::$message";
        self::getInstance()->writeToFile($message);
    }
}
