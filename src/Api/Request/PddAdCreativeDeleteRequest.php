<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCreativeDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "creative_id")
	*/
	private $creativeId;

	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "creative_id", $this->creativeId);
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
		return "pdd.ad.creative.delete";
	}

	public function setCreativeId($creativeId)
	{
		$this->creativeId = $creativeId;
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

}
