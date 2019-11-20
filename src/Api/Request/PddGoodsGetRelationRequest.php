<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsGetRelationRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<Long>, "pdd_goods_id")
	*/
	private $pddGoodsId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "pdd_goods_id", $this->pddGoodsId);

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
		return "pdd.goods.get.relation";
	}

	public function setPddGoodsId($pddGoodsId)
	{
		$this->pddGoodsId = $pddGoodsId;
	}

}
