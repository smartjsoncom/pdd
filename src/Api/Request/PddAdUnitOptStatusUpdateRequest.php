<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdUnitOptStatusUpdateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(List<Long>, "unit_ids")
	*/
	private $unitIds;

	/**
	* @JsonProperty(Integer, "opt_status")
	*/
	private $optStatus;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "unit_ids", $this->unitIds);
		$this->setUserParam($params, "opt_status", $this->optStatus);

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
		return "pdd.ad.unit.opt.status.update";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setUnitIds($unitIds)
	{
		$this->unitIds = $unitIds;
	}

	public function setOptStatus($optStatus)
	{
		$this->optStatus = $optStatus;
	}

}
