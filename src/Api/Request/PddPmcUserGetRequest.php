<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddPmcUserGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "owner_id")
	*/
	private $ownerId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "owner_id", $this->ownerId);

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
		return "pdd.pmc.user.get";
	}

	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
	}

}
