<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddSmsTemplateQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene")
	*/
	private $scene;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "scene", $this->scene);

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
		return "pdd.sms.template.query";
	}

	public function setScene($scene)
	{
		$this->scene = $scene;
	}

}
