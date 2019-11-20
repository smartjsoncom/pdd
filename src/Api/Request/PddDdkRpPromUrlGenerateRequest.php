<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkRpPromUrlGenerateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "channel_type")
	*/
	private $channelType;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Boolean, "generate_qq_app")
	*/
	private $generateQqApp;

	/**
	* @JsonProperty(Boolean, "generate_schema_url")
	*/
	private $generateSchemaUrl;

	/**
	* @JsonProperty(Boolean, "generate_short_url")
	*/
	private $generateShortUrl;

	/**
	* @JsonProperty(Boolean, "generate_weapp_webview")
	*/
	private $generateWeappWebview;

	/**
	* @JsonProperty(Boolean, "generate_we_app")
	*/
	private $generateWeApp;

	/**
	* @JsonProperty(List<String>, "p_id_list")
	*/
	private $pIdList;

	/**
	* @JsonProperty(Boolean, "we_app_web_view_short_url")
	*/
	private $weAppWebViewShortUrl;

	/**
	* @JsonProperty(Boolean, "we_app_web_wiew_url")
	*/
	private $weAppWebWiewUrl;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddDdkRpPromUrlGenerateRequest_DiyLotteryParam, "diy_lottery_param")
	*/
	private $diyLotteryParam;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddDdkRpPromUrlGenerateRequest_DiyRedPacketParam, "diy_red_packet_param")
	*/
	private $diyRedPacketParam;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "channel_type", $this->channelType);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "generate_qq_app", $this->generateQqApp);
		$this->setUserParam($params, "generate_schema_url", $this->generateSchemaUrl);
		$this->setUserParam($params, "generate_short_url", $this->generateShortUrl);
		$this->setUserParam($params, "generate_weapp_webview", $this->generateWeappWebview);
		$this->setUserParam($params, "generate_we_app", $this->generateWeApp);
		$this->setUserParam($params, "p_id_list", $this->pIdList);
		$this->setUserParam($params, "we_app_web_view_short_url", $this->weAppWebViewShortUrl);
		$this->setUserParam($params, "we_app_web_wiew_url", $this->weAppWebWiewUrl);
		$this->setUserParam($params, "diy_lottery_param", $this->diyLotteryParam);
		$this->setUserParam($params, "diy_red_packet_param", $this->diyRedPacketParam);

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
		return "pdd.ddk.rp.prom.url.generate";
	}

	public function setChannelType($channelType)
	{
		$this->channelType = $channelType;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setGenerateQqApp($generateQqApp)
	{
		$this->generateQqApp = $generateQqApp;
	}

	public function setGenerateSchemaUrl($generateSchemaUrl)
	{
		$this->generateSchemaUrl = $generateSchemaUrl;
	}

	public function setGenerateShortUrl($generateShortUrl)
	{
		$this->generateShortUrl = $generateShortUrl;
	}

	public function setGenerateWeappWebview($generateWeappWebview)
	{
		$this->generateWeappWebview = $generateWeappWebview;
	}

	public function setGenerateWeApp($generateWeApp)
	{
		$this->generateWeApp = $generateWeApp;
	}

	public function setPIdList($pIdList)
	{
		$this->pIdList = $pIdList;
	}

	public function setWeAppWebViewShortUrl($weAppWebViewShortUrl)
	{
		$this->weAppWebViewShortUrl = $weAppWebViewShortUrl;
	}

	public function setWeAppWebWiewUrl($weAppWebWiewUrl)
	{
		$this->weAppWebWiewUrl = $weAppWebWiewUrl;
	}

	public function setDiyLotteryParam($diyLotteryParam)
	{
		$this->diyLotteryParam = $diyLotteryParam;
	}

	public function setDiyRedPacketParam($diyRedPacketParam)
	{
		$this->diyRedPacketParam = $diyRedPacketParam;
	}

}

class PddDdkRpPromUrlGenerateRequest_DiyLotteryParam extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "opt_id")
	*/
	private $optId;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddDdkRpPromUrlGenerateRequest_DiyLotteryParamRangeItems, "range_items")
	*/
	private $rangeItems;

	public function setOptId($optId)
	{
		$this->optId = $optId;
	}

	public function setRangeItems($rangeItems)
	{
		$this->rangeItems = $rangeItems;
	}

}

class PddDdkRpPromUrlGenerateRequest_DiyLotteryParamRangeItems extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Long, "range_from")
	*/
	private $rangeFrom;

	/**
	* @JsonProperty(Integer, "range_id")
	*/
	private $rangeId;

	/**
	* @JsonProperty(Long, "range_to")
	*/
	private $rangeTo;

	public function setRangeFrom($rangeFrom)
	{
		$this->rangeFrom = $rangeFrom;
	}

	public function setRangeId($rangeId)
	{
		$this->rangeId = $rangeId;
	}

	public function setRangeTo($rangeTo)
	{
		$this->rangeTo = $rangeTo;
	}

}

class PddDdkRpPromUrlGenerateRequest_DiyRedPacketParam extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(List<Long>, "amount_probability")
	*/
	private $amountProbability;

	/**
	* @JsonProperty(Boolean, "dis_text")
	*/
	private $disText;

	/**
	* @JsonProperty(Boolean, "not_show_background")
	*/
	private $notShowBackground;

	/**
	* @JsonProperty(Integer, "opt_id")
	*/
	private $optId;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddDdkRpPromUrlGenerateRequest_DiyRedPacketParamRangeItemsItem>, "range_items")
	*/
	private $rangeItems;

	public function setAmountProbability($amountProbability)
	{
		$this->amountProbability = $amountProbability;
	}

	public function setDisText($disText)
	{
		$this->disText = $disText;
	}

	public function setNotShowBackground($notShowBackground)
	{
		$this->notShowBackground = $notShowBackground;
	}

	public function setOptId($optId)
	{
		$this->optId = $optId;
	}

	public function setRangeItems($rangeItems)
	{
		$this->rangeItems = $rangeItems;
	}

}

class PddDdkRpPromUrlGenerateRequest_DiyRedPacketParamRangeItemsItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Long, "range_from")
	*/
	private $rangeFrom;

	/**
	* @JsonProperty(Integer, "range_id")
	*/
	private $rangeId;

	/**
	* @JsonProperty(Long, "range_to")
	*/
	private $rangeTo;

	public function setRangeFrom($rangeFrom)
	{
		$this->rangeFrom = $rangeFrom;
	}

	public function setRangeId($rangeId)
	{
		$this->rangeId = $rangeId;
	}

	public function setRangeTo($rangeTo)
	{
		$this->rangeTo = $rangeTo;
	}

}
