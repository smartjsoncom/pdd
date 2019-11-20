<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddLogisticsTicketImageUploadRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "image")
	*/
	private $image;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "image", $this->image);

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
		return "pdd.logistics.ticket.image.upload";
	}

	public function setImage($image)
	{
		$this->image = $image;
	}

}
