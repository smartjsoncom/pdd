<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddPromotionCouponCloseRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "batch_id")
	*/
	private $batchId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "batch_id", $this->batchId);

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
		return "pdd.promotion.coupon.close";
	}

	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
	}

}
