<?php
/**
 * 示例接口名称：pdd.wms.depot.ticket.notify
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddWmsDepotTicketNotifyRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddWmsDepotTicketNotifyRequest();

$request->setTicketId(1);
$request->setContent('str');
$request->setAttachUrl(new List<AttachUrlItem>());
$request->setServiceStatus(1);
$request->setCompensateAmount(1);
try{
	$response = $client->syncInvoke($request);
} catch(SmartJson\Pdd\PopHttpException $e){
	echo $e->getMessage();
	exit;
}
$content = $response->getContent();
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);