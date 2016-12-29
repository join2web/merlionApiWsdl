<?php
/**
 * File for class MerlionStructSetLinkedItems
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructSetLinkedItems originally named setLinkedItems
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructSetLinkedItems extends MerlionWsdlClass
{
    /**
     * The item_id
     * @var string
     */
    public $item_id;
    /**
     * The custitem_id
     * @var string
     */
    public $custitem_id;
    /**
     * The custitem_name
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $custitem_name;
    /**
     * Constructor method for setLinkedItems
     * @see parent::__construct()
     * @param string $_item_id
     * @param string $_custitem_id
     * @param string $_custitem_name
     * @return MerlionStructSetLinkedItems
     */
    public function __construct($_item_id = NULL,$_custitem_id = NULL,$_custitem_name = NULL)
    {
        parent::__construct(array('item_id'=>$_item_id,'custitem_id'=>$_custitem_id,'custitem_name'=>$_custitem_name),false);
    }
    /**
     * Get item_id value
     * @return string|null
     */
    public function getItem_id()
    {
        return $this->item_id;
    }
    /**
     * Set item_id value
     * @param string $_item_id the item_id
     * @return string
     */
    public function setItem_id($_item_id)
    {
        return ($this->item_id = $_item_id);
    }
    /**
     * Get custitem_id value
     * @return string|null
     */
    public function getCustitem_id()
    {
        return $this->custitem_id;
    }
    /**
     * Set custitem_id value
     * @param string $_custitem_id the custitem_id
     * @return string
     */
    public function setCustitem_id($_custitem_id)
    {
        return ($this->custitem_id = $_custitem_id);
    }
    /**
     * Get custitem_name value
     * @return string|null
     */
    public function getCustitem_name()
    {
        return $this->custitem_name;
    }
    /**
     * Set custitem_name value
     * @param string $_custitem_name the custitem_name
     * @return string
     */
    public function setCustitem_name($_custitem_name)
    {
        return ($this->custitem_name = $_custitem_name);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetLinkedItems
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
