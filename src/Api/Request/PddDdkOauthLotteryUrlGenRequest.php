<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkOauthLotteryUrlGenRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<String>, "pid_list")
	*/
	private $pidList;

	/**
	* @JsonProperty(Boolean, "generate_weapp_webview")
	*/
	private $generateWeappWebview;

	/**
	* @JsonProperty(String, "generate_short_url")
	*/
	private $generateShortUrl;

	/**
	* @JsonProperty(Boolean, "multi_group")
	*/
	private $multiGroup;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Boolean, "generate_we_app")
	*/
	private $generateWeApp;

	/**
	* @JsonProperty(Boolean, "generate_schema_url")
	*/
	private $generateSchemaUrl;

	/**
	* @JsonProperty(Boolean, "generate_qq_app")
	*/
	private $generateQqApp;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "pid_list", $this->pidList);
		$this->setUserParam($params, "generate_weapp_webview", $this->generateWeappWebview);
		$this->setUserParam($params, "generate_short_url", $this->generateShortUrl);
		$this->setUserParam($params, "multi_group", $this->multiGroup);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "generate_we_app", $this->generateWeApp);
		$this->setUserParam($params, "generate_schema_url", $this->generateSchemaUrl);
		$this->setUserParam($params, "generate_qq_app", $this->generateQqApp);

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
		return "pdd.ddk.oauth.lottery.url.gen";
	}

	public function setPidList($pidList)
	{
		$this->pidList = $pidList;
	}

	public function setGenerateWeappWebview($generateWeappWebview)
	{
		$this->generateWeappWebview = $generateWeappWebview;
	}

	public function setGenerateShortUrl($generateShortUrl)
	{
		$this->generateShortUrl = $generateShortUrl;
	}

	public function setMultiGroup($multiGroup)
	{
		$this->multiGroup = $multiGroup;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setGenerateWeApp($generateWeApp)
	{
		$this->generateWeApp = $generateWeApp;
	}

	public function setGenerateSchemaUrl($generateSchemaUrl)
	{
		$this->generateSchemaUrl = $generateSchemaUrl;
	}

	public function setGenerateQqApp($generateQqApp)
	{
		$this->generateQqApp = $generateQqApp;
	}

}
