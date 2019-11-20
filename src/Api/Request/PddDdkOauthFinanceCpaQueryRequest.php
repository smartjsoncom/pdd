<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkOauthFinanceCpaQueryRequest extends PopBaseHttpRequest
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
	* @JsonProperty(Integer, "source_type")
	*/
	private $sourceType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "date_end", $this->dateEnd);
		$this->setUserParam($params, "date_start", $this->dateStart);
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
		return "pdd.ddk.oauth.finance.cpa.query";
	}

	public function setDateEnd($dateEnd)
	{
		$this->dateEnd = $dateEnd;
	}

	public function setDateStart($dateStart)
	{
		$this->dateStart = $dateStart;
	}

	public function setSourceType($sourceType)
	{
		$this->sourceType = $sourceType;
	}

}
