<?php
/**
 * File for class MerlionStructSetLinkedItemsResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructSetLinkedItemsResponse originally named setLinkedItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructSetLinkedItemsResponse extends MerlionWsdlClass
{
    /**
     * The setLinkedItemsResult
     * @var string
     */
    public $setLinkedItemsResult;
    /**
     * Constructor method for setLinkedItemsResponse
     * @see parent::__construct()
     * @param string $_setLinkedItemsResult
     * @return MerlionStructSetLinkedItemsResponse
     */
    public function __construct($_setLinkedItemsResult = NULL)
    {
        parent::__construct(array('setLinkedItemsResult'=>$_setLinkedItemsResult),false);
    }
    /**
     * Get setLinkedItemsResult value
     * @return string|null
     */
    public function getSetLinkedItemsResult()
    {
        return $this->setLinkedItemsResult;
    }
    /**
     * Set setLinkedItemsResult value
     * @param string $_setLinkedItemsResult the setLinkedItemsResult
     * @return string
     */
    public function setSetLinkedItemsResult($_setLinkedItemsResult)
    {
        return ($this->setLinkedItemsResult = $_setLinkedItemsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetLinkedItemsResponse
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
