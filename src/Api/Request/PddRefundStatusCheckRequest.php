<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddRefundStatusCheckRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_sns")
	*/
	private $orderSns;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_sns", $this->orderSns);

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
		return "pdd.refund.status.check";
	}

	public function setOrderSns($orderSns)
	{
		$this->orderSns = $orderSns;
	}

}
