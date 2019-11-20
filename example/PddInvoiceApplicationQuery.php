<?php
/**
 * 示例接口名称：pdd.invoice.application.query
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddInvoiceApplicationQueryRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddInvoiceApplicationQueryRequest();

$request->setApplicationId(1);
$request->setOrderSn('str');
$request->setStatus(1);
$request->setUpdateStartTime(1);
$request->setUpdateEndTime(1);
$request->setPage(1);
$request->setPageSize(1);
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