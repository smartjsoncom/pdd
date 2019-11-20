<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddInvoiceDetailUploadRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "payer_name")
	*/
	private $payerName;

	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	/**
	* @JsonProperty(Long, "application_id")
	*/
	private $applicationId;

	/**
	* @JsonProperty(Integer, "business_type")
	*/
	private $businessType;

	/**
	* @JsonProperty(Integer, "invoice_kind")
	*/
	private $invoiceKind;

	/**
	* @JsonProperty(Integer, "invoice_type")
	*/
	private $invoiceType;

	/**
	* @JsonProperty(Long, "invoice_amount")
	*/
	private $invoiceAmount;

	/**
	* @JsonProperty(Long, "sum_price")
	*/
	private $sumPrice;

	/**
	* @JsonProperty(String, "payer_register_no")
	*/
	private $payerRegisterNo;

	/**
	* @JsonProperty(Integer, "tax_rate")
	*/
	private $taxRate;

	/**
	* @JsonProperty(Integer, "sum_tax")
	*/
	private $sumTax;

	/**
	* @JsonProperty(String, "invoice_code")
	*/
	private $invoiceCode;

	/**
	* @JsonProperty(String, "invoice_no")
	*/
	private $invoiceNo;

	/**
	* @JsonProperty(String, "original_invoice_code")
	*/
	private $originalInvoiceCode;

	/**
	* @JsonProperty(String, "original_invoice_no")
	*/
	private $originalInvoiceNo;

	/**
	* @JsonProperty(String, "payee_operator")
	*/
	private $payeeOperator;

	/**
	* @JsonProperty(Long, "invoice_time")
	*/
	private $invoiceTime;

	/**
	* @JsonProperty(String, "invoice_file_content")
	*/
	private $invoiceFileContent;

	/**
	* @JsonProperty(String, "memo")
	*/
	private $memo;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "payer_name", $this->payerName);
		$this->setUserParam($params, "order_sn", $this->orderSn);
		$this->setUserParam($params, "application_id", $this->applicationId);
		$this->setUserParam($params, "business_type", $this->businessType);
		$this->setUserParam($params, "invoice_kind", $this->invoiceKind);
		$this->setUserParam($params, "invoice_type", $this->invoiceType);
		$this->setUserParam($params, "invoice_amount", $this->invoiceAmount);
		$this->setUserParam($params, "sum_price", $this->sumPrice);
		$this->setUserParam($params, "payer_register_no", $this->payerRegisterNo);
		$this->setUserParam($params, "tax_rate", $this->taxRate);
		$this->setUserParam($params, "sum_tax", $this->sumTax);
		$this->setUserParam($params, "invoice_code", $this->invoiceCode);
		$this->setUserParam($params, "invoice_no", $this->invoiceNo);
		$this->setUserParam($params, "original_invoice_code", $this->originalInvoiceCode);
		$this->setUserParam($params, "original_invoice_no", $this->originalInvoiceNo);
		$this->setUserParam($params, "payee_operator", $this->payeeOperator);
		$this->setUserParam($params, "invoice_time", $this->invoiceTime);
		$this->setUserParam($params, "invoice_file_content", $this->invoiceFileContent);
		$this->setUserParam($params, "memo", $this->memo);

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
		return "pdd.invoice.detail.upload";
	}

	public function setPayerName($payerName)
	{
		$this->payerName = $payerName;
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

	public function setApplicationId($applicationId)
	{
		$this->applicationId = $applicationId;
	}

	public function setBusinessType($businessType)
	{
		$this->businessType = $businessType;
	}

	public function setInvoiceKind($invoiceKind)
	{
		$this->invoiceKind = $invoiceKind;
	}

	public function setInvoiceType($invoiceType)
	{
		$this->invoiceType = $invoiceType;
	}

	public function setInvoiceAmount($invoiceAmount)
	{
		$this->invoiceAmount = $invoiceAmount;
	}

	public function setSumPrice($sumPrice)
	{
		$this->sumPrice = $sumPrice;
	}

	public function setPayerRegisterNo($payerRegisterNo)
	{
		$this->payerRegisterNo = $payerRegisterNo;
	}

	public function setTaxRate($taxRate)
	{
		$this->taxRate = $taxRate;
	}

	public function setSumTax($sumTax)
	{
		$this->sumTax = $sumTax;
	}

	public function setInvoiceCode($invoiceCode)
	{
		$this->invoiceCode = $invoiceCode;
	}

	public function setInvoiceNo($invoiceNo)
	{
		$this->invoiceNo = $invoiceNo;
	}

	public function setOriginalInvoiceCode($originalInvoiceCode)
	{
		$this->originalInvoiceCode = $originalInvoiceCode;
	}

	public function setOriginalInvoiceNo($originalInvoiceNo)
	{
		$this->originalInvoiceNo = $originalInvoiceNo;
	}

	public function setPayeeOperator($payeeOperator)
	{
		$this->payeeOperator = $payeeOperator;
	}

	public function setInvoiceTime($invoiceTime)
	{
		$this->invoiceTime = $invoiceTime;
	}

	public function setInvoiceFileContent($invoiceFileContent)
	{
		$this->invoiceFileContent = $invoiceFileContent;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
	}

}
