<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkAllOrderListIncrementGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "start_update_time")
	*/
	private $startUpdateTime;

	/**
	* @JsonProperty(Long, "end_update_time")
	*/
	private $endUpdateTime;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "page")
	*/
	private $page;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "start_update_time", $this->startUpdateTime);
		$this->setUserParam($params, "end_update_time", $this->endUpdateTime);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "page", $this->page);

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
		return "pdd.ddk.all.order.list.increment.get";
	}

	public function setStartUpdateTime($startUpdateTime)
	{
		$this->startUpdateTime = $startUpdateTime;
	}

	public function setEndUpdateTime($endUpdateTime)
	{
		$this->endUpdateTime = $endUpdateTime;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setPage($page)
	{
		$this->page = $page;
	}

}
