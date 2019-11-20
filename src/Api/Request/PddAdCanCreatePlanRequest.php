<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCanCreatePlanRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "plan_name")
	*/
	private $planName;

	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "plan_name", $this->planName);
		$this->setUserParam($params, "scene_type", $this->sceneType);

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
		return "pdd.ad.can.create.plan";
	}

	public function setPlanName($planName)
	{
		$this->planName = $planName;
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

}
