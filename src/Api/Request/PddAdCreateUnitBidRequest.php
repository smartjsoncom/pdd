<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCreateUnitBidRequest extends PopBaseHttpRequest
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
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddAdCreateUnitBidRequest_BidsItem>, "bids")
	*/
	private $bids;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "bids", $this->bids);

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
		return "pdd.ad.create.unit.bid";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setBids($bids)
	{
		$this->bids = $bids;
	}

}

class PddAdCreateUnitBidRequest_BidsItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "bid_premium_rate")
	*/
	private $bidPremiumRate;

	/**
	* @JsonProperty(Long, "bid")
	*/
	private $bid;

	/**
	* @JsonProperty(Long, "sub_level_target_id")
	*/
	private $subLevelTargetId;

	/**
	* @JsonProperty(Integer, "target_type")
	*/
	private $targetType;

	public function setBidPremiumRate($bidPremiumRate)
	{
		$this->bidPremiumRate = $bidPremiumRate;
	}

	public function setBid($bid)
	{
		$this->bid = $bid;
	}

	public function setSubLevelTargetId($subLevelTargetId)
	{
		$this->subLevelTargetId = $subLevelTargetId;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
	}

}
