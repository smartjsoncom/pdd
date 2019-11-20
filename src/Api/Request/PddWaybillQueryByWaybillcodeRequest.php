<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddWaybillQueryByWaybillcodeRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddWaybillQueryByWaybillcodeRequest_ParamListItem>, "param_list")
	*/
	private $paramList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "param_list", $this->paramList);

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
		return "pdd.waybill.query.by.waybillcode";
	}

	public function setParamList($paramList)
	{
		$this->paramList = $paramList;
	}

}

class PddWaybillQueryByWaybillcodeRequest_ParamListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "object_id")
	*/
	private $objectId;

	/**
	* @JsonProperty(String, "waybill_code")
	*/
	private $waybillCode;

	/**
	* @JsonProperty(String, "wp_code")
	*/
	private $wpCode;

	public function setObjectId($objectId)
	{
		$this->objectId = $objectId;
	}

	public function setWaybillCode($waybillCode)
	{
		$this->waybillCode = $waybillCode;
	}

	public function setWpCode($wpCode)
	{
		$this->wpCode = $wpCode;
	}

}
