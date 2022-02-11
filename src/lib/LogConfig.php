<?php
namespace com\edel;



class LogConfig
{
    
    public function getLogConfig($logLevel,$logFilePath){
        return array(
						'appenders' => array(
							'default' => array(
								'class' => 'LoggerAppenderFile',
								'layout' => array(
									'class' => 'LoggerLayoutPattern',
									'params' => array(
										'conversionPattern' => '%date [%level] %message %newline'
									)
								),
								'params' => array(
									'file' => $logFilePath
								),
							),
						),
						'rootLogger' => array(
							'appenders' => array('default'),
							'level' => $logLevel
						),
						
					);
    }
    
}

