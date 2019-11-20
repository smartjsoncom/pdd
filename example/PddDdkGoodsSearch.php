<?php
/**
 * 示例接口名称：pdd.ddk.goods.search
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddDdkGoodsSearchRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddDdkGoodsSearchRequest();

$request->setKeyword('str');
$request->setOptId(1);
$request->setPage(1);
$request->setPageSize(1);
$request->setSortType(1);
$request->setWithCoupon(true);
$request->setRangeList('str');
$request->setCatId(1);
$request->setGoodsIdList(array(1));
$request->setMerchantType(1);
$request->setPid('str');
$request->setCustomParameters('str');
$request->setMerchantTypeList(array(1));
$request->setIsBrandGoods(true);
$request->setActivityTags(array(1));
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