<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkFinanceCpaQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "date_end")
	*/
	private $dateEnd;

	/**
	* @JsonProperty(String, "date_start")
	*/
	private $dateStart;

	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(Integer, "source_type")
	*/
	private $sourceType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "date_end", $this->dateEnd);
		$this->setUserParam($params, "date_start", $this->dateStart);
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "source_type", $this->sourceType);

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
		return "pdd.ddk.finance.cpa.query";
	}

	public function setDateEnd($dateEnd)
	{
		$this->dateEnd = $dateEnd;
	}

	public function setDateStart($dateStart)
	{
		$this->dateStart = $dateStart;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setSourceType($sourceType)
	{
		$this->sourceType = $sourceType;
	}

}
