<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddDdkThemeGoodsSearchRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "theme_id")
	*/
	private $themeId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "theme_id", $this->themeId);

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
		return "pdd.ddk.theme.goods.search";
	}

	public function setThemeId($themeId)
	{
		$this->themeId = $themeId;
	}

}
