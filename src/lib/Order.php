<?php

namespace com\edel;

class Order
{
    private $trdSym;

    private $exc;

    private $action;

    private $dur;

    private $ordTyp;

    private $qty;

    private $dscQty;

    private $sym;

    private $price;

    private $trgPrc;

    private $prdCode;

    private $GTDDate;

    private $rmk;

    public function __construct($Exchange, $TradingSymbol, $StreamingSymbol, $Action, $ProductCode, $OrderType, $Duration, $Price, $TriggerPrice, $Quantity, $DisclosedQuantity, $GTDDate, $Remark)
    {
        $this->trdSym = $TradingSymbol;

        $this->exc = $Exchange;

        $this->action = $Action;

        $this->dur = $Duration;

        $this->ordTyp = $OrderType;

        $this->qty = $Quantity;

        $this->dscQty = $DisclosedQuantity;

        $this->sym = $StreamingSymbol;

        $this->price = $Price;

        $this->trgPrc = $TriggerPrice;

        $this->prdCode = $ProductCode;

        $this->GTDDate = $GTDDate;

        $this->rmk = $Remark;
    }
}
