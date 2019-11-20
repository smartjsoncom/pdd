<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkGoodsDetailRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<Long>, "goods_id_list")
	*/
	private $goodsIdList;

	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Long, "zs_duo_id")
	*/
	private $zsDuoId;

	/**
	* @JsonProperty(Integer, "plan_type")
	*/
	private $planType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_id_list", $this->goodsIdList);
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "zs_duo_id", $this->zsDuoId);
		$this->setUserParam($params, "plan_type", $this->planType);

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
		return "pdd.ddk.goods.detail";
	}

	public function setGoodsIdList($goodsIdList)
	{
		$this->goodsIdList = $goodsIdList;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setZsDuoId($zsDuoId)
	{
		$this->zsDuoId = $zsDuoId;
	}

	public function setPlanType($planType)
	{
		$this->planType = $planType;
	}

}
