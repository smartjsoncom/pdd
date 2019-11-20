<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkOrderListRangeGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "start_time")
	*/
	private $startTime;

	/**
	* @JsonProperty(String, "last_order_id")
	*/
	private $lastOrderId;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(String, "end_time")
	*/
	private $endTime;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "start_time", $this->startTime);
		$this->setUserParam($params, "last_order_id", $this->lastOrderId);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "end_time", $this->endTime);

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
		return "pdd.ddk.order.list.range.get";
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
	}

	public function setLastOrderId($lastOrderId)
	{
		$this->lastOrderId = $lastOrderId;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
	}

}
