<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddInvoiceDetailQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	/**
	* @JsonProperty(String, "serial_no")
	*/
	private $serialNo;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_sn", $this->orderSn);
		$this->setUserParam($params, "serial_no", $this->serialNo);

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
		return "pdd.invoice.detail.query";
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

	public function setSerialNo($serialNo)
	{
		$this->serialNo = $serialNo;
	}

}
