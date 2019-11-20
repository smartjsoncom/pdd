<?php
/**
 * 示例接口名称：pdd.ddk.oauth.goods.prom.url.generate
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddDdkOauthGoodsPromUrlGenerateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkOauthGoodsPromUrlGenerateRequest();

$request->setPId('str');
$request->setGoodsIdList(array(1));
$request->setGenerateShortUrl(true);
$request->setMultiGroup(true);
$request->setCustomParameters('str');
$request->setGenerateWeappWebview(true);
$request->setZsDuoId(1);
$request->setGenerateWeApp(true);
$request->setGenerateWeiboappWebview(true);
$request->setGenerateSchemaUrl(true);
$request->setForceDuoId(true);
$request->setGenerateQqApp(true);
try{
	$response = $client->syncInvoke($request, Config::$accessToken);
} catch(SmartJson\Pdd\PopHttpException $e){
	echo $e->getMessage();
	exit;
}
$content = $response->getContent();
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);