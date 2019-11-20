<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddCloudprintStdtemplatesGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "wp_code")
	*/
	private $wpCode;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "wp_code", $this->wpCode);

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
		return "pdd.cloudprint.stdtemplates.get";
	}

	public function setWpCode($wpCode)
	{
		$this->wpCode = $wpCode;
	}

}
