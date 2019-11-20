<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddWmsDepotTicketAckRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<Long>, "ticketIds")
	*/
	private $ticketIds;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "ticketIds", $this->ticketIds);

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
		return "pdd.wms.depot.ticket.ack";
	}

	public function setTicketIds($ticketIds)
	{
		$this->ticketIds = $ticketIds;
	}

}
