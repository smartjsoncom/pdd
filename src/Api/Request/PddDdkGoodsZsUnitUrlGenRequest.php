<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkGoodsZsUnitUrlGenRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "source_url")
	*/
	private $sourceUrl;

	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "source_url", $this->sourceUrl);
		$this->setUserParam($params, "pid", $this->pid);

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
		return "pdd.ddk.goods.zs.unit.url.gen";
	}

	public function setSourceUrl($sourceUrl)
	{
		$this->sourceUrl = $sourceUrl;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

}
