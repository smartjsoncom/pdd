<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkGoodsPromotionUrlGenerateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "p_id")
	*/
	private $pId;

	/**
	* @JsonProperty(List<Long>, "goods_id_list")
	*/
	private $goodsIdList;

	/**
	* @JsonProperty(Boolean, "generate_short_url")
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
	* @JsonProperty(Boolean, "generate_weapp_webview")
	*/
	private $generateWeappWebview;

	/**
	* @JsonProperty(Long, "zs_duo_id")
	*/
	private $zsDuoId;

	/**
	* @JsonProperty(Boolean, "generate_we_app")
	*/
	private $generateWeApp;

	/**
	* @JsonProperty(Boolean, "generate_weiboapp_webview")
	*/
	private $generateWeiboappWebview;

	/**
	* @JsonProperty(Boolean, "generate_mall_collect_coupon")
	*/
	private $generateMallCollectCoupon;

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
		$this->setUserParam($params, "p_id", $this->pId);
		$this->setUserParam($params, "goods_id_list", $this->goodsIdList);
		$this->setUserParam($params, "generate_short_url", $this->generateShortUrl);
		$this->setUserParam($params, "multi_group", $this->multiGroup);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "generate_weapp_webview", $this->generateWeappWebview);
		$this->setUserParam($params, "zs_duo_id", $this->zsDuoId);
		$this->setUserParam($params, "generate_we_app", $this->generateWeApp);
		$this->setUserParam($params, "generate_weiboapp_webview", $this->generateWeiboappWebview);
		$this->setUserParam($params, "generate_mall_collect_coupon", $this->generateMallCollectCoupon);
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
		return "pdd.ddk.goods.promotion.url.generate";
	}

	public function setPId($pId)
	{
		$this->pId = $pId;
	}

	public function setGoodsIdList($goodsIdList)
	{
		$this->goodsIdList = $goodsIdList;
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

	public function setGenerateWeappWebview($generateWeappWebview)
	{
		$this->generateWeappWebview = $generateWeappWebview;
	}

	public function setZsDuoId($zsDuoId)
	{
		$this->zsDuoId = $zsDuoId;
	}

	public function setGenerateWeApp($generateWeApp)
	{
		$this->generateWeApp = $generateWeApp;
	}

	public function setGenerateWeiboappWebview($generateWeiboappWebview)
	{
		$this->generateWeiboappWebview = $generateWeiboappWebview;
	}

	public function setGenerateMallCollectCoupon($generateMallCollectCoupon)
	{
		$this->generateMallCollectCoupon = $generateMallCollectCoupon;
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
