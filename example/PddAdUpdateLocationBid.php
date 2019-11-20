<?php
/**
 * 示例接口名称：pdd.ad.update.location.bid
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddAdUpdateLocationBidRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddAdUpdateLocationBidRequest();

$request->setSceneType(1);
$request->setUnitId(1);
$request->setLocationBidList(new List<LocationBidListItem>());
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