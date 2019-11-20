<?php
/**
 * 示例接口名称：pdd.ddk.oauth.cms.prom.url.generate
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddDdkOauthCmsPromUrlGenerateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkOauthCmsPromUrlGenerateRequest();

$request->setGenerateShortUrl(true);
$request->setPIdList(array('str'));
$request->setGenerateMobile(true);
$request->setMultiGroup(true);
$request->setCustomParameters('str');
$request->setGenerateWeappWebview(true);
$request->setWeAppWebViewShortUrl(true);
$request->setWeAppWebWiewUrl(true);
$request->setChannelType(1);
$request->setGenerateSchemaUrl('str');
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