<?php
namespace com\edel;

use com\edel\edelconnect\api\CommonLoginApi;
use com\edel\edelconnect\api\EquityHoldingsApi;
use com\edel\edelconnect\api\EquityLimitsApi;
use com\edel\edelconnect\api\EquityOrdersApi;
use com\edel\edelconnect\api\EquityPositionBookApi;
use com\edel\edelconnect\api\EquityTradeApi;
use com\edel\edelconnect\api\EquityTradeBookApi;
use com\edel\edelconnect\api\CommodityLimitsApi;
use com\edel\edelconnect\api\CommodityOrderBookApi;
use com\edel\edelconnect\api\CommodityOrderDetailsApi;
use com\edel\edelconnect\api\CommodityOrderHistoryApi;
use com\edel\edelconnect\api\CommodityPositionBookApi;
use com\edel\edelconnect\api\CommodityReportsApi;
use com\edel\edelconnect\api\CommodityTradeApi;
use com\edel\edelconnect\api\CommodityTradeBookApi;
use com\edel\edelconnect\api\MFTradeApi;
use com\edel\edelconnect\api\MFHoldingsApi;
use com\edel\edelconnect\api\MFOrderBookApi;

use Logger;
use ZipArchive;
use com\edel\LogConfig;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use com\edel\ApiException;
use com\edel\Configuration;
use com\edel\edelconnect\models\Exchange;
use com\edel\Enums\ActionEnum;
use com\edel\Enums\DurationEnum;
use com\edel\Enums\ExchangeEnum;
use com\edel\Enums\OrderType;
use com\edel\Enums\OrderTypeEnum;
use com\edel\Enums\ProductCode;
use com\edel\Enums\ProductCodeEnum;
use com\edel\Exceptions\ValidationException;
use com\edel\HeaderSelector;
use com\edel\ObjectSerializer;
use Exception;

use Rakit\Validation\Validator;
class EdelweissAPIConnect
{
    private $commonConfig;
    private $filename;
    private $constants;
    private $config;
    private $authorization;
    private $downloadContract;
    private $instrumentsFilePath;
    private $AppIdKey;
    private $basePathEq;
    private $basePathComm;
    private $basePathMf;
    private $basePathLogin;
    private $password;
    private $reqID;
    private $logFilePath;
    private $log;
    private $tokenFile;
    private $client;
    private $iniFilePath;
    private $headerSelector;
    private $EquityContractURL;
    private $MFContractURL;
    private $apiKey;
    private $auth;
    private $validator;

