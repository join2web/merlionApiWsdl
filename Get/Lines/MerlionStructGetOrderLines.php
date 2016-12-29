<?php
/**
 * File for class MerlionStructGetOrderLines
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructGetOrderLines originally named getOrderLines
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructGetOrderLines extends MerlionWsdlClass
{
    /**
     * The document_no
     * @var string
     */
    public $document_no;
    /**
     * The details
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $details;
    /**
     * Constructor method for getOrderLines
     * @see parent::__construct()
     * @param string $_document_no
     * @param string $_details
     * @return MerlionStructGetOrderLines
     */
    public function __construct($_document_no = NULL,$_details = NULL)
    {
        parent::__construct(array('document_no'=>$_document_no,'details'=>$_details),false);
    }
    /**
     * Get document_no value
     * @return string|null
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }
    /**
     * Set document_no value
     * @param string $_document_no the document_no
     * @return string
     */
    public function setDocument_no($_document_no)
    {
        return ($this->document_no = $_document_no);
    }
    /**
     * Get details value
     * @return string|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param string $_details the details
     * @return string
     */
    public function setDetails($_details)
    {
        return ($this->details = $_details);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetOrderLines
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
