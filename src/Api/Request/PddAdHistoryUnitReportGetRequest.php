<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdHistoryUnitReportGetRequest extends PopBaseHttpRequest
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

	/**
	* @JsonProperty(Integer, "group_by")
	*/
	private $groupBy;

	/**
	* @JsonProperty(Integer, "page")
	*/
	private $page;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Long, "unit_id")
	*/
	private $unitId;

	/**
	* @JsonProperty(Long, "plan_id")
	*/
	private $planId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "begin_date", $this->beginDate);
		$this->setUserParam($params, "end_date", $this->endDate);
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "order_by", $this->orderBy);
		$this->setUserParam($params, "sort_by", $this->sortBy);
		$this->setUserParam($params, "group_by", $this->groupBy);
		$this->setUserParam($params, "page", $this->page);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "plan_id", $this->planId);

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
		return "pdd.ad.history.unit.report.get";
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

	public function setGroupBy($groupBy)
	{
		$this->groupBy = $groupBy;
	}

	public function setPage($page)
	{
		$this->page = $page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setPlanId($planId)
	{
		$this->planId = $planId;
	}

}
