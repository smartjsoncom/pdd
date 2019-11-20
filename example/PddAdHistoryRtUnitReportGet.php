<?php
/**
 * 示例接口名称：pdd.ad.history.rt.unit.report.get
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddAdHistoryRtUnitReportGetRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddAdHistoryRtUnitReportGetRequest();

$request->setSceneType(1);
$request->setPlanId(1);
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