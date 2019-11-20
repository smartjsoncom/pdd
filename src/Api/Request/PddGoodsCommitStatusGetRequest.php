<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsCommitStatusGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<Long>, "goods_commit_id_list")
	*/
	private $goodsCommitIdList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_commit_id_list", $this->goodsCommitIdList);

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
		return "pdd.goods.commit.status.get";
	}

	public function setGoodsCommitIdList($goodsCommitIdList)
	{
		$this->goodsCommitIdList = $goodsCommitIdList;
	}

}
