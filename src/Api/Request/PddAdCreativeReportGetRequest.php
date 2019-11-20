<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdCreativeReportGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "begin_date")
	*/
	private $beginDate;

	/**
	* @JsonProperty(String, "end_date")
	*/
	private $endDate;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "page_number")
	*/
	private $pageNumber;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "begin_date", $this->beginDate);
		$this->setUserParam($params, "end_date", $this->endDate);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "page_number", $this->pageNumber);

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
		return "pdd.ad.creative.report.get";
	}

	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
	}

}
