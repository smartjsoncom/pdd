<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdHistoryReportGetRequest extends PopBaseHttpRequest
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
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(Integer, "order_by")
	*/
	private $orderBy;

	/**
	* @JsonProperty(Integer, "sort_by")
	*/
	private $sortBy;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "begin_date", $this->beginDate);
		$this->setUserParam($params, "end_date", $this->endDate);
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "order_by", $this->orderBy);
		$this->setUserParam($params, "sort_by", $this->sortBy);

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
		return "pdd.ad.history.report.get";
	}

	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
	}

	public function setSortBy($sortBy)
	{
		$this->sortBy = $sortBy;
	}

}
