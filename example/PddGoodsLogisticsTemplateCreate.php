<?php
/**
 * 示例接口名称：pdd.goods.logistics.template.create
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddGoodsLogisticsTemplateCreateRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddGoodsLogisticsTemplateCreateRequest();

$request->setCostTemplateList(new List<CostTemplateListItem>());
$request->setFreeProvinceList(new List<FreeProvinceListItem>());
$request->setCostType(1);
$request->setTemplateName('str');
$request->setProvinceId(1);
$request->setCityId(1);
$request->setDistrictId(1);
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