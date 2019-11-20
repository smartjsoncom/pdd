<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddExpressDepotInfoGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "depot_id")
	*/
	private $depotId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "depot_id", $this->depotId);

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
		return "pdd.express.depot.info.get";
	}

	public function setDepotId($depotId)
	{
		$this->depotId = $depotId;
	}

}
