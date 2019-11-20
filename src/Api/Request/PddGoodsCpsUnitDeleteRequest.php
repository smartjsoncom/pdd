<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsCpsUnitDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_id", $this->goodsId);

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
		return "pdd.goods.cps.unit.delete";
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

}
