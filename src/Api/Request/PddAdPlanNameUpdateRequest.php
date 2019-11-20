<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdPlanNameUpdateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(Long, "plan_id")
	*/
	private $planId;

	/**
	* @JsonProperty(String, "plan_name")
	*/
	private $planName;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "plan_id", $this->planId);
		$this->setUserParam($params, "plan_name", $this->planName);

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
		return "pdd.ad.plan.name.update";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setPlanId($planId)
	{
		$this->planId = $planId;
	}

	public function setPlanName($planName)
	{
		$this->planName = $planName;
	}

}
