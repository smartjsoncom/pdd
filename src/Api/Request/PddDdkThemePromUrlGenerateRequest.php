<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkThemePromUrlGenerateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(List<Long>, "theme_id_list")
	*/
	private $themeIdList;

	/**
	* @JsonProperty(Boolean, "generate_short_url")
	*/
	private $generateShortUrl;

	/**
	* @JsonProperty(Boolean, "generate_mobile")
	*/
	private $generateMobile;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Boolean, "generate_weapp_webview")
	*/
	private $generateWeappWebview;

	/**
	* @JsonProperty(Boolean, "we_app_web_view_short_url")
	*/
	private $weAppWebViewShortUrl;

	/**
	* @JsonProperty(Boolean, "we_app_web_wiew_url")
	*/
	private $weAppWebWiewUrl;

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
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "theme_id_list", $this->themeIdList);
		$this->setUserParam($params, "generate_short_url", $this->generateShortUrl);
		$this->setUserParam($params, "generate_mobile", $this->generateMobile);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "generate_weapp_webview", $this->generateWeappWebview);
		$this->setUserParam($params, "we_app_web_view_short_url", $this->weAppWebViewShortUrl);
		$this->setUserParam($params, "we_app_web_wiew_url", $this->weAppWebWiewUrl);
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
		return "pdd.ddk.theme.prom.url.generate";
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setThemeIdList($themeIdList)
	{
		$this->themeIdList = $themeIdList;
	}

	public function setGenerateShortUrl($generateShortUrl)
	{
		$this->generateShortUrl = $generateShortUrl;
	}

	public function setGenerateMobile($generateMobile)
	{
		$this->generateMobile = $generateMobile;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setGenerateWeappWebview($generateWeappWebview)
	{
		$this->generateWeappWebview = $generateWeappWebview;
	}

	public function setWeAppWebViewShortUrl($weAppWebViewShortUrl)
	{
		$this->weAppWebViewShortUrl = $weAppWebViewShortUrl;
	}

	public function setWeAppWebWiewUrl($weAppWebWiewUrl)
	{
		$this->weAppWebWiewUrl = $weAppWebWiewUrl;
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
