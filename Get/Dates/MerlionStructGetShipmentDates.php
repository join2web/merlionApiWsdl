<?php
/**
 * File for class MerlionStructGetShipmentDates
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructGetShipmentDates originally named getShipmentDates
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructGetShipmentDates extends MerlionWsdlClass
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $code;
    /**
     * The ShipmentMethodCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShipmentMethodCode;
    /**
     * Constructor method for getShipmentDates
     * @see parent::__construct()
     * @param string $_code
     * @param string $_shipmentMethodCode
     * @return MerlionStructGetShipmentDates
     */
    public function __construct($_code = NULL,$_shipmentMethodCode = NULL)
    {
        parent::__construct(array('code'=>$_code,'ShipmentMethodCode'=>$_shipmentMethodCode),false);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $_code the code
     * @return string
     */
    public function setCode($_code)
    {
        return ($this->code = $_code);
    }
    /**
     * Get ShipmentMethodCode value
     * @return string|null
     */
    public function getShipmentMethodCode()
    {
        return $this->ShipmentMethodCode;
    }
    /**
     * Set ShipmentMethodCode value
     * @param string $_shipmentMethodCode the ShipmentMethodCode
     * @return string
     */
    public function setShipmentMethodCode($_shipmentMethodCode)
    {
        return ($this->ShipmentMethodCode = $_shipmentMethodCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetShipmentDates
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
