<?php
/**
 * 示例接口名称：pdd.ddk.order.list.increment.get
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddDdkOrderListIncrementGetRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkOrderListIncrementGetRequest();

$request->setStartUpdateTime(1);
$request->setEndUpdateTime(1);
$request->setPageSize(1);
$request->setPage(1);
$request->setReturnCount(true);
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