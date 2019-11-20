<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddPromotionCouponQuantityAddRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "batch_id")
	*/
	private $batchId;

	/**
	* @JsonProperty(Long, "add_quantity")
	*/
	private $addQuantity;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "batch_id", $this->batchId);
		$this->setUserParam($params, "add_quantity", $this->addQuantity);

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
		return "pdd.promotion.coupon.quantity.add";
	}

	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
	}

	public function setAddQuantity($addQuantity)
	{
		$this->addQuantity = $addQuantity;
	}

}
