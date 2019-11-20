<?php
/**
 * 示例接口名称：pdd.ddk.cms.prom.url.generate
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddDdkCmsPromUrlGenerateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkCmsPromUrlGenerateRequest();

$request->setGenerateShortUrl(true);
$request->setGenerateMobile(true);
$request->setMultiGroup(true);
$request->setCustomParameters('str');
$request->setGenerateWeappWebview(true);
$request->setWeAppWebViewShortUrl(true);
$request->setWeAppWebViewUrl(true);
$request->setChannelType(1);
$request->setPIdList(array('str'));
$request->setGenerateSchemaUrl(true);
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