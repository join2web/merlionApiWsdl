<?php
/**
 * File for class MerlionStructHelloWorldResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructHelloWorldResponse originally named helloWorldResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructHelloWorldResponse extends MerlionWsdlClass
{
    /**
     * The helloWorldResult
     * @var string
     */
    public $helloWorldResult;
    /**
     * Constructor method for helloWorldResponse
     * @see parent::__construct()
     * @param string $_helloWorldResult
     * @return MerlionStructHelloWorldResponse
     */
    public function __construct($_helloWorldResult = NULL)
    {
        parent::__construct(array('helloWorldResult'=>$_helloWorldResult),false);
    }
    /**
     * Get helloWorldResult value
     * @return string|null
     */
    public function getHelloWorldResult()
    {
        return $this->helloWorldResult;
    }
    /**
     * Set helloWorldResult value
     * @param string $_helloWorldResult the helloWorldResult
     * @return string
     */
    public function setHelloWorldResult($_helloWorldResult)
    {
        return ($this->helloWorldResult = $_helloWorldResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructHelloWorldResponse
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
