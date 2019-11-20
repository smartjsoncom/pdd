<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCreativeCreateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "unit_id")
	*/
	private $unitId;

	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddAdCreativeCreateRequest_Creative, "creative")
	*/
	private $creative;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "unit_id", $this->unitId);
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
		return "pdd.ad.creative.create";
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
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

class PddAdCreativeCreateRequest_Creative extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "title")
	*/
	private $title;

	/**
	* @JsonProperty(String, "image_url")
	*/
	private $imageUrl;

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function setImageUrl($imageUrl)
	{
		$this->imageUrl = $imageUrl;
	}

}
