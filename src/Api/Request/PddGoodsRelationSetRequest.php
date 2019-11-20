<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsRelationSetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	/**
	* @JsonProperty(String, "out_goods_id")
	*/
	private $outGoodsId;

	/**
	* @JsonProperty(String, "out_detail_url")
	*/
	private $outDetailUrl;

	/**
	* @JsonProperty(Long, "out_low_goods_price")
	*/
	private $outLowGoodsPrice;

	/**
	* @JsonProperty(Long, "out_high_goods_price")
	*/
	private $outHighGoodsPrice;

	/**
	* @JsonProperty(Integer, "source_type")
	*/
	private $sourceType;

	/**
	* @JsonProperty(Long, "postage")
	*/
	private $postage;

	/**
	* @JsonProperty(Long, "out_mall_id")
	*/
	private $outMallId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_id", $this->goodsId);
		$this->setUserParam($params, "out_goods_id", $this->outGoodsId);
		$this->setUserParam($params, "out_detail_url", $this->outDetailUrl);
		$this->setUserParam($params, "out_low_goods_price", $this->outLowGoodsPrice);
		$this->setUserParam($params, "out_high_goods_price", $this->outHighGoodsPrice);
		$this->setUserParam($params, "source_type", $this->sourceType);
		$this->setUserParam($params, "postage", $this->postage);
		$this->setUserParam($params, "out_mall_id", $this->outMallId);

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
		return "pdd.goods.relation.set";
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

	public function setOutGoodsId($outGoodsId)
	{
		$this->outGoodsId = $outGoodsId;
	}

	public function setOutDetailUrl($outDetailUrl)
	{
		$this->outDetailUrl = $outDetailUrl;
	}

	public function setOutLowGoodsPrice($outLowGoodsPrice)
	{
		$this->outLowGoodsPrice = $outLowGoodsPrice;
	}

	public function setOutHighGoodsPrice($outHighGoodsPrice)
	{
		$this->outHighGoodsPrice = $outHighGoodsPrice;
	}

	public function setSourceType($sourceType)
	{
		$this->sourceType = $sourceType;
	}

	public function setPostage($postage)
	{
		$this->postage = $postage;
	}

	public function setOutMallId($outMallId)
	{
		$this->outMallId = $outMallId;
	}

}
