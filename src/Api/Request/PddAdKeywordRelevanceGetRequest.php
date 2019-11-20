<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdKeywordRelevanceGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(List<String>, "words")
	*/
	private $words;

	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "words", $this->words);
		$this->setUserParam($params, "goods_id", $this->goodsId);

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
		return "pdd.ad.keyword.relevance.get";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setWords($words)
	{
		$this->words = $words;
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

}
