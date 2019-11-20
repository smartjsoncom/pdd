<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCreativeQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "unit_id")
	*/
	private $unitId;

	/**
	* @JsonProperty(String, "begin_date")
	*/
	private $beginDate;

	/**
	* @JsonProperty(String, "end_date")
	*/
	private $endDate;

	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "begin_date", $this->beginDate);
		$this->setUserParam($params, "end_date", $this->endDate);
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
		return "pdd.ad.creative.query";
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

}
