<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddWaybillCancelRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "waybill_code")
	*/
	private $waybillCode;

	/**
	* @JsonProperty(String, "wp_code")
	*/
	private $wpCode;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "waybill_code", $this->waybillCode);
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
		return "pdd.waybill.cancel";
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
