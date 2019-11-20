<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdUpdateLocationBidRequest extends PopBaseHttpRequest
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
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddAdUpdateLocationBidRequest_LocationBidListItem>, "location_bid_list")
	*/
	private $locationBidList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "location_bid_list", $this->locationBidList);

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
		return "pdd.ad.update.location.bid";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setLocationBidList($locationBidList)
	{
		$this->locationBidList = $locationBidList;
	}

}

class PddAdUpdateLocationBidRequest_LocationBidListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "bid_premium_rate")
	*/
	private $bidPremiumRate;

	/**
	* @JsonProperty(Long, "location_bid_id")
	*/
	private $locationBidId;

	public function setBidPremiumRate($bidPremiumRate)
	{
		$this->bidPremiumRate = $bidPremiumRate;
	}

	public function setLocationBidId($locationBidId)
	{
		$this->locationBidId = $locationBidId;
	}

}
