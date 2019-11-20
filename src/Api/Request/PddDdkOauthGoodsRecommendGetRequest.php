<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkOauthGoodsRecommendGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "offset")
	*/
	private $offset;

	/**
	* @JsonProperty(Integer, "limit")
	*/
	private $limit;

	/**
	* @JsonProperty(Integer, "channel_type")
	*/
	private $channelType;

	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "offset", $this->offset);
		$this->setUserParam($params, "limit", $this->limit);
		$this->setUserParam($params, "channel_type", $this->channelType);
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);

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
		return "pdd.ddk.oauth.goods.recommend.get";
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
	}

	public function setChannelType($channelType)
	{
		$this->channelType = $channelType;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

}
