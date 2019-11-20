<?php
/**
 * 示例接口名称：pdd.goods.submit.goods.commit
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddGoodsSubmitGoodsCommitRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddGoodsSubmitGoodsCommitRequest();

$request->setGoodsId(1);
$request->setGoodsName('str');
$request->setGoodsType(1);
$request->setGoodsDesc('str');
$request->setCatId(1);
$request->setCountryId(1);
$request->setWarehouse('str');
$request->setCustoms('str');
$request->setIsCustoms(true);
$request->setMarketPrice(1);
$request->setIsPreSale(true);
$request->setPreSaleTime(1);
$request->setShipmentLimitSecond(1);
$request->setCostTemplateId(1);
$request->setCustomerNum(1);
$request->setBuyLimit(1);
$request->setOrderLimit(1);
$request->setIsRefundable(true);
$request->setSecondHand(true);
$request->setIsFolt(true);
$request->setWarmTips('str');
$request->setSkuList(new List<SkuListItem>());
$request->setOutGoodsId('str');
$request->setImageUrl('str');
$request->setCarouselGallery(array('str'));
$request->setDetailGallery(array('str'));
$request->setInvoiceStatus(1);
$request->setGoodsCommitId(1);
$request->setGoodsProperties(new List<GoodsPropertiesItem>());
$request->setQuanGuoLianBao(1);
$request->setZhiHuanBuXiu(1);
$request->setOverseaGoods(new OverseaGoods());
$request->setTinyName('str');
$request->setSongHuoRuHu('str');
$request->setShangMenAnZhuang('str');
$request->setSongHuoAnZhuang('str');
$request->setMaiJiaZiTi('str');
$request->setBadFruitClaim(1);
$request->setLackOfWeightClaim(1);
$request->setOriginCountryId(1);
$request->setOperateType(1);
$request->setDeliveryOneDay(1);
$request->setSyncGoodsOperate(1);
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