<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkWeappQrcodeUrlGenRequest extends PopBaseHttpRequest
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
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Long, "zs_duo_id")
	*/
	private $zsDuoId;

	/**
	* @JsonProperty(Boolean, "generate_mall_collect_coupon")
	*/
	private $generateMallCollectCoupon;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "p_id", $this->pId);
		$this->setUserParam($params, "goods_id_list", $this->goodsIdList);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "zs_duo_id", $this->zsDuoId);
		$this->setUserParam($params, "generate_mall_collect_coupon", $this->generateMallCollectCoupon);

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
		return "pdd.ddk.weapp.qrcode.url.gen";
	}

	public function setPId($pId)
	{
		$this->pId = $pId;
	}

	public function setGoodsIdList($goodsIdList)
	{
		$this->goodsIdList = $goodsIdList;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setZsDuoId($zsDuoId)
	{
		$this->zsDuoId = $zsDuoId;
	}

	public function setGenerateMallCollectCoupon($generateMallCollectCoupon)
	{
		$this->generateMallCollectCoupon = $generateMallCollectCoupon;
	}

}
