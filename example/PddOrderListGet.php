<?php
/**
 * 示例接口名称：pdd.order.list.get
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddOrderListGetRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddOrderListGetRequest();

$request->setOrderStatus(1);
$request->setRefundStatus(1);
$request->setStartConfirmAt(1);
$request->setEndConfirmAt(1);
$request->setPage(1);
$request->setPageSize(1);
$request->setTradeType(1);
$request->setUseHasNext(true);
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