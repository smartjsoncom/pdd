<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdPlanCreateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(String, "plan_name")
	*/
	private $planName;

	/**
	* @JsonProperty(Long, "max_cost")
	*/
	private $maxCost;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddAdPlanCreateRequest_DiscountsItem>, "discounts")
	*/
	private $discounts;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "plan_name", $this->planName);
		$this->setUserParam($params, "max_cost", $this->maxCost);
		$this->setUserParam($params, "discounts", $this->discounts);

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
		return "pdd.ad.plan.create";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setPlanName($planName)
	{
		$this->planName = $planName;
	}

	public function setMaxCost($maxCost)
	{
		$this->maxCost = $maxCost;
	}

	public function setDiscounts($discounts)
	{
		$this->discounts = $discounts;
	}

}

class PddAdPlanCreateRequest_DiscountsItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "rate")
	*/
	private $rate;

	/**
	* @JsonProperty(Integer, "index")
	*/
	private $index;

	public function setRate($rate)
	{
		$this->rate = $rate;
	}

	public function setIndex($index)
	{
		$this->index = $index;
	}

}
