<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsSaleStatusSetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	/**
	* @JsonProperty(Integer, "is_onsale")
	*/
	private $isOnsale;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_id", $this->goodsId);
		$this->setUserParam($params, "is_onsale", $this->isOnsale);

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
		return "pdd.goods.sale.status.set";
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

	public function setIsOnsale($isOnsale)
	{
		$this->isOnsale = $isOnsale;
	}

}
