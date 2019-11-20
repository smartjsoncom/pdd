<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddWmsOrderQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddWmsOrderQueryRequest_Request, "request")
	*/
	private $request;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "request", $this->request);

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
		return "pdd.wms.order.query";
	}

	public function setRequest($request)
	{
		$this->request = $request;
	}

}

class PddWmsOrderQueryRequest_Request extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "orderCode")
	*/
	private $orderCode;

	/**
	* @JsonProperty(String, "orderType")
	*/
	private $orderType;

	/**
	* @JsonProperty(String, "warehouseCode")
	*/
	private $warehouseCode;

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
	}

}
