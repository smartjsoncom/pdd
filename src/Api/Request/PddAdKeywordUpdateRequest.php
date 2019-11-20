<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdKeywordUpdateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddAdKeywordUpdateRequest_KeywordsItem>, "keywords")
	*/
	private $keywords;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "keywords", $this->keywords);

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
		return "pdd.ad.keyword.update";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
	}

}

class PddAdKeywordUpdateRequest_KeywordsItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Long, "bid")
	*/
	private $bid;

	/**
	* @JsonProperty(Long, "keyword_id")
	*/
	private $keywordId;

	public function setBid($bid)
	{
		$this->bid = $bid;
	}

	public function setKeywordId($keywordId)
	{
		$this->keywordId = $keywordId;
	}

}
