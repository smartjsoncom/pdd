<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddAdQueryLocationBidHistoryReportRequest extends PopBaseHttpRequest
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
	* @JsonProperty(Long, "planId")
	*/
	private $planId;

	/**
	* @JsonProperty(Integer, "location_type")
	*/
	private $locationType;

	/**
	* @JsonProperty(String, "location_types")
	*/
	private $locationTypes;

	/**
	* @JsonProperty(Integer, "group_by")
	*/
	private $groupBy;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddAdQueryLocationBidHistoryReportRequest_PageRequest, "page_request")
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
		$this->setUserParam($params, "planId", $this->planId);
		$this->setUserParam($params, "location_type", $this->locationType);
		$this->setUserParam($params, "location_types", $this->locationTypes);
		$this->setUserParam($params, "group_by", $this->groupBy);
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
		return "pdd.ad.query.location.bid.history.report";
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

	public function setLocationType($locationType)
	{
		$this->locationType = $locationType;
	}

	public function setLocationTypes($locationTypes)
	{
		$this->locationTypes = $locationTypes;
	}

	public function setGroupBy($groupBy)
	{
		$this->groupBy = $groupBy;
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

class PddAdQueryLocationBidHistoryReportRequest_PageRequest extends PopBaseJsonEntity
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
