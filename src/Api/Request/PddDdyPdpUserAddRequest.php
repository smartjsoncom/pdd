<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdyPdpUserAddRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "history_days")
	*/
	private $historyDays;

	/**
	* @JsonProperty(String, "rds_id")
	*/
	private $rdsId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "history_days", $this->historyDays);
		$this->setUserParam($params, "rds_id", $this->rdsId);

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
		return "pdd.ddy.pdp.user.add";
	}

	public function setHistoryDays($historyDays)
	{
		$this->historyDays = $historyDays;
	}

	public function setRdsId($rdsId)
	{
		$this->rdsId = $rdsId;
	}

}
