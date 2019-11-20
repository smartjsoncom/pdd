<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsOuterCatMappingGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "outer_cat_id")
	*/
	private $outerCatId;

	/**
	* @JsonProperty(String, "outer_cat_name")
	*/
	private $outerCatName;

	/**
	* @JsonProperty(String, "outer_goods_name")
	*/
	private $outerGoodsName;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "outer_cat_id", $this->outerCatId);
		$this->setUserParam($params, "outer_cat_name", $this->outerCatName);
		$this->setUserParam($params, "outer_goods_name", $this->outerGoodsName);

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
		return "pdd.goods.outer.cat.mapping.get";
	}

	public function setOuterCatId($outerCatId)
	{
		$this->outerCatId = $outerCatId;
	}

	public function setOuterCatName($outerCatName)
	{
		$this->outerCatName = $outerCatName;
	}

	public function setOuterGoodsName($outerGoodsName)
	{
		$this->outerGoodsName = $outerGoodsName;
	}

}
