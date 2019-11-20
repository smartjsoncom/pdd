<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkGoodsPidGenerateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "number")
	*/
	private $number;

	/**
	* @JsonProperty(List<String>, "p_id_name_list")
	*/
	private $pIdNameList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "number", $this->number);
		$this->setUserParam($params, "p_id_name_list", $this->pIdNameList);

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
		return "pdd.ddk.goods.pid.generate";
	}

	public function setNumber($number)
	{
		$this->number = $number;
	}

	public function setPIdNameList($pIdNameList)
	{
		$this->pIdNameList = $pIdNameList;
	}

}
