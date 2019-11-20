<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkCouponInfoQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<String>, "coupon_ids")
	*/
	private $couponIds;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "coupon_ids", $this->couponIds);

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
		return "pdd.ddk.coupon.info.query";
	}

	public function setCouponIds($couponIds)
	{
		$this->couponIds = $couponIds;
	}

}
