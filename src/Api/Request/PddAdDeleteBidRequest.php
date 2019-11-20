<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdDeleteBidRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(Long, "unit_id")
	*/
	private $unitId;

	/**
	* @JsonProperty(String, "bid_ids")
	*/
	private $bidIds;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "bid_ids", $this->bidIds);

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
		return "pdd.ad.delete.bid";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setBidIds($bidIds)
	{
		$this->bidIds = $bidIds;
	}

}
