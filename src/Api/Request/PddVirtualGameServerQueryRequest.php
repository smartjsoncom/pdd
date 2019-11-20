<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddVirtualGameServerQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "goods_config_code")
	*/
	private $goodsConfigCode;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_config_code", $this->goodsConfigCode);

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
		return "pdd.virtual.game.server.query";
	}

	public function setGoodsConfigCode($goodsConfigCode)
	{
		$this->goodsConfigCode = $goodsConfigCode;
	}

}
