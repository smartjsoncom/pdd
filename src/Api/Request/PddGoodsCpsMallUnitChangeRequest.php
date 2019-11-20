<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsCpsMallUnitChangeRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "rate")
	*/
	private $rate;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "rate", $this->rate);

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
		return "pdd.goods.cps.mall.unit.change";
	}

	public function setRate($rate)
	{
		$this->rate = $rate;
	}

}
