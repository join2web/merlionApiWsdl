<?php
/**
 * File for class MerlionStructGetCommandResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructGetCommandResult originally named getCommandResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructGetCommandResult extends MerlionWsdlClass
{
    /**
     * The operation_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $operation_no;
    /**
     * Constructor method for getCommandResult
     * @see parent::__construct()
     * @param string $_operation_no
     * @return MerlionStructGetCommandResult
     */
    public function __construct($_operation_no = NULL)
    {
        parent::__construct(array('operation_no'=>$_operation_no),false);
    }
    /**
     * Get operation_no value
     * @return string|null
     */
    public function getOperation_no()
    {
        return $this->operation_no;
    }
    /**
     * Set operation_no value
     * @param string $_operation_no the operation_no
     * @return string
     */
    public function setOperation_no($_operation_no)
    {
        return ($this->operation_no = $_operation_no);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCommandResult
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
