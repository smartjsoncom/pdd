<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkMerchantListGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "cat_id")
	*/
	private $catId;

	/**
	* @JsonProperty(Boolean, "has_clt_cpn")
	*/
	private $hasCltCpn;

	/**
	* @JsonProperty(Integer, "has_coupon")
	*/
	private $hasCoupon;

	/**
	* @JsonProperty(List<Long>, "mall_id_list")
	*/
	private $mallIdList;

	/**
	* @JsonProperty(List<Integer>, "merchant_type_list")
	*/
	private $merchantTypeList;

	/**
	* @JsonProperty(Integer, "page_number")
	*/
	private $pageNumber;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "query_range_str")
	*/
	private $queryRangeStr;

	/**
	* @JsonProperty(String, "range_vo_list")
	*/
	private $rangeVoList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "cat_id", $this->catId);
		$this->setUserParam($params, "has_clt_cpn", $this->hasCltCpn);
		$this->setUserParam($params, "has_coupon", $this->hasCoupon);
		$this->setUserParam($params, "mall_id_list", $this->mallIdList);
		$this->setUserParam($params, "merchant_type_list", $this->merchantTypeList);
		$this->setUserParam($params, "page_number", $this->pageNumber);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "query_range_str", $this->queryRangeStr);
		$this->setUserParam($params, "range_vo_list", $this->rangeVoList);

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
		return "pdd.ddk.merchant.list.get";
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
	}

	public function setHasCltCpn($hasCltCpn)
	{
		$this->hasCltCpn = $hasCltCpn;
	}

	public function setHasCoupon($hasCoupon)
	{
		$this->hasCoupon = $hasCoupon;
	}

	public function setMallIdList($mallIdList)
	{
		$this->mallIdList = $mallIdList;
	}

	public function setMerchantTypeList($merchantTypeList)
	{
		$this->merchantTypeList = $merchantTypeList;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setQueryRangeStr($queryRangeStr)
	{
		$this->queryRangeStr = $queryRangeStr;
	}

	public function setRangeVoList($rangeVoList)
	{
		$this->rangeVoList = $rangeVoList;
	}

}
