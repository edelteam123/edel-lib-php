<?php

include("vendor/autoload.php");

new UnSubscribeFeed();
class UnSubscribeFeed
{
	public function __construct()
    {
		$this->iniConfig = parse_ini_file("./test/EdelCsvTestSuite/config.ini");
		$this->feed=new com\edel\Feed($this->iniConfig['AccId'],$this->iniConfig['UserId'],$this->iniConfig['SettingsFilePath']);
		$this->unsubscribe();
	}
	public function unsubscribe()
    {
		$symbols= explode(',', $this->iniConfig['UnSubscribeSymbols']);
		$this->feed->unsubscribe($symbols);
	}
}
