<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdQueryUnitBidHistoryReportRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "scene_type")
	*/
	private $sceneType;

	/**
	* @JsonProperty(Long, "unit_id")
	*/
	private $unitId;

	/**
	* @JsonProperty(Long, "plan_id")
	*/
	private $planId;

	/**
	* @JsonProperty(Integer, "group_by")
	*/
	private $groupBy;

	/**
	* @JsonProperty(Integer, "target_type")
	*/
	private $targetType;

	/**
	* @JsonProperty(Long, "sub_level_target_id")
	*/
	private $subLevelTargetId;

	/**
	* @JsonProperty(String, "target_types")
	*/
	private $targetTypes;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddAdQueryUnitBidHistoryReportRequest_PageRequest, "page_request")
	*/
	private $pageRequest;

	/**
	* @JsonProperty(String, "begin_date")
	*/
	private $beginDate;

	/**
	* @JsonProperty(String, "end_date")
	*/
	private $endDate;

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
		$this->setUserParam($params, "scene_type", $this->sceneType);
		$this->setUserParam($params, "unit_id", $this->unitId);
		$this->setUserParam($params, "plan_id", $this->planId);
		$this->setUserParam($params, "group_by", $this->groupBy);
		$this->setUserParam($params, "target_type", $this->targetType);
		$this->setUserParam($params, "sub_level_target_id", $this->subLevelTargetId);
		$this->setUserParam($params, "target_types", $this->targetTypes);
		$this->setUserParam($params, "page_request", $this->pageRequest);
		$this->setUserParam($params, "begin_date", $this->beginDate);
		$this->setUserParam($params, "end_date", $this->endDate);
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
		return "pdd.ad.query.unit.bid.history.report";
	}

	public function setSceneType($sceneType)
	{
		$this->sceneType = $sceneType;
	}

	public function setUnitId($unitId)
	{
		$this->unitId = $unitId;
	}

	public function setPlanId($planId)
	{
		$this->planId = $planId;
	}

	public function setGroupBy($groupBy)
	{
		$this->groupBy = $groupBy;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
	}

	public function setSubLevelTargetId($subLevelTargetId)
	{
		$this->subLevelTargetId = $subLevelTargetId;
	}

	public function setTargetTypes($targetTypes)
	{
		$this->targetTypes = $targetTypes;
	}

	public function setPageRequest($pageRequest)
	{
		$this->pageRequest = $pageRequest;
	}

	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
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

class PddAdQueryUnitBidHistoryReportRequest_PageRequest extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "page_number")
	*/
	private $pageNumber;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

}
