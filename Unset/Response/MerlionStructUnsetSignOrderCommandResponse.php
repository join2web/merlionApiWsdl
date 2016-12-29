<?php
/**
 * File for class MerlionStructUnsetSignOrderCommandResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructUnsetSignOrderCommandResponse originally named unsetSignOrderCommandResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructUnsetSignOrderCommandResponse extends MerlionWsdlClass
{
    /**
     * The unsetSignOrderCommandResult
     * @var int
     */
    public $unsetSignOrderCommandResult;
    /**
     * Constructor method for unsetSignOrderCommandResponse
     * @see parent::__construct()
     * @param int $_unsetSignOrderCommandResult
     * @return MerlionStructUnsetSignOrderCommandResponse
     */
    public function __construct($_unsetSignOrderCommandResult = NULL)
    {
        parent::__construct(array('unsetSignOrderCommandResult'=>$_unsetSignOrderCommandResult),false);
    }
    /**
     * Get unsetSignOrderCommandResult value
     * @return int|null
     */
    public function getUnsetSignOrderCommandResult()
    {
        return $this->unsetSignOrderCommandResult;
    }
    /**
     * Set unsetSignOrderCommandResult value
     * @param int $_unsetSignOrderCommandResult the unsetSignOrderCommandResult
     * @return int
     */
    public function setUnsetSignOrderCommandResult($_unsetSignOrderCommandResult)
    {
        return ($this->unsetSignOrderCommandResult = $_unsetSignOrderCommandResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructUnsetSignOrderCommandResponse
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
