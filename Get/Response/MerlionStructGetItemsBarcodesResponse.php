<?php
/**
 * File for class MerlionStructGetItemsBarcodesResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructGetItemsBarcodesResponse originally named getItemsBarcodesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructGetItemsBarcodesResponse extends MerlionWsdlClass
{
    /**
     * The getItemsBarcodesResult
     * @var MerlionStructArrayOfItemsBarcodesResult
     */
    public $getItemsBarcodesResult;
    /**
     * Constructor method for getItemsBarcodesResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfItemsBarcodesResult $_getItemsBarcodesResult
     * @return MerlionStructGetItemsBarcodesResponse
     */
    public function __construct($_getItemsBarcodesResult = NULL)
    {
        parent::__construct(array('getItemsBarcodesResult'=>($_getItemsBarcodesResult instanceof MerlionStructArrayOfItemsBarcodesResult)?$_getItemsBarcodesResult:new MerlionStructArrayOfItemsBarcodesResult($_getItemsBarcodesResult)),false);
    }
    /**
     * Get getItemsBarcodesResult value
     * @return MerlionStructArrayOfItemsBarcodesResult|null
     */
    public function getGetItemsBarcodesResult()
    {
        return $this->getItemsBarcodesResult;
    }
    /**
     * Set getItemsBarcodesResult value
     * @param MerlionStructArrayOfItemsBarcodesResult $_getItemsBarcodesResult the getItemsBarcodesResult
     * @return MerlionStructArrayOfItemsBarcodesResult
     */
    public function setGetItemsBarcodesResult($_getItemsBarcodesResult)
    {
        return ($this->getItemsBarcodesResult = $_getItemsBarcodesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsBarcodesResponse
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
