<?php

namespace com\edel\Test\EdelCsvTestSuite;

include("vendor/autoload.php");

use Exception;
use PHPUnit\Framework\TestCase;
use com\edel\EdelweissAPIConnect;
use com\edel\Order;
use com\edel\Test\EdelCsvTestSuite\Logger;
use com\edel\edelconnect\models\BasketOrder;
use com\edel\EdelweissApiUtil;
use com\edel\Test\EdelCsvTestSuite\OrderPlacementCsvObj;
use SebastianBergmann\CodeCoverage\Report\PHP;

class OrderTests extends TestCase
{
    private static $iniConfig;
    private $requestId;
    private $apiKey;
    private $password;
    private $dContract;
    private $settingsFilePath;
    private $csvFilePath;
    private $csvTestOutputFilePath;
    private $log;
    private $apiConnect;
    private $constants;
    const PASSED = 'Passed';
    const FAILED = 'FAILED';

    public static function setUpBeforeClass(): void
    {
        self::$iniConfig = parse_ini_file("config.ini");
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->requestId = self::$iniConfig['RequestId'];
        $this->apiKey = self::$iniConfig['ApiKey'];
        $this->password = self::$iniConfig['Password'];
        $this->dContract = self::$iniConfig['Contract'];
        $this->settingsFilePath = self::$iniConfig['SettingsFilePath'];
        $this->csvFilePath = self::$iniConfig['CsvFilePath'];
        $this->csvTestOutputFilePath = self::$iniConfig['CsvTestOutputFilePath'];
        $this->apiConnect = new EdelweissAPIConnect($this->apiKey, $this->password, $this->requestId, $this->dContract, $this->settingsFilePath);
        $obj = $this->apiConnect->GetLoginData();
        $this->constants = new EdelweissApiUtil();
        $this->constants->setAccTyp($obj['acctyp']);
    }

