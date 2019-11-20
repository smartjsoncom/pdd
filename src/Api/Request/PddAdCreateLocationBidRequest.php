<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCreateLocationBidRequest extends PopBaseHttpRequest
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
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddAdCreateLocationBidRequest_LocationBidsItem>, "location_bids")
	*/
	private $locationBids;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "location_bids", $this->locationBids);

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
		return "pdd.ad.create.location.bid";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setLocationBids($locationBids)
	{
		$this->locationBids = $locationBids;
	}

}

class PddAdCreateLocationBidRequest_LocationBidsItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "bid_premium_rate")
	*/
	private $bidPremiumRate;

	/**
	* @JsonProperty(Integer, "location_type")
	*/
	private $locationType;

	public function setBidPremiumRate($bidPremiumRate)
	{
		$this->bidPremiumRate = $bidPremiumRate;
	}

	public function setLocationType($locationType)
	{
		$this->locationType = $locationType;
	}

}
