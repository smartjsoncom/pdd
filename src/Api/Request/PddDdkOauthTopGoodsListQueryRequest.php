<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkOauthTopGoodsListQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "p_id")
	*/
	private $pId;

	/**
	* @JsonProperty(Integer, "offset")
	*/
	private $offset;

	/**
	* @JsonProperty(Integer, "sort_type")
	*/
	private $sortType;

	/**
	* @JsonProperty(Integer, "limit")
	*/
	private $limit;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "p_id", $this->pId);
		$this->setUserParam($params, "offset", $this->offset);
		$this->setUserParam($params, "sort_type", $this->sortType);
		$this->setUserParam($params, "limit", $this->limit);

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
		return "pdd.ddk.oauth.top.goods.list.query";
	}

	public function setPId($pId)
	{
		$this->pId = $pId;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
	}

}
