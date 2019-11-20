<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkGoodsSearchRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "keyword")
	*/
	private $keyword;

	/**
	* @JsonProperty(Long, "opt_id")
	*/
	private $optId;

	/**
	* @JsonProperty(Integer, "page")
	*/
	private $page;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "sort_type")
	*/
	private $sortType;

	/**
	* @JsonProperty(Boolean, "with_coupon")
	*/
	private $withCoupon;

	/**
	* @JsonProperty(String, "range_list")
	*/
	private $rangeList;

	/**
	* @JsonProperty(Long, "cat_id")
	*/
	private $catId;

	/**
	* @JsonProperty(List<Long>, "goods_id_list")
	*/
	private $goodsIdList;

	/**
	* @JsonProperty(Integer, "merchant_type")
	*/
	private $merchantType;

	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(List<Integer>, "merchant_type_list")
	*/
	private $merchantTypeList;

	/**
	* @JsonProperty(Boolean, "is_brand_goods")
	*/
	private $isBrandGoods;

	/**
	* @JsonProperty(List<Integer>, "activity_tags")
	*/
	private $activityTags;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "keyword", $this->keyword);
		$this->setUserParam($params, "opt_id", $this->optId);
		$this->setUserParam($params, "page", $this->page);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "sort_type", $this->sortType);
		$this->setUserParam($params, "with_coupon", $this->withCoupon);
		$this->setUserParam($params, "range_list", $this->rangeList);
		$this->setUserParam($params, "cat_id", $this->catId);
		$this->setUserParam($params, "goods_id_list", $this->goodsIdList);
		$this->setUserParam($params, "merchant_type", $this->merchantType);
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "merchant_type_list", $this->merchantTypeList);
		$this->setUserParam($params, "is_brand_goods", $this->isBrandGoods);
		$this->setUserParam($params, "activity_tags", $this->activityTags);

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
		return "pdd.ddk.goods.search";
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
	}

	public function setOptId($optId)
	{
		$this->optId = $optId;
	}

	public function setPage($page)
	{
		$this->page = $page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
	}

	public function setWithCoupon($withCoupon)
	{
		$this->withCoupon = $withCoupon;
	}

	public function setRangeList($rangeList)
	{
		$this->rangeList = $rangeList;
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
	}

	public function setGoodsIdList($goodsIdList)
	{
		$this->goodsIdList = $goodsIdList;
	}

	public function setMerchantType($merchantType)
	{
		$this->merchantType = $merchantType;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setMerchantTypeList($merchantTypeList)
	{
		$this->merchantTypeList = $merchantTypeList;
	}

	public function setIsBrandGoods($isBrandGoods)
	{
		$this->isBrandGoods = $isBrandGoods;
	}

	public function setActivityTags($activityTags)
	{
		$this->activityTags = $activityTags;
	}

}
