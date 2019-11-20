<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdUnitCreateRequest extends PopBaseHttpRequest
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
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddAdUnitCreateRequest_KeywordsItem>, "keywords")
	*/
	private $keywords;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddAdUnitCreateRequest_CreativeListItem>, "creative_list")
	*/
	private $creativeList;

	/**
	* @JsonProperty(Long, "bid")
	*/
	private $bid;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "plan_id", $this->planId);
		$this->setUserParam($params, "goods_id", $this->goodsId);
		$this->setUserParam($params, "keywords", $this->keywords);
		$this->setUserParam($params, "creative_list", $this->creativeList);
		$this->setUserParam($params, "bid", $this->bid);

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
		return "pdd.ad.unit.create";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setPlanId($planId)
	{
		$this->planId = $planId;
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
	}

	public function setCreativeList($creativeList)
	{
		$this->creativeList = $creativeList;
	}

	public function setBid($bid)
	{
		$this->bid = $bid;
	}

}

class PddAdUnitCreateRequest_KeywordsItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Long, "bid")
	*/
	private $bid;

	/**
	* @JsonProperty(String, "word")
	*/
	private $word;

	public function setBid($bid)
	{
		$this->bid = $bid;
	}

	public function setWord($word)
	{
		$this->word = $word;
	}

}

class PddAdUnitCreateRequest_CreativeListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "image_url")
	*/
	private $imageUrl;

	/**
	* @JsonProperty(String, "title")
	*/
	private $title;

	public function setImageUrl($imageUrl)
	{
		$this->imageUrl = $imageUrl;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

}
