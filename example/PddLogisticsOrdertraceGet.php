<?php
/**
 * 示例接口名称：pdd.logistics.ordertrace.get
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddLogisticsOrdertraceGetRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddLogisticsOrdertraceGetRequest();

$request->setCompanyCode('str');
$request->setMailNo('str');
$request->setCache(true);
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