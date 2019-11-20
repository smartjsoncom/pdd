<?php
/**
 * 示例接口名称：pdd.goods.logistics.ser.template.update
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddGoodsLogisticsSerTemplateUpdateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddGoodsLogisticsSerTemplateUpdateRequest();

$request->setTemplateId('str');
$request->setTemplateType(1);
$request->setTemplateName('str');
$request->setPriceUnit(1);
$request->setServiceAreaList(new List<ServiceAreaListItem>());
$request->setCatList(new List<CatListItem>());
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