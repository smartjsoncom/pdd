<?php
/**
 * 示例接口名称：pdd.ad.plan.discount.update
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddAdPlanDiscountUpdateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddAdPlanDiscountUpdateRequest();

$request->setPlanId(1);
$request->setDiscounts(new List<DiscountsItem>());
$request->setSceneType(1);
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