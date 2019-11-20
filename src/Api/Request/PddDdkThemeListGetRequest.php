<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkThemeListGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
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
		return "pdd.ddk.theme.list.get";
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
