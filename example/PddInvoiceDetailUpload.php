<?php
/**
 * 示例接口名称：pdd.invoice.detail.upload
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddInvoiceDetailUploadRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddInvoiceDetailUploadRequest();

$request->setPayerName('str');
$request->setOrderSn('str');
$request->setApplicationId(1);
$request->setBusinessType(1);
$request->setInvoiceKind(1);
$request->setInvoiceType(1);
$request->setInvoiceAmount(1);
$request->setSumPrice(1);
$request->setPayerRegisterNo('str');
$request->setTaxRate(1);
$request->setSumTax(1);
$request->setInvoiceCode('str');
$request->setInvoiceNo('str');
$request->setOriginalInvoiceCode('str');
$request->setOriginalInvoiceNo('str');
$request->setPayeeOperator('str');
$request->setInvoiceTime(1);
$request->setInvoiceFileContent('str');
$request->setMemo('str');
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