<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsLatestCommitStatusGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<Long>, "goods_id_list")
	*/
	private $goodsIdList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_id_list", $this->goodsIdList);

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
		return "pdd.goods.latest.commit.status.get";
	}

	public function setGoodsIdList($goodsIdList)
	{
		$this->goodsIdList = $goodsIdList;
	}

}
