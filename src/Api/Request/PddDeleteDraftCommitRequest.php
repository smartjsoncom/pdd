<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDeleteDraftCommitRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "goods_commit_id")
	*/
	private $goodsCommitId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_commit_id", $this->goodsCommitId);

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
		return "pdd.delete.draft.commit";
	}

	public function setGoodsCommitId($goodsCommitId)
	{
		$this->goodsCommitId = $goodsCommitId;
	}

}
