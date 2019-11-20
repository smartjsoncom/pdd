<?php
/**
 * 示例接口名称：pdd.mall.info.store.create.post
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddMallInfoStoreCreatePostRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddMallInfoStoreCreatePostRequest();

$request->setBusinessStatus(1);
$request->setBusinessWeekList(array(1));
$request->setCity('str');
$request->setDistrict('str');
$request->setEndBusinessHour('str');
$request->setPoiId('str');
$request->setPoiLatitude(new Double());
$request->setPoiLongitude(new Double());
$request->setProvince('str');
$request->setStartBusinessHour('str');
$request->setStoreName('str');
$request->setStoreNumber('str');
$request->setStorePhone('str');
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