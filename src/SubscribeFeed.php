<?php

use com\edel\Test\EdelCsvTestSuite\Logger;

include("vendor/autoload.php");

new SubscribeFeed();
class SubscribeFeed
{
	private $iniConfig;
	private $accId;
	private $userId;

	public function __construct()
    {
		$this->iniConfig = parse_ini_file("./test/EdelCsvTestSuite/config.ini");
		$this->feed=new com\edel\Feed($this->iniConfig['AccId'],$this->iniConfig['UserId'],$this->iniConfig['SettingsFilePath']);
		//$this->feed=new com\edel\Feed("80146763","SHASHANKS","Settings.ini");
		$this->init();
	}
	public function init()
    {
		//$cb = 'CallBackMethod';
		$cb = array($this , 'CallBackMethod');
		//$symbols=['2885_NSE','-101','-29','1247_NSE','236_NSE','-25'];
		$symbols = explode(',', $this->iniConfig['SubscribeSymbols']);
		$this->feed->subscribe($symbols,$cb, true, true);
	//  $this->unsubscribe();
	}
	public function CallBackMethod($message)
	{
		Logger::log('Streamer Response  : ' . $message, 'Debug');
		print_r($message);
	}
	public function unsubscribe()
    {
		$cb = array($this , 'CallBackMethod');
		$symbols= explode(',', $this->iniConfig['UnSubscribeSymbols']);
		$this->feed->unsubscribe($symbols,$cb);
	}
    
}