    public function __construct(String $apiKey, String $password, String $reqID, $dContract,$iniFilePath)
    {
        $this->iniConfig = parse_ini_file($iniFilePath);
        $this->constants = new EdelweissApiUtil();
        $this->config=new Configuration;
        $this->client=new Client;
        $this->headerSelector =  new HeaderSelector();
        $this->password=$password;
        $this->reqID=$reqID;
        $this->downloadContract=$dContract;
        $this->apiKey=$apiKey;
        $this->iniFilePath=$iniFilePath;
        $logConfig=new LogConfig;
        Logger::configure($logConfig->getLogConfig($this->iniConfig['LogLevel'],$this->iniConfig['LogFilePath']));
        $this->log=Logger::getRootLogger();
        $this->setBaseConfig();
        $this->init();
        $this->validator = new Validator;
    }
    private function setBaseConfig(){
        $this->AppIdKey=$this->iniConfig['AppIdKey'];
        $this->basePathEq=$this->iniConfig['BasePathEq'];
        $this->basePathComm=$this->iniConfig['BasePathComm'];
        $this->basePathMf=$this->iniConfig['BasePathMf'];
        $this->basePathLogin=$this->iniConfig['BasePathLogin'];
        $this->tokenFilePath=$this->iniConfig['AuthTokenFile'];
        $this->EquityContractURL=$this->iniConfig['EquityContractURL'];
        $this->MFContractURL=$this->iniConfig['MFContractURL'];
        $this->instrumentsFilePath=$this->iniConfig['InstrumentsFile'];
        $this->filename = $this->tokenFilePath."data_".$this->apiKey.".txt";
    }
    public function init()
    {
        $this->constants->setApiKey($this->apiKey);
        $this->constants->setAppIdKey($this->AppIdKey);
        if (file_exists($this->filename)) {
            try {
                $obj=$this->GetLoginData();
                $this->constants->setVendorSession($obj['vt']);
                $this->constants->setJSessionId($obj['auth']);
                $this->constants->setEqAccId($obj['eqaccid']);
                $this->constants->setCoaccId($obj['coaccid']);
                $this->constants->setData($obj['data']);
                $this->constants->setAppIdKey($obj['appidkey']);
                $this->constants->setAccTyp($obj['acctyp']);
            } catch (ApiException $e) {
                throw $e;
            }
        } else {
            $vt = "";
            $this->auth = new Auth($this->client, $this->constants, $this->config, $this->log, $this->iniFilePath);
            $vt = $this->auth->generateVendorSession($this->apiKey, $this->password);
            if ($vt != "") {
                $this->constants->setVendorSession($vt['msg']);
            }
            $this->authorization = $this->auth->getAuthorization($this->reqID, $this->AppIdKey, $this->filename);
            $this->auth->instruments($this->EquityContractURL, $this->MFContractURL, $this->instrumentsFilePath);
            if(!isset($this->authorization['data'])) {
                exit();
            }
        }
    }
    public function GetLoginData()
    {
       $loginData=(array) json_decode(file_get_contents($this->filename));
       return $loginData;
    }
    public function Logout()
    {
        try{
        $this->log->info("Inside method : Logout");
        $this->config->setIniFilePath($this->iniFilePath);
        $this->config->setHost($this->basePathLogin); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $apiInstance=new CommonLoginApi($this->client,$this->config);
        $accTyp = $this->constants->getAccTyp();
        if($accTyp == "EQ"){
            $result = $apiInstance->endSession($this->constants->getEqAccId());
        }else if($accTyp == "CO"){
            $result = $apiInstance->endSession($this->constants->getCoAccId());
        }
        
            $this->removeDataFile();
        
        $this->log->debug("Response Logout :".json_encode($result));
        return $result;
    } catch (ApiException $e) {
        $this->log->error("LogOut :  {$e->getMessage()}");
        if($e->getCode()==401){
            $this->removeDataFile();
        }
        throw $e;
    }
    }
    public function OrderBook()
    {
        $this->log->info("Inside method : OrderBook");
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityOrdersApi($this->client,$this->config); 
                $result = $apiInstance->getOrderBookV1($this->constants->getEqAccId(), 'PAYOUT');
                $response['eq']=$result;
                $response['co']='';
                
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm);
                $apiInstance=new CommodityOrderBookApi($this->client,$this->config); 
                $result = $apiInstance->getOrders($this->constants->getCoAccId(), '');
                $response['eq']='';
                $response['co']=$result;
            }else if($accTyp== "COMEQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityOrdersApi($this->client,$this->config); 
                $result = $apiInstance->getOrderBookV1($this->constants->getEqAccId(), 'PAYOUT');
                $this->config->setHost($this->basePathComm);
                $apiInstance=new CommodityOrderBookApi($this->client,$this->config); 
                $CoResult = $apiInstance->getOrders($this->constants->getCoAccId(), '');
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response OrderBook :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("OrderBook :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }
    public function TradeBook()
    {
        $this->log->info("Inside method : TradeBook");
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        try{
            if($accTyp == "EQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityTradeBookApi($this->client,$this->config);
                $result = $apiInstance->getTradeBook($this->constants->getEqAccId());
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeBookApi($this->client,$this->config);
                $result = $apiInstance->getTrades($this->constants->getCoAccId());
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityTradeBookApi($this->client,$this->config);
                $result = $apiInstance->getTradeBook($this->constants->getEqAccId());
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeBookApi($this->client,$this->config);
                $CoResult = $apiInstance->getTrades($this->constants->getCoAccId());
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response TradeBook :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("TradeBook :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
        }    
    }
    public function NetPosition()
    {
        $this->log->info("Inside method : NetPosition");
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityPositionBookApi($this->client,$this->config);
                $result = $apiInstance->getNetPositions($this->constants->getEqAccId());
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityPositionBookApi($this->client,$this->config);
                $result = $apiInstance->getPositions($this->constants->getCoAccId());
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityPositionBookApi($this->client,$this->config);
                $result = $apiInstance->getNetPositions($this->constants->getEqAccId());
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityPositionBookApi($this->client,$this->config);
                $CoResult = $apiInstance->getPositions($this->constants->getCoAccId());
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response NetPosition :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("NetPosition :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }
    public function OrderDetails($OrderId,$Exchange)
    {
        $this->log->info("Inside method : OrderDetails");
        $this->log->debug("Request Parameters OrderId :".$OrderId.",Exchange:".$Exchange);
       
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityOrdersApi($this->client,$this->config);
                $result = $apiInstance->orderDetails($this->constants->getEqAccId(),$OrderId);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityOrderDetailsApi($this->client,$this->config);
                $result = $apiInstance->getOrderDetails($this->constants->getCoAccId(),$OrderId);
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityOrdersApi($this->client,$this->config);
                $result = $apiInstance->orderDetails($this->constants->getEqAccId(),$OrderId);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityOrderDetailsApi($this->client,$this->config);
                $CoResult = $apiInstance->getOrderDetails($this->constants->getCoAccId(),$OrderId);
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response OrderDetails :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("orderDetails :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }
    public function OrderHistory($StartDate, $EndDate)
    {
        $this->log->info("Inside method : OrderHistory");
        $this->log->debug("Request Parameters StartDate :".$StartDate.",EndDate:".$EndDate);
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityOrdersApi($this->client,$this->config);
                $result = $apiInstance->orderHistory($this->constants->getEqAccId(),$StartDate, $EndDate);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityOrderHistoryApi($this->client,$this->config);
                $result = $apiInstance->getOrderHistory($this->constants->getCoAccId(),$StartDate, $EndDate);
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityOrdersApi($this->client,$this->config);
                $result = $apiInstance->orderHistory($this->constants->getEqAccId(),$StartDate, $EndDate);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityOrderHistoryApi($this->client,$this->config);
                $CoResult = $apiInstance->getOrderHistory($this->constants->getCoAccId(),$StartDate, $EndDate);
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response OrderHistory :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("orderHistory :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
        }   throw $e; 
    }
    public function Holdings()
    {
        $this->log->info("Inside method : Holdings");
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityHoldingsApi($this->client,$this->config);
                $result = $apiInstance->getAllRMSHoldings($this->constants->getEqAccId());
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityReportsApi($this->client,$this->config);
                    $this->log->info("Inside Try method : Holdings");
                    $result = $apiInstance->getClientPortfolioDetail($this->constants->getCoAccId());
                    $response['eq']='';
                    $response['co']=$result;      
            }
            else if($accTyp== "COMEQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityHoldingsApi($this->client,$this->config);
                $result = $apiInstance->getAllRMSHoldings($this->constants->getEqAccId());
                $this->config->setHost($this->basePathComm);
                $apiInstance=new CommodityReportsApi($this->client,$this->config);
                $CoResult = $apiInstance->getClientPortfolioDetail($this->constants->getCoAccId());
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response Holdings :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("Holdings :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
        
    }
    public function PlaceTrade($TradingSymbol,$Exchange,$Action,$Duration,$OrderType,$Quantity,$StreamingSymbol,
    $LimitPrice,$DisclosedQuantity = "0",$TriggerPrice = "0",$ProductCode = "CNC")
    {
        $this->log->info("Inside method : PlaceTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
        $body = [
            "trdSym"=>$TradingSymbol,
            "exc"=> ExchangeEnum::isValidValue($Exchange),
            "action"=> ActionEnum::isValidValue($Action),
            "dur"=> DurationEnum::isValidValue($Duration),
            "flQty"=>0,
            "ordTyp"=> OrderTypeEnum::isValidValue($OrderType),
            "qty"=>$Quantity,
            "dscQty"=>$DisclosedQuantity,
            "sym"=>$StreamingSymbol,
            "mktPro"=>'',
            "lmPrc"=>$LimitPrice,
            "trgPrc"=>$TriggerPrice,
            "prdCode"=> ProductCodeEnum::isValidValue($ProductCode),
            "posSqr"=>'N',
            "minQty"=>"0",
            "ordSrc"=>"API",
            "vnCode"=>"",
            "rmk"=>"",
            "dtDays"=>""];

            $validation = $this->validator->validate($body,[
                'trdSym'=>'required'
            ]);

            if($validation->fails()){
                $errors = $validation->errors();
	            print_r($errors->firstOfAll());
                throw new ValidationException($errors->firstOfAll(),422);
            }else{
                $this->log->debug("Request PlaceTrade :".json_encode($body));
                $accTyp = $this->constants->getAccTyp();
                if($accTyp == "EQ"){
                    $this->config->setHost($this->basePathEq); 
                    $apiInstance=new EquityTradeApi($this->client,$this->config);
                    $result = $apiInstance->placeTrade($this->constants->getEqAccId(),$body);
                    $response['eq']=$result;
                    $response['co']='';
                }else if($accTyp == "CO"){
                    $this->config->setHost($this->basePathComm);
                    $apiInstance=new CommodityTradeApi($this->client,$this->config);
                    $result = $apiInstance->placeTradeCommodity($this->constants->getCoAccId(),$body);
                    $response['eq']='';
                    $response['co']=$result;
                }else if($accTyp== "COMEQ"){
                    $apiInstance=new EquityTradeApi($this->client,$this->config);
                    $result = $apiInstance->placeTrade($this->constants->getEqAccId(),$body);
                    $this->config->setHost($this->basePathComm);
                    $apiInstance=new CommodityTradeApi($this->client,$this->config);
                        $CoResult = $apiInstance->placeTradeCommodity($this->constants->getCoAccId(),$body);
                    $response['eq']=$result;
                    $response['co']=$CoResult;
                }
                $this->log->debug("Response PlaceTrade :".json_encode($response));
                return $response;
            }
        } catch (ApiException $e) {
            $this->log->error("PlaceTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }    
    }
    public function PlaceCoverTrade($TradingSymbol,$Exchange,$Action,$Duration,$OrderType,$Quantity,$StreamingSymbol,
    $LimitPrice,$DisclosedQuantity = "0",$TriggerPrice = "0",$ProductCode = "CNC")
    {
        $this->log->info("Inside method : PlaceCoverTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        
        $body=[
            "ordTyp"=> OrderTypeEnum::isValidValue($OrderType),
            "minQty"=>"",
            "trdSym"=>$TradingSymbol,
            "dtDays"=>"",
            "posSqr"=>"N",
            "mktPro"=>"",
            "qty"=>$Quantity,
            "ordSrc"=> "API",
            "sym"=>$StreamingSymbol,
            "exc"=> ExchangeEnum::isValidValue($Exchange),
            "dscQty"=>$DisclosedQuantity,
            "vnCode"=>"118",
            "action"=> $Action,
            "dur"=> DurationEnum::isValidValue($Duration),
            "prdCode"=> ProductCodeEnum::isValidValue($ProductCode),
            "lmPrc"=> $LimitPrice,
            "rmk"=>"",
            "trgPrc"=> $TriggerPrice,
            "amoFlg"=>"NO"
        ];
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->coverTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->coverTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }
            $this->log->debug("Response PlaceCoverTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("PlaceCoverTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }    
       
    }
    public function PlaceGtcGtdTrade($TradingSymbol,$Exchange,$Action,$Duration,$OrderType,$Quantity,
    $LimitPrice,$ProductCode,$StreamingSymbol='')
    {
        $this->log->info("Inside method : PlaceGtcGtdTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body=[
            'trdSym' => $TradingSymbol,
            'exc' => ExchangeEnum::isValidValue($Exchange),
            'action' => ActionEnum::isValidValue($Action),
            'dur' => DurationEnum::isValidValue($Duration),
            'ordTyp' => OrderTypeEnum::isValidValue($OrderType),
            'qty' => $Quantity,
            'lmPrc' => $LimitPrice,
            'prdCode' => ProductCodeEnum::isValidValue($ProductCode),
            'sym' => $StreamingSymbol,
             'dtDays' =>'',
            'ordSrc' => '',
             'vnCode' => '',
            'oprtn' => '',
            'srcExp' =>'',
            'tgtId' =>'',
            'brnchNm' =>'',
            'brk' => '',
            'amo' => 'false'  
        ];
       // print_r($body);
  
       $this->log->debug("Request PlaceGtcGTD :".json_encode($body));
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeGtcGtdTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm);
                
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']='';
                $response['co']=$result;
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeGtcGtdTrade($this->constants->getEqAccId(),$body);
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->placeTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response PlaceGtcGtdTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("PlaceGtcGTDTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }    
    }
    public function ModifyTrade($TradingSymbol,$Exchange,$Action,$Duration,$OrderType,$Quantity,
    $LimitPrice,$DisclosedQuantity = "0",$TriggerPrice = "0",$ProductCode = "CNC",$orderId)
    {
        $this->log->info("Inside method : ModifyTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body=[
            'trdSym' => $TradingSymbol,
            'exc' => ExchangeEnum::isValidValue($Exchange),
            'action' => ActionEnum::isValidValue($Action),
            'dur' => DurationEnum::isValidValue($Duration),
            'flQty' => "0",
            'ordTyp' => OrderTypeEnum::isValidValue($OrderType),
            'qty' =>$Quantity,
            'dscQty' =>$DisclosedQuantity,
            'mktPro' => "",
            'lmPrc' => $LimitPrice,
            'trgPrc' => $TriggerPrice,
            'prdCode' => ProductCodeEnum::isValidValue($ProductCode),
            'dtDays' => "",
            'nstOID' => $orderId
        ];
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']='';
                $response['co']=$result;
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyTrade($this->constants->getEqAccId(),$body);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->modifyTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            $this->log->debug("Response ModifyTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("ModifyTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }        
    }
    public function ModifyCoverTrade($TradingSymbol,$Exchange,$Action,$Duration,$OrderType,$Quantity,$StreamingSymbol,
    $LimitPrice,$DisclosedQuantity = "0",$TriggerPrice = "0",$ProductCode = "CNC",$NstOID)
    {
        $this->log->info("Inside method : ModifyCoverTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        
        $accTyp = $this->constants->getAccTyp();
		$body=[
            'trdSym' => $TradingSymbol,
            'exc' => ExchangeEnum::isValidValue($Exchange),
            'action' => ActionEnum::isValidValue($Action),
            'dur' => DurationEnum::isValidValue($Duration),
            'flQty' => "0",
            'ordTyp' => OrderTypeEnum::isValidValue($OrderType),
            'qty' => $Quantity,
            'dscQty' => $DisclosedQuantity,
            "sym"=> $StreamingSymbol,
            "mktPro"=> "",
            "lmPrc"=> $LimitPrice,
            "trgPrc"=> $TriggerPrice,
            "prdCode"=> ProductCodeEnum::isValidValue($ProductCode),
            "dtDays"=> "",
            "nstOID"=> $NstOID
        ];
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyCoverTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyCoverTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }
            
            $this->log->debug("Response ModifyCoverTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
        $this->log->error("ModifyCoverTrade :  {$e->getMessage()}");
        if($e->getCode()==401){
            $this->removeDataFile();
        }
        throw $e;
    }
        
    }
    public function CancelTrade($OrderId, $Exchange, $OrderType,$ProductCode)
    {
        $this->log->info("Inside method : CancelTrade");
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        
        $accTyp = $this->constants->getAccTyp();
        $body=[
            'nstOID'=> $OrderId, 
            'exc'=> ExchangeEnum::isValidValue($Exchange), 
            'prdCode'=> ProductCodeEnum::isValidValue($ProductCode), 
            'ordTyp'=> OrderTypeEnum::isValidValue($OrderType)
        ];
        try{    
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->cancelTradeV1($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->cancelTradeValVndr($this->constants->getCoAccId(),$body);
                $response['eq']='';
                $response['co']=$result;
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->cancelTradeV1($this->constants->getEqAccId(),$body);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->cancelTradeValVndr($this->constants->getCoAccId(),$body);
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            
            $this->log->debug("Response CancelTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("CancelTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
	}
    public function ExitCoverTrade($orderId)
    {
        $this->log->info("Inside method : ExitCoverTrade");
        
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body['nstOID']=$orderId;
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->exitCoverTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->exitCoverTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }
            $this->log->debug("Response ExitCoverTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("ExitCoverTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }   
    public function ExitBracketTrade($OrderId, $SyomId, $Status)
    {
        $this->log->info("Inside method : ExitBracketTrade");
        
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body=[
            'nstOrdNo'=>$OrderId,
            'syomID'=>$SyomId,
            'sts'=>$Status
        ];
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->exitBracketTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->exitBracketTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }
            
            $this->log->debug("Response ExitBracketTrade :".json_encode($response));
            return $response; 
        } catch (ApiException $e) {
            $this->log->error("ExitBracketTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }      
    } 
    public function PlaceBracketTrade($Exchange,$StreamingSymbol,$TransactionType,$Quantity,$Duration,$DisclosedQuantity,
    $LimitPrice,$Target,$StopLoss,$TrailingStopLoss = "Y",$TrailingStopLossValue = "1")
    {
        $this->log->info("Inside method : PlaceBracketTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body = [
            'exc' => ExchangeEnum::isValidValue($Exchange),
            'sym' => $StreamingSymbol,
            'trnsTyp' => $TransactionType,
            'qty' => $Quantity,
            'dur' => DurationEnum::isValidValue($Duration),
            'dsQty' => $DisclosedQuantity,
            'prc' => $LimitPrice,
            'trdBsdOn' => 'LTP',
            'sqOffBsdOn' => 'Absolute',
            'sqOffVal' =>$Target,
            'slBsdOn' => 'Absolute',
            'slVal' => $StopLoss,
            'trlSl' => $TrailingStopLoss,
            'trlSlVal' => $TrailingStopLossValue,
            'ordSrc' => 'API'
        ];
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeBracketOrder($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeBracketOrder($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }
            
            $this->log->debug("Response PlaceBracketTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("PlaceBracketTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
		
    }  
    public function PlaceBasketTrade($Orderlist)
    {
        $this->log->info("Inside method : PlaceBasketTrade");
        foreach($Orderlist['ordLst'] as $order){
            $this->validateQuantityForInteger($order['qty']);
        }
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeBasketOrder($this->constants->getEqAccId(),$Orderlist);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeBasketOrder($this->constants->getEqAccId(),$Orderlist);
                $response['eq']=$result;
                $response['co']='';
            }
            
            $this->log->debug("Response PlaceBasketTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("PlaceBracketTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
        
    }  
    public function Limits()
    {
        $this->log->info("Inside method : Limits");
       
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $apiInstance=new EquityLimitsApi($this->client,$this->config);
                $result = $apiInstance->getSubLimits($this->constants->getEqAccId());
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                    $this->config->setHost($this->basePathComm); 
                    $apiInstance=new CommodityLimitsApi($this->client,$this->config);
                    $result = $apiInstance->getRMSLimits($this->constants->getCoAccId());
                    $response['eq']='';
                    $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $apiInstance=new EquityLimitsApi($this->client,$this->config);
                $result = $apiInstance->getSubLimits($this->constants->getEqAccId());
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityLimitsApi($this->client,$this->config);
                $CoResult = $apiInstance->getRMSLimits($this->constants->getCoAccId());
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            
            $this->log->debug("Response Limits :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("Limits :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    } 
    public function GetAMOStxatus()
    {
        $this->log->info("Inside method : GetAMOStxatus");
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $accTyp = $this->constants->getAccTyp();
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->getAMOFlag($this->constants->getEqAccId());
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->getAMOFlagCommodity($this->constants->getCoAccId());
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->getAMOFlag($this->constants->getEqAccId());
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->getAMOFlagCommodity($this->constants->getCoAccId());
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            
            $this->log->debug("Response GetAMOStatus :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("GetAMOStatus :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
	} 
    public function PlaceAMOTrade($TradingSymbol,$Exchange,$Action,$Duration,$OrderType,$Quantity,
    $StreamingSymbol,$LimitPrice,$DisclosedQuantity = "0",$TriggerPrice = "0",$ProductCode = "CNC")
    {
        $this->log->info("Inside method : PlaceAMOTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $apiInstance=new EquityTradeApi($this->client,$this->config);
        $accTyp = $this->constants->getAccTyp();
        $body=[
            'trdSym' => $TradingSymbol,
            'exc' => ExchangeEnum::isValidValue($Exchange),
            'action' => ActionEnum::isValidValue($Action),
            'dur' => DurationEnum::isValidValue($Duration),
            'flQty' => '0',
            'ordTyp' => OrderTypeEnum::isValidValue($OrderType),
            'qty' => $Quantity,
            'dscQty' => $DisclosedQuantity,
            'sym' => $StreamingSymbol,
            'mktPro' => '',
            'lmPrc' => $LimitPrice,
            'trgPrc' => $TriggerPrice,
            'prdCode' => ProductCodeEnum::isValidValue($ProductCode),
            'dtDays' => '',
            'posSqr' => 'NO',
            'minQty' => '',
            'ordSrc' => 'API',
            'vnCode' => '118',
            'rmk' => ''
        ];
        try{
            if($accTyp == "EQ"){
                $this->config->setHost($this->basePathEq); 
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeAMOTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeAMOTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->placeAMOTrade($this->constants->getEqAccId(),$body);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->placeAMOTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            
            $this->log->debug("Response PlaceAMOTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("PlaceAMOTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
		
        
        
    }  
    public function ModifyAMOTrade($TradingSymbol,$Exchange,$Action,$Duration,$OrderType,$Quantity,
    $StreamingSymbol,$LimitPrice,$OrderID,$DisclosedQuantity = "0",$TriggerPrice = "0",$ProductCode = "CNC")
    {
        $this->log->info("Inside method : ModifyAMOTrade");
        $this->validateQuantityForInteger($Quantity);
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body=[
            "dur"=> DurationEnum::isValidValue($Duration),
            "sym"=> $StreamingSymbol,
            "trgPrc"=> $TriggerPrice,
            "nstOID"=> $OrderID,
            "action"=> ActionEnum::isValidValue($Action),
            "ordTyp"=> OrderTypeEnum::isValidValue($OrderType),
            "prdCode"=> ProductCodeEnum::isValidValue($ProductCode),
            "lmPrc"=> $LimitPrice,
            "mktPro"=> "",
            "trdSym"=> $TradingSymbol,
            "dtDays"=> "",
            "dscQty"=>$DisclosedQuantity,
            "exc"=> ExchangeEnum::isValidValue($Exchange),
            "flQty"=> "0",
            "qty"=> $Quantity,
            "nstReqID"=> "2"
        ];
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyAMOTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyAMOTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->modifyAMOTrade($this->constants->getEqAccId(),$body);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->modifyAMOTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']=$result;
                $response['co']=$CoResult;
            }
            
            $this->log->debug("Response ModifyAMOTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("ModifyAMOTrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
        
        
    } 
    //public function CancelAMOTrade($OrderId, $Exchange, $Order_Type, $Product_Code)
    public function CancelAMOTrade($OrderId,$Exchange,$OrderType,$ProductCode)
    {
        $this->log->info("Inside method : CancelAMOTrade");
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body=[
            'nstOID'=> $OrderId, 
            'exc'=> ExchangeEnum::isValidValue($Exchange), 
            'prdCode'=> ProductCodeEnum::isValidValue($ProductCode), 
            'ordTyp'=> OrderTypeEnum::isValidValue($OrderType)];
        $this->log->debug("Request Parameters body :".json_encode($body));
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->cancelAMOTrade($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->cancelAMOTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->cancelAMOTrade($this->constants->getEqAccId(),$body);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->cancelAMOTradeCommodity($this->constants->getCoAccId(),$body);
                $response['eq']=$result;
                $response['co']= $CoResult;
            }
            
            $this->log->debug("Response CancelAMOTrade :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("CancelAMOTrrade :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
	
        
    }  
    public function PositionSquareOff($Orderlist)
    {
        $this->log->info("Inside method : PositionSquareOff");
        foreach($Orderlist as $order){
            $this->validateQuantityForInteger($order['qty']);
        }
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $this->log->debug("Request Parameters OrderList :".json_encode($Orderlist));
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->positionSquareOff($this->constants->getEqAccId(),$Orderlist);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->positionSquareOff($this->constants->getEqAccId(),$Orderlist);
                $response['eq']=$result;
                $response['co']='';
            }
            $this->log->debug("Response PositionSquareOff :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("PositionSquareOff :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }  
    public function ConvertPosition($OrderId, $FillId, $NewProductCode, $OldProductCode, $Exchange, $orderType)
    {
        $this->log->info("Inside method : ConvertPosition");
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        $body=[
            'nstOID'=> $OrderId,
            'flID'=> $FillId,
            'prdCodeCh'=> ProductCodeEnum::isValidValue($NewProductCode),
            'prdCode'=> ProductCodeEnum::isValidValue($OldProductCode),
            'exc'=>  ExchangeEnum::isValidValue($Exchange),
            'ordTyp'=> $orderType
        ];
        $this->log->debug("Request Parameters body :".json_encode($body));
        try{
            if($accTyp == "EQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->convertPositionEquity($this->constants->getEqAccId(),$body);
                $response['eq']=$result;
                $response['co']='';
            }else if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $result = $apiInstance->convertPositionCommodity($this->constants->getCoAccId(),$body);
                $response['eq']='';
                $response['co']=$result;
            }
            else if($accTyp== "COMEQ"){
                $apiInstance=new EquityTradeApi($this->client,$this->config);
                $result = $apiInstance->convertPositionEquity($this->constants->getEqAccId(),$body);
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityTradeApi($this->client,$this->config);
                $CoResult = $apiInstance->convertPositionCommodity($this->constants->getCoAccId(),$body);
                $response['eq']=$result;
                $response['co']= $CoResult;
            }
            $this->log->debug("Response ConvertPosition :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("ConvertPosition :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }  
    public function GetClientPortfolioDetail()
    {
        $this->log->info("Inside method : ConvertPosition");
        $this->config->setHost($this->basePathEq); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        $accTyp = $this->constants->getAccTyp();
        try{      
            if($accTyp== "CO"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityReportsApi($this->client,$this->config);
                $result = $apiInstance->getClientPortfolioDetail($this->constants->getCoAccId());
                $response['eq']='';
                $response['co']=$result;
            }else if($accTyp== "COMEQ"){
                $this->config->setHost($this->basePathComm); 
                $apiInstance=new CommodityReportsApi($this->client,$this->config);
                $result = $apiInstance->getClientPortfolioDetail($this->constants->getCoAccId());
                $response['eq']='';
                $response['co']=$result;
            }
            $this->log->debug("Response ConvertPosition :".json_encode($response));
            return $response;
        } catch (ApiException $e) {
            $this->log->error("ConverPosition :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }  
    public function PlaceMF($token,$ISINCode,$transactionType, $clientCode, $quantity, $amount, $reInvFlag, $folioNumber, $schemeName,$startDate, $endDate, $SIPFrequency, $generateFirstOrderToday, $schemePlan, $schemeCode){
         $body = [
			'currentOrdSts' => "",
			'token' => $token,
			'isin' => $ISINCode,
			'txnTyp' => $transactionType,
			'clientCode' => $clientCode,
			'qty' => $quantity,
			'amt' => $amount,
			'reInvFlg' => $reInvFlag,
			'reqstdBy' => $this->constants->getEqAccId(),
			'folioNo' => $folioNumber,
			'ordTyp' => "FRESH",
			'txnId' => "0",
			'schemeName' => $schemeName,
			'rmrk' => "",
			'mnRdmFlg' => "",
			'ordSrc' => "API",
			'strtDy' => "1",
			'strtDt' => $startDate,
			'endDt' => $endDate,
			'sipFrq' => $SIPFrequency,
			'gfot' => $generateFirstOrderToday,
			'tnr' => "",
			'mdtId' => "",
			'sipregno' => "",
			'siporderno' => "",
			'schemePlan' => $schemePlan,
			'schemeCode' => $schemeCode,
			'euinnumber' => "",
			'dpc' => "Y",
			'closeAccountFlag' => "N",
			'kycflag' => "1",
			'euinflag' => "N",
			'physicalFlag' => "D"
        ];
        $this->log->debug("Request PlaceMF :".json_encode($body));
          $this->config->setHost($this->basePathMf); 

            $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
            $this->config->setIniFilePath($this->iniFilePath);
            try{
                $apiInstance=new MFTradeApi(null,$this->config);
                $result = $apiInstance->placeTradeMF($this->constants->getEqAccId(),$body);
                $this->log->debug("Response PlaceMF :".json_encode($result));
                return $result;
            } catch (ApiException $e) {
                $this->log->error("PlaceMF :  {$e->getMessage()}");
                if($e->getCode()==401){
                    $this->removeDataFile();
                }
                throw $e;
            }
    }
    public function ModifyMF($token,$ISINCode,$transactionType, $clientCode, $quantity, $amount, $reInvFlag, $folioNumber, $schemeName,$startDate, $endDate, $SIPFrequency, $generateFirstOrderToday, $schemePlan, $schemeCode,$transactionId){
        $body = [
            'currentOrdSts'=> 'ACCEPTED', 
            'token' => $token,
			'isin' => $ISINCode,
			'txnTyp' => $transactionType,
			'clientCode' => $clientCode,
			'qty' => $quantity,
			'amt' => $amount,
			'reInvFlg' => $reInvFlag,
			'reqstdBy' => $this->constants->getEqAccId(),
			'folioNo' => $folioNumber,
            'ordTyp'=> 'MODIFY', 
            'txnId'=> $transactionId, 
            'schemeName'=> $schemeName, 
            'rmrk'=> '',
            'mnRdmFlg'=> '', 
            'ordSrc'=> 'API', 
            'strtDy'=> "1", 
            'strtDt' => $startDate,
			'endDt' => $endDate,
			'sipFrq' => $SIPFrequency,
			'gfot' => $generateFirstOrderToday,
            'tnr'=> '',
            'mdtId'=> '', 
            'sipregno'=> '', 
            'siporderno'=> '',
            'schemePlan' => $schemePlan,
			'schemeCode' => $schemeCode,
            'euinnumber'=> '', 
            'dpc'=> 'Y',
            'closeAccountFlag'=> 'N',
            'kycflag'=> '1', 
            'euinflag'=> 'N', 
            'physicalFlag'=> 'D'];
         $this->config->setHost($this->basePathMf); 
          $this->config->setIniFilePath($this->iniFilePath);
          $this->log->debug("Request ModifyMF :".json_encode($body));
         $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        try{
            $apiInstance=new MFTradeApi(null,$this->config);
            $result = $apiInstance->modifyTradeMF($this->constants->getEqAccId(),$body);
            $this->log->debug("Response ModifyMF :".json_encode($result));
            return $result;
        } catch (ApiException $e) {
            $this->log->error("ModifyMF :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
     }
     public function CancelMF($token,$ISINCode,$transactionType, $clientCode, $quantity, $amount, $reInvFlag, $folioNumber, $schemeName,$startDate, $endDate, $SIPFrequency, $generateFirstOrderToday, $schemePlan, $schemeCode,$transactionId){
        $body = [
            'currentOrdSts'=> 'ACCEPTED', 
            'token' => $token,
			'isin' => $ISINCode,
			'txnTyp' => $transactionType,
			'clientCode' => $clientCode,
			'qty' => $quantity,
			'amt' => $amount,
			'reInvFlg' => $reInvFlag,
			'reqstdBy' => $this->constants->getEqAccId(),
			'folioNo' => $folioNumber,
            'ordTyp'=> 'CANCEL', 
            'txnId'=> $transactionId, 
            'schemeName'=> $schemeName, 
            'rmrk'=> '',
            'mnRdmFlg'=> '', 
            'ordSrc'=> 'API', 
            'strtDy'=> "1", 
            'strtDt' => $startDate,
			'endDt' => $endDate,
			'sipFrq' => $SIPFrequency,
			'gfot' => $generateFirstOrderToday,
            'tnr'=> '',
            'mdtId'=> '', 
            'sipregno'=> '', 
            'siporderno'=> '',
            'schemePlan' => $schemePlan,
			'schemeCode' => $schemeCode,
            'euinnumber'=> '', 
            'dpc'=> 'Y',
            'closeAccountFlag'=> 'N',
            'kycflag'=> '1', 
            'euinflag'=> 'N', 
            'physicalFlag'=> 'D'];
         $this->config->setHost($this->basePathMf); 
          $this->config->setIniFilePath($this->iniFilePath);
          $this->log->debug("Request CancelMF :".json_encode($body));
         $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        try{
            $apiInstance=new MFTradeApi(null,$this->config);
            $result = $apiInstance->modifyTradeMF($this->constants->getEqAccId(),$body);
            $this->log->debug("Response CancelMF :".json_encode($result));
            return $result;
        } catch (ApiException $e) {
            $this->log->error("CancelMF :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
     }
   
     public function HoldingMF(){
        $this->config->setHost($this->basePathMf); 
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        $this->config->setIniFilePath($this->iniFilePath);
        try{
            $apiInstance=new MFHoldingsApi(null,$this->config);
            $result = $apiInstance->getAllHoldings($this->constants->getEqAccId());
            $this->log->debug("Response MFHoldingsApi :".json_encode($result));
            return $result;
        } catch (ApiException $e) {
            $this->log->error("GetAllHoldingsMF :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }
    public function OrderBookMF($StartDate, $EndDate){
        $this->config->setHost($this->basePathMf); 
        $this->config->setIniFilePath($this->iniFilePath);
        $this->config->setApiKey('Authorization',$this->constants->getJSessionId());
        try{
            $apiInstance=new MFOrderBookApi(null,$this->config);
            $result = $apiInstance->getReconcialationRequestBook($this->constants->getEqAccId(),$StartDate, $EndDate);
            $this->log->debug("Response MFOrderBookApi :".json_encode($result));
            return $result;
        } catch (ApiException $e) {
            $this->log->error("OrderBookMF :  {$e->getMessage()}");
            if($e->getCode()==401){
                $this->removeDataFile();
            }
            throw $e;
        }
    }
    
    /**
     * validateQuantityForInteger
     *
     * @param  mixed $quantity
     * @return void
     */
    private function validateQuantityForInteger($quantity){
        $number = filter_var($quantity, FILTER_VALIDATE_INT);
        if ($number === false) {
            exit('Quantity Needs To Be Integer');
        }
    }

    /**
     * removeDataFile
     *
     * @return void
     */
    private function removeDataFile()
    {
        unlink($this->filename);
    }
}
