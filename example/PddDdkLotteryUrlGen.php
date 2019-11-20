<?php
/**
 * 示例接口名称：pdd.ddk.lottery.url.gen
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddDdkLotteryUrlGenRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkLotteryUrlGenRequest();

$request->setPidList(array('str'));
$request->setGenerateWeappWebview(true);
$request->setGenerateShortUrl('str');
$request->setMultiGroup(true);
$request->setCustomParameters('str');
$request->setGenerateWeApp(true);
$request->setGenerateSchemaUrl(true);
$request->setGenerateQqApp(true);
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