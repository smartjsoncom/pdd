<?php
/**
 * 示例接口名称：pdd.ad.query.unit.bid.history.report
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddAdQueryUnitBidHistoryReportRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddAdQueryUnitBidHistoryReportRequest();

$request->setSceneType(1);
$request->setUnitId(1);
$request->setPlanId(1);
$request->setGroupBy(1);
$request->setTargetType(1);
$request->setSubLevelTargetId(1);
$request->setTargetTypes('str');
$request->setPageRequest(new PageRequest());
$request->setBeginDate('str');
$request->setEndDate('str');
$request->setOrderBy(1);
$request->setSortBy(1);
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