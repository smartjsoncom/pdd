<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkOauthGoodsZsUnitUrlGenRequest extends PopBaseHttpRequest
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

	/**
	* @JsonProperty(String, "generate_schema_url")
	*/
	private $generateSchemaUrl;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "source_url", $this->sourceUrl);
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "generate_schema_url", $this->generateSchemaUrl);

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
		return "pdd.ddk.oauth.goods.zs.unit.url.gen";
	}

	public function setSourceUrl($sourceUrl)
	{
		$this->sourceUrl = $sourceUrl;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setGenerateSchemaUrl($generateSchemaUrl)
	{
		$this->generateSchemaUrl = $generateSchemaUrl;
	}

}
