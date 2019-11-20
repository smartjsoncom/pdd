<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdUpdateBidRequest extends PopBaseHttpRequest
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
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddAdUpdateBidRequest_BidList, "bid_list")
	*/
	private $bidList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "bid_list", $this->bidList);

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
		return "pdd.ad.update.bid";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setBidList($bidList)
	{
		$this->bidList = $bidList;
	}

}

class PddAdUpdateBidRequest_BidList extends PopBaseJsonEntity
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
	* @JsonProperty(Long, "bid_id")
	*/
	private $bidId;

	public function setBidPremiumRate($bidPremiumRate)
	{
		$this->bidPremiumRate = $bidPremiumRate;
	}

	public function setBid($bid)
	{
		$this->bid = $bid;
	}

	public function setBidId($bidId)
	{
		$this->bidId = $bidId;
	}

}
