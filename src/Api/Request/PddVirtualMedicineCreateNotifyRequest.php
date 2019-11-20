<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddVirtualMedicineCreateNotifyRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "status")
	*/
	private $status;

	/**
	* @JsonProperty(String, "err_message")
	*/
	private $errMessage;

	/**
	* @JsonProperty(String, "medical_no")
	*/
	private $medicalNo;

	/**
	* @JsonProperty(Long, "mall_id")
	*/
	private $mallId;

	/**
	* @JsonProperty(String, "diagnostic_no")
	*/
	private $diagnosticNo;

	/**
	* @JsonProperty(String, "diagnostic_name")
	*/
	private $diagnosticName;

	/**
	* @JsonProperty(String, "appeal")
	*/
	private $appeal;

	/**
	* @JsonProperty(String, "past_history")
	*/
	private $pastHistory;

	/**
	* @JsonProperty(String, "allergy_history")
	*/
	private $allergyHistory;

	/**
	* @JsonProperty(String, "medical_record")
	*/
	private $medicalRecord;

	/**
	* @JsonProperty(String, "hospital_doctor_name")
	*/
	private $hospitalDoctorName;

	/**
	* @JsonProperty(String, "hospital_doctor_chaper")
	*/
	private $hospitalDoctorChaper;

	/**
	* @JsonProperty(String, "hospital_pharmacists_name")
	*/
	private $hospitalPharmacistsName;

	/**
	* @JsonProperty(String, "hospital_pharmacists_chapter")
	*/
	private $hospitalPharmacistsChapter;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddVirtualMedicineCreateNotifyRequest_PhysicalFunction, "physical_function")
	*/
	private $physicalFunction;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddVirtualMedicineCreateNotifyRequest_DrugInfoItem>, "drug_info")
	*/
	private $drugInfo;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "status", $this->status);
		$this->setUserParam($params, "err_message", $this->errMessage);
		$this->setUserParam($params, "medical_no", $this->medicalNo);
		$this->setUserParam($params, "mall_id", $this->mallId);
		$this->setUserParam($params, "diagnostic_no", $this->diagnosticNo);
		$this->setUserParam($params, "diagnostic_name", $this->diagnosticName);
		$this->setUserParam($params, "appeal", $this->appeal);
		$this->setUserParam($params, "past_history", $this->pastHistory);
		$this->setUserParam($params, "allergy_history", $this->allergyHistory);
		$this->setUserParam($params, "medical_record", $this->medicalRecord);
		$this->setUserParam($params, "hospital_doctor_name", $this->hospitalDoctorName);
		$this->setUserParam($params, "hospital_doctor_chaper", $this->hospitalDoctorChaper);
		$this->setUserParam($params, "hospital_pharmacists_name", $this->hospitalPharmacistsName);
		$this->setUserParam($params, "hospital_pharmacists_chapter", $this->hospitalPharmacistsChapter);
		$this->setUserParam($params, "physical_function", $this->physicalFunction);
		$this->setUserParam($params, "drug_info", $this->drugInfo);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.virtual.medicine.create.notify";
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

	public function setErrMessage($errMessage)
	{
		$this->errMessage = $errMessage;
	}

	public function setMedicalNo($medicalNo)
	{
		$this->medicalNo = $medicalNo;
	}

	public function setMallId($mallId)
	{
		$this->mallId = $mallId;
	}

	public function setDiagnosticNo($diagnosticNo)
	{
		$this->diagnosticNo = $diagnosticNo;
	}

	public function setDiagnosticName($diagnosticName)
	{
		$this->diagnosticName = $diagnosticName;
	}

	public function setAppeal($appeal)
	{
		$this->appeal = $appeal;
	}

	public function setPastHistory($pastHistory)
	{
		$this->pastHistory = $pastHistory;
	}

	public function setAllergyHistory($allergyHistory)
	{
		$this->allergyHistory = $allergyHistory;
	}

	public function setMedicalRecord($medicalRecord)
	{
		$this->medicalRecord = $medicalRecord;
	}

	public function setHospitalDoctorName($hospitalDoctorName)
	{
		$this->hospitalDoctorName = $hospitalDoctorName;
	}

	public function setHospitalDoctorChaper($hospitalDoctorChaper)
	{
		$this->hospitalDoctorChaper = $hospitalDoctorChaper;
	}

	public function setHospitalPharmacistsName($hospitalPharmacistsName)
	{
		$this->hospitalPharmacistsName = $hospitalPharmacistsName;
	}

	public function setHospitalPharmacistsChapter($hospitalPharmacistsChapter)
	{
		$this->hospitalPharmacistsChapter = $hospitalPharmacistsChapter;
	}

	public function setPhysicalFunction($physicalFunction)
	{
		$this->physicalFunction = $physicalFunction;
	}

	public function setDrugInfo($drugInfo)
	{
		$this->drugInfo = $drugInfo;
	}

}

class PddVirtualMedicineCreateNotifyRequest_PhysicalFunction extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "liver_function")
	*/
	private $liverFunction;

	/**
	* @JsonProperty(String, "renal_function")
	*/
	private $renalFunction;

	/**
	* @JsonProperty(String, "pregnancy_lactation")
	*/
	private $pregnancyLactation;

	public function setLiverFunction($liverFunction)
	{
		$this->liverFunction = $liverFunction;
	}

	public function setRenalFunction($renalFunction)
	{
		$this->renalFunction = $renalFunction;
	}

	public function setPregnancyLactation($pregnancyLactation)
	{
		$this->pregnancyLactation = $pregnancyLactation;
	}

}

class PddVirtualMedicineCreateNotifyRequest_DrugInfoItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	/**
	* @JsonProperty(Long, "sku_id")
	*/
	private $skuId;

	/**
	* @JsonProperty(Long, "mall_id")
	*/
	private $mallId;

	/**
	* @JsonProperty(String, "mall_name")
	*/
	private $mallName;

	/**
	* @JsonProperty(String, "drug_name")
	*/
	private $drugName;

	/**
	* @JsonProperty(String, "approval_no")
	*/
	private $approvalNo;

	/**
	* @JsonProperty(String, "general_name")
	*/
	private $generalName;

	/**
	* @JsonProperty(String, "specs")
	*/
	private $specs;

	/**
	* @JsonProperty(Integer, "dosage_form")
	*/
	private $dosageForm;

	/**
	* @JsonProperty(Integer, "num")
	*/
	private $num;

	/**
	* @JsonProperty(String, "pack")
	*/
	private $pack;

	/**
	* @JsonProperty(String, "usage_and_dosage")
	*/
	private $usageAndDosage;

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
	}

	public function setMallId($mallId)
	{
		$this->mallId = $mallId;
	}

	public function setMallName($mallName)
	{
		$this->mallName = $mallName;
	}

	public function setDrugName($drugName)
	{
		$this->drugName = $drugName;
	}

	public function setApprovalNo($approvalNo)
	{
		$this->approvalNo = $approvalNo;
	}

	public function setGeneralName($generalName)
	{
		$this->generalName = $generalName;
	}

	public function setSpecs($specs)
	{
		$this->specs = $specs;
	}

	public function setDosageForm($dosageForm)
	{
		$this->dosageForm = $dosageForm;
	}

	public function setNum($num)
	{
		$this->num = $num;
	}

	public function setPack($pack)
	{
		$this->pack = $pack;
	}

	public function setUsageAndDosage($usageAndDosage)
	{
		$this->usageAndDosage = $usageAndDosage;
	}

}
