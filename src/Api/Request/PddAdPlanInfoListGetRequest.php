<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdPlanInfoListGetRequest extends PopBaseHttpRequest
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

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "plan_id", $this->planId);

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
		return "pdd.ad.plan.info.list.get";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setPlanId($planId)
	{
		$this->planId = $planId;
	}

}
