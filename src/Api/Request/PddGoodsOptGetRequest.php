<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsOptGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "parent_opt_id")
	*/
	private $parentOptId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "parent_opt_id", $this->parentOptId);

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
		return "pdd.goods.opt.get";
	}

	public function setParentOptId($parentOptId)
	{
		$this->parentOptId = $parentOptId;
	}

}