    /**
     * Test case for csvtestactions
     *
     * Convert a position for a client.
     *
     */
    public function testCsvTestActions()
    {
        $data = [];
        $header = NULL;
        $headers = NULL;
        $counter = 0;
        $oids = [];
        $basketOrderList = [];
        $sqrOffList = [];
        $beanObj = new OrderPlacementCsvObj();

        if (($h = fopen("{$this->csvFilePath}", "r")) !== FALSE && ($resultCsv = fopen("{$this->csvTestOutputFilePath}", 'w')) !== FALSE) {
            while (($row = fgetcsv($h, 1000, ",")) !== FALSE) {
                if (!$header) {
                    $header = $row;
                    $extra_columns = array(' TestStatus'  => '', ' TestOutput' => '');
                    $header = array_merge($header, array_keys($extra_columns));
                    fputcsv($resultCsv, $header);
                } else {
                    $result = [];
                    fputcsv($resultCsv, $row);
                    array_map(function ($v1, $v2) use (&$result, &$counter) {
                        $result[!is_null($v1) ? $v1 : "" . $counter++] = !is_null($v2) ? $v2 : "";
                    }, $header, $row);
                    $data[] = $result;
                }
            }
            fclose($resultCsv);
            fclose($h);
        }

        /* filtering the records for active tests only */
        $data = array_filter($data, function ($item) {
            return $item['Active'] == 1;
        });

        if (count($data)) {
            foreach ($data as $k => $d) {
                $beanObj->populate($d);
                if ($counter == 0) {
                    $counter++;
                    echo (PHP_EOL . "Test Started" . PHP_EOL);
                    echo ("------------------" . PHP_EOL);
                }
                if (strcasecmp($beanObj->TestAction, "PlaceTrade") == 0) {
                    echo ("Place Trade => ");
                    try {
                        $response = $this->apiConnect->PlaceTrade($beanObj->Symbol, $beanObj->Exchange, $beanObj->BuySell, $beanObj->Validity, $beanObj->OrderType, $beanObj->Quantity, $beanObj->ExchangeCode, $beanObj->LimitPrice, $beanObj->DiscQty, $beanObj->TriggerPrice, $beanObj->ProductCode);
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                        $this->getAssertEquals($response, 'Your order has been placed succesfully!.');
                        $oids[$counter] = $response['eq']['data']['oid'];
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "ModifyTrade") == 0) {
                    echo ("Modify Trade => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->modifyTrade($beanObj->Symbol, $beanObj->Exchange, $beanObj->BuySell, $beanObj->Validity, $beanObj->OrderType, $beanObj->Quantity, $beanObj->LimitPrice, $beanObj->DiscQty,  $beanObj->TriggerPrice, $beanObj->ProductCode, $beanObj->Nest_Order_ID);
                        $this->getAssertEquals($response, 'Your order has been modified succesfully!.');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "CancelTrade") == 0) {
                    echo ("Cancel Trade => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->CancelTrade($beanObj->Nest_Order_ID, $beanObj->Exchange, $beanObj->OrderType, $beanObj->ProductCode);
                        $this->getAssertEquals($response, 'Your order has been cancelled succesfully!.');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "OrderBook") == 0) {
                    echo ("Order Book => ");
                    try {
                        $response = $this->apiConnect->OrderBook();
                        $this->getAssertNotEmpty($response, 'ord');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "MFOrderBook") == 0) {
                    echo ("MFOrder Book => ");
                    try {
                        $response = $this->apiConnect->OrderBookMF($beanObj->FromDate, $beanObj->ToDate);
                        $this->getAssertNotEmpty($response, 'ordLst');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "TradeBook") == 0) {
                    echo ("Trade Book => ");
                    try {
                        $response = $this->apiConnect->TradeBook();
                        $this->getAssertNotEmpty($response, 'trade');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "NetPosition") == 0) {
                    echo ("NetPosition => ");
                    try {
                        $response = $this->apiConnect->NetPosition();
                        $this->getAssertNotEmpty($response, 'pos');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "OrderDetails") == 0) {
                    echo ("OrderDetails => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->OrderDetails($beanObj->Nest_Order_ID, $beanObj->Exchange);
                        $this->getAssertNotEmpty($response, 'ord');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "OrderHistory") == 0) {
                    echo ("OrderHistory => ");
                    try {
                        $response = $this->apiConnect->OrderHistory($beanObj->FromDate, $beanObj->ToDate);
                        $this->getAssertNotEmpty($response, 'hstOrdBk');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "Holdings") == 0) {
                    echo ("Holdings => ");
                    try {
                        $response = $this->apiConnect->Holdings();
                        $this->getAssertNotEmpty($response, 'rmsHdg');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "HoldingsMF") == 0) {
                    echo ("HoldingsMF => ");
                    try {
                        $response = $this->apiConnect->HoldingMF();
                        $this->getAssertNotEmpty($response, 'mfHdgUsable');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "PlaceCoverTrade") == 0) {
                    echo ("PlaceCoverTrade => ");
                    try {
                        $response = $this->apiConnect->PlaceCoverTrade($beanObj->Symbol, $beanObj->Exchange, $beanObj->BuySell, $beanObj->Validity, $beanObj->OrderType, $beanObj->Quantity, $beanObj->ExchangeCode, $beanObj->LimitPrice, $beanObj->DiscQty, $beanObj->TriggerPrice, $beanObj->ProductCode);
                        $this->getAssertEquals($response, 'Your Cover order has been placed successfully!.', false);
                        echo (self::PASSED . PHP_EOL);
                        $oids[$counter] = $response['eq']['data']['oid'];
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "PlaceGtcGtdTrade") == 0) {
                    echo ("PlaceGtcGtdTrade => ");
                    try {
                        $response = $this->apiConnect->PlaceGtcGtdTrade($beanObj->Symbol, $beanObj->Exchange, $beanObj->BuySell, $beanObj->Validity, $beanObj->OrderType, $beanObj->Quantity, $beanObj->LimitPrice, $beanObj->ProductCode);
                        $this->getAssertEquals($response, 'Your order has been placed succesfully!.');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "ModifyCoverTrade") == 0) {
                    echo ("ModifyCoverTrade => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->ModifyCoverTrade($beanObj->Symbol, $beanObj->Exchange, $beanObj->BuySell, $beanObj->Validity, $beanObj->OrderType, $beanObj->Quantity, $beanObj->ExchangeCode, $beanObj->LimitPrice, $beanObj->DiscQty,  $beanObj->TriggerPrice, $beanObj->ProductCode, $beanObj->Nest_Order_ID);
                        $this->getAssertEquals($response, 'Your Cover order has been modified successfully!.', false);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "ExitCoverTrade") == 0) {
                    echo ("ExitCoverTrade => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->ExitCoverTrade($beanObj->Nest_Order_ID);
                        $this->getAssertEquals($response, 'You have exited from the order successfully!.', false);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "PlaceBracketTrade") == 0) {
                    echo ("PlaceBracketTrade => ");
                    try {
                        $response = $this->apiConnect->PlaceBracketTrade($beanObj->Exchange, $beanObj->ExchangeCode, $beanObj->BuySell, $beanObj->Quantity, $beanObj->Validity, $beanObj->DiscQty, $beanObj->LimitPrice, $beanObj->Target, $beanObj->StopLoss, $beanObj->Trailing_Stop_Loss, $beanObj->Trailing_Stop_Loss_Value);
                        $oids[$counter] = $response['eq']['data']['oid'];
                        $this->getAssertEquals($response, 'Your order has been placed succesfully!.', false);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "ExitBracketTrade") == 0) {
                    echo ("ExitBracketTrade => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->ExitBracketTrade($beanObj->Nest_Order_ID, $beanObj->Syom_Id, $beanObj->Status);
                        $this->getAssertEquals($response, 'Your order has been cancelled succesfully!.', false);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "Basket") == 0) {
                    echo ("Basket => ");
                    try {
                        $basketOrder = [
                            "exc" => $beanObj->Exchange,
                            "trdSym" => $beanObj->Symbol,
                            "action" => $beanObj->BuySell,
                            "prdCode" => $beanObj->ProductCode,
                            "ordTyp" => $beanObj->OrderType,
                            "dur" => $beanObj->Validity,
                            "price" => $beanObj->LimitPrice,
                            "trgPrc" => $beanObj->TriggerPrice,
                            "qty" => $beanObj->Quantity,
                            "dscQty" => $beanObj->DiscQty,
                            "gtdDt" => "NA",
                            "rmk" => "UserRemarksTesting",
                        ];
                        $basketOrderList["ordLst"][] = $basketOrder;
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, 'Added to basket list successfully!');
                        $this->assertTrue(!empty($basketOrderList), 'Success');
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . 'Added to basket list successfully!', 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "PlaceBasketTrade") == 0) {
                    echo ("PlaceBasketTrade => ");
                    try {
                        $response = $this->apiConnect->PlaceBasketTrade($basketOrderList);
                        $this->getAssertEquals($response, 'Your order has been placed succesfully!.', false);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "Limits") == 0) {
                    echo ("Limits => ");
                    try {
                        $response = $this->apiConnect->Limits();
                        $this->assertNotEmpty($response['eq']['data']);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "GetAMOStatus") == 0) {
                    echo ("GetAMOStatus => ");
                    try {
                        $response = $this->apiConnect->GetAMOStxatus();
                        $this->assertEquals("true", $response['eq']['data']['sts']);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "PlaceAMOTrade") == 0) {
                    echo ("PlaceAMOTrade => ");
                    try {
                        $response = $this->apiConnect->PlaceAMOTrade($beanObj->Symbol, $beanObj->Exchange, $beanObj->BuySell, $beanObj->Validity, $beanObj->OrderType, $beanObj->Quantity, $beanObj->ExchangeCode, $beanObj->LimitPrice, $beanObj->DiscQty, $beanObj->TriggerPrice, $beanObj->ProductCode);
                        $this->getAssertEquals($response, 'Your AMO order has been placed succesfully!.');
                        $oids[$counter] = $response['eq']['data']['oid'];
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "ModifyAMOTrade") == 0) {
                    echo ("ModifyAMOTrade => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->ModifyAMOTrade($beanObj->Symbol, $beanObj->Exchange, $beanObj->BuySell, $beanObj->Validity, $beanObj->OrderType, $beanObj->Quantity, $beanObj->ExchangeCode, $beanObj->LimitPrice, $beanObj->Nest_Order_ID, $beanObj->DiscQty,  $beanObj->TriggerPrice, $beanObj->ProductCode);
                        $this->getAssertEquals($response, 'Your AMO order has been modified succesfully!.');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "CancelAMOTrade") == 0) {
                    echo ("CancelAMOTrade => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }
                        $response = $this->apiConnect->CancelAMOTrade($beanObj->Nest_Order_ID, $beanObj->Exchange, $beanObj->OrderType, $beanObj->ProductCode);
                        $this->getAssertEquals($response, 'Your AMO order has been cancelled succesfully!.');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "SqrOff") == 0) {
                    echo ("SqrOff => ");
                    try {
                        $body = array(
                            "trdSym" => $beanObj->Symbol,
                            "exc" => $beanObj->Exchange,
                            "action" => $beanObj->BuySell,
                            "dur" => $beanObj->Validity,
                            "flQty" => "0",
                            "ordTyp" => $beanObj->OrderType,
                            "qty" => $beanObj->Quantity,
                            "dscQty" => $beanObj->DiscQty,
                            "sym" =>  $beanObj->ExchangeCode,
                            "mktPro" => "",
                            "lmPrc" => $beanObj->LimitPrice,
                            "trgPrc" => $beanObj->TriggerPrice,
                            "prdCode" => $beanObj->ProductCode,
                            "dtDays" => $beanObj->DtDays,
                            "posSqr" => '',
                            "minQty" => "0",
                            "ordSrc" => "TX3",
                            "vnCode" => "",
                            "rmk" => ""
                        );
                        $sqrOffList[] = $body;
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, 'Added to SqrOff list successfully!');
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . 'Added to SqrOff list successfully!', 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "PositionSquareOff") == 0) {
                    echo ("PositionSquareOff => ");
                    try {
                        $response = $this->apiConnect->PositionSquareOff($sqrOffList);
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        if (isset($response['eq']['data']['posSqrOffs'])) {
                            foreach ($response['eq']['data']['posSqrOffs'] as $item) {
                                $this->assertEquals('Your order has been placed succesfully!.', $item['msg']);
                            }
                        }
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "ConvertPosition") == 0) {
                    echo ("ConvertPosition => ");
                    try {
                        if (!empty($beanObj->Nest_Order_ID)) {
                            $beanObj->Nest_Order_ID = $oids[$counter];
                        }

                        $response = $this->apiConnect->ConvertPosition($beanObj->Nest_Order_ID, $beanObj->Fill_Id, $beanObj->New_Product_Code, $beanObj->Old_Product_Code, $beanObj->Exchange, $beanObj->OrderType);
                        $this->getAssertEquals($response, 'PositionConversion Successful');
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "Logout") == 0) {
                    echo ("Logout => ");
                    try {
                        $response = $this->apiConnect->Logout();
                        echo (self::PASSED . PHP_EOL);
                        $this->assertEquals('You have been logged out successfully.', $response['data']['msg']);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "PlaceMF") == 0) {
                    echo ("PlaceMF => ");
                    try {
                        $response = $this->apiConnect->PlaceMF(
                            $beanObj->MF_Token,
                            $beanObj->MF_ISIN_Code,
                            $beanObj->MF_Transaction_Type,
                            $beanObj->MF_Client_Code,
                            $beanObj->MF_Quantity,
                            $beanObj->MF_Amount,
                            $beanObj->MF_ReInv_Flag,
                            $beanObj->MF_Folio_Number,
                            $beanObj->MF_Scheme_Name,
                            $beanObj->MF_Start_Date,
                            $beanObj->MF_End_Date,
                            $beanObj->MF_SIP_Frequency,
                            $beanObj->MF_Generate_First_Order_Today,
                            $beanObj->MF_Scheme_Plan,
                            $beanObj->MF_Scheme_Code
                        );
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "ModifyMF") == 0) {
                    echo ("ModifyMF => ");
                    try {
                        $response = $this->apiConnect->ModifyMF(
                            $beanObj->MF_Token,
                            $beanObj->MF_ISIN_Code,
                            $beanObj->MF_Transaction_Type,
                            $beanObj->MF_Client_Code,
                            $beanObj->MF_Quantity,
                            $beanObj->MF_Amount,
                            $beanObj->MF_ReInv_Flag,
                            $beanObj->MF_Folio_Number,
                            $beanObj->MF_Scheme_Name,
                            $beanObj->MF_Start_Date,
                            $beanObj->MF_End_Date,
                            $beanObj->MF_SIP_Frequency,
                            $beanObj->MF_Generate_First_Order_Today,
                            $beanObj->MF_Scheme_Plan,
                            $beanObj->MF_Scheme_Code,
                            $beanObj->MF_Transaction_Id
                        );
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "CancelMF") == 0) {
                    echo ("CancelMF => ");
                    try {
                        $response = $this->apiConnect->CancelMF(
                            $beanObj->MF_Token,
                            $beanObj->MF_ISIN_Code,
                            $beanObj->MF_Transaction_Type,
                            $beanObj->MF_Client_Code,
                            $beanObj->MF_Quantity,
                            $beanObj->MF_Amount,
                            $beanObj->MF_ReInv_Flag,
                            $beanObj->MF_Folio_Number,
                            $beanObj->MF_Scheme_Name,
                            $beanObj->MF_Start_Date,
                            $beanObj->MF_End_Date,
                            $beanObj->MF_SIP_Frequency,
                            $beanObj->MF_Generate_First_Order_Today,
                            $beanObj->MF_Scheme_Plan,
                            $beanObj->MF_Scheme_Code,
                            $beanObj->MF_Transaction_Id
                        );
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }

                if (strcasecmp($beanObj->TestAction, "GetLoginData") == 0) {
                    echo ("GetLoginData => ");
                    try {
                        $response = $this->apiConnect->GetLoginData();
                        echo (self::PASSED . PHP_EOL);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::PASSED, json_encode($response));
                        Logger::log('Response ' . $beanObj->TestAction . ' : ' . json_encode($response), 'Debug');
                    } catch (Exception $e) {
                        Logger::log('Error : ' . $e, 'Error');
                        echo (self::FAILED . PHP_EOL . $e);
                        $this->updateCsvWithTestOutput($k + 1, $header, self::FAILED, $e);
                    }
                }
            }
        } else {
            $this->expectNotToPerformAssertions();
            echo (PHP_EOL . '=====NO Test Actions To Perform=====' . PHP_EOL);
        }
    }

    /**
     * updateCsvWithTestOutput
     *
     * @param  mixed $index
     * @param  mixed $headers
     * @param  mixed $testStatus
     * @param  mixed $testOutput
     * @return void
     */
    private function updateCsvWithTestOutput($index, $headers, $testStatus, $testOutput)
    {
        $newdata = [];
        $i = 0;
        if (($resultCsv = fopen("{$this->csvTestOutputFilePath}", 'r')) !== FALSE) {
            while (($row = fgetcsv($resultCsv, 1000, ",")) !== FALSE) {
                if ($i == $index) {
                    $newdata[$i] = $row;
                    $newdata[$i][count($headers) - 2] = $testStatus;
                    $newdata[$i][count($headers) - 1] = $testOutput;
                    $i++;
                    continue;
                }

                $newdata[$i] = $row;
                $i++;
            }
            fclose($resultCsv);
            $handle = fopen("{$this->csvTestOutputFilePath}", 'w');
            foreach ($newdata as $line) {
                fputcsv($handle, $line);
            }

            fclose($handle);
        }
    }

    /**
     * getAssertEquals
     *
     * @param  mixed $response
     * @param  mixed $msg
     * @param  mixed $isCo
     * @param  mixed $isPosSqrOff
     * @return void
     */
    private function getAssertEquals($response, $msg, $isCo = true, $isPosSqrOff = false)
    {
        if ($this->constants->getAccTyp() == "EQ") {
            $this->assertEquals($msg,  $response['eq']['data']['msg']);
        } else if ($this->constants->getAccTyp() == "CO") {
            $this->assertEquals($msg,  $response['co']['data']['msg']);
        } else if ($this->constants->getAccTyp() == "COMEQ") {
            $this->assertEquals($msg,  $response['eq']['data']['msg']);
            if ($isCo) {
                $this->assertEquals($msg, $response['co']['data']['msg']);
            }
        }
    }

    /**
     * getAssertNotEmpty
     *
     * @param  mixed $response
     * @param  mixed $key
     * @return void
     */
    private function getAssertNotEmpty($response, $key)
    {
        if ($this->constants->getAccTyp() == "EQ") {
            $this->assertNotEmpty($response['eq']['data'][$key]);
        } else if ($this->constants->getAccTyp() == "CO") {
            $this->assertNotEmpty($response['co']['data'][$key]);
        } else if ($this->constants->getAccTyp() == "COMEQ") {
            $this->assertNotEmpty($response['eq']['data'][$key]);
            $this->assertNotEmpty($response['co']['data'][$key]);
        }
    }
}
