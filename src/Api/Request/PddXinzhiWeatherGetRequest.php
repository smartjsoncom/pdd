<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddXinzhiWeatherGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "location")
	*/
	private $location;

	/**
	* @JsonProperty(String, "language")
	*/
	private $language;

	/**
	* @JsonProperty(String, "unit")
	*/
	private $unit;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "location", $this->location);
		$this->setUserParam($params, "language", $this->language);
		$this->setUserParam($params, "unit", $this->unit);

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
		return "pdd.xinzhi.weather.get";
	}

	public function setLocation($location)
	{
		$this->location = $location;
	}

	public function setLanguage($language)
	{
		$this->language = $language;
	}

	public function setUnit($unit)
	{
		$this->unit = $unit;
	}

}
