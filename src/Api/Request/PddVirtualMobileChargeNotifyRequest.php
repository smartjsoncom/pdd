<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddVirtualMobileChargeNotifyRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddVirtualMobileChargeNotifyRequest_ChargeCertiItem>, "charge_certi")
	*/
	private $chargeCerti;

	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	/**
	* @JsonProperty(String, "outer_order_sn")
	*/
	private $outerOrderSn;

	/**
	* @JsonProperty(String, "status")
	*/
	private $status;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "charge_certi", $this->chargeCerti);
		$this->setUserParam($params, "order_sn", $this->orderSn);
		$this->setUserParam($params, "outer_order_sn", $this->outerOrderSn);
		$this->setUserParam($params, "status", $this->status);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.virtual.mobile.charge.notify";
	}

	public function setChargeCerti($chargeCerti)
	{
		$this->chargeCerti = $chargeCerti;
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

	public function setOuterOrderSn($outerOrderSn)
	{
		$this->outerOrderSn = $outerOrderSn;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

}

class PddVirtualMobileChargeNotifyRequest_ChargeCertiItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "charge_certi_amount")
	*/
	private $chargeCertiAmount;

	/**
	* @JsonProperty(String, "charge_certi_date")
	*/
	private $chargeCertiDate;

	/**
	* @JsonProperty(String, "charge_certi_mobile_tail")
	*/
	private $chargeCertiMobileTail;

	/**
	* @JsonProperty(String, "charge_certi_order_sn")
	*/
	private $chargeCertiOrderSn;

	/**
	* @JsonProperty(String, "charge_certi_text")
	*/
	private $chargeCertiText;

	public function setChargeCertiAmount($chargeCertiAmount)
	{
		$this->chargeCertiAmount = $chargeCertiAmount;
	}

	public function setChargeCertiDate($chargeCertiDate)
	{
		$this->chargeCertiDate = $chargeCertiDate;
	}

	public function setChargeCertiMobileTail($chargeCertiMobileTail)
	{
		$this->chargeCertiMobileTail = $chargeCertiMobileTail;
	}

	public function setChargeCertiOrderSn($chargeCertiOrderSn)
	{
		$this->chargeCertiOrderSn = $chargeCertiOrderSn;
	}

	public function setChargeCertiText($chargeCertiText)
	{
		$this->chargeCertiText = $chargeCertiText;
	}

}
