<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsSpecIdGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "parent_spec_id")
	*/
	private $parentSpecId;

	/**
	* @JsonProperty(String, "spec_name")
	*/
	private $specName;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "parent_spec_id", $this->parentSpecId);
		$this->setUserParam($params, "spec_name", $this->specName);

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
		return "pdd.goods.spec.id.get";
	}

	public function setParentSpecId($parentSpecId)
	{
		$this->parentSpecId = $parentSpecId;
	}

	public function setSpecName($specName)
	{
		$this->specName = $specName;
	}

}
