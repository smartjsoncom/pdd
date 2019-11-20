<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkOauthOrderDetailGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_sn", $this->orderSn);

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
		return "pdd.ddk.oauth.order.detail.get";
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

}
