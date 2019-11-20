<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCreativeUpdateRequest extends PopBaseHttpRequest
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

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddAdCreativeUpdateRequest_Creative, "creative")
	*/
	private $creative;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "creative_id", $this->creativeId);
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "creative", $this->creative);

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
		return "pdd.ad.creative.update";
	}

	public function setCreativeId($creativeId)
	{
		$this->creativeId = $creativeId;
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setCreative($creative)
	{
		$this->creative = $creative;
	}

}

class PddAdCreativeUpdateRequest_Creative extends PopBaseJsonEntity
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
