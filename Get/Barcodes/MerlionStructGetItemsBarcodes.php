<?php
/**
 * File for class MerlionStructGetItemsBarcodes
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructGetItemsBarcodes originally named getItemsBarcodes
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructGetItemsBarcodes extends MerlionWsdlClass
{
    /**
     * The cat_id
     * @var string
     */
    public $cat_id;
    /**
     * The item_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var MerlionStructArrayOfString
     */
    public $item_id;
    /**
     * Constructor method for getItemsBarcodes
     * @see parent::__construct()
     * @param string $_cat_id
     * @param MerlionStructArrayOfString $_item_id
     * @return MerlionStructGetItemsBarcodes
     */
    public function __construct($_cat_id = NULL,$_item_id = NULL)
    {
        parent::__construct(array('cat_id'=>$_cat_id,'item_id'=>($_item_id instanceof MerlionStructArrayOfString)?$_item_id:new MerlionStructArrayOfString($_item_id)),false);
    }
    /**
     * Get cat_id value
     * @return string|null
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }
    /**
     * Set cat_id value
     * @param string $_cat_id the cat_id
     * @return string
     */
    public function setCat_id($_cat_id)
    {
        return ($this->cat_id = $_cat_id);
    }
    /**
     * Get item_id value
     * @return MerlionStructArrayOfString|null
     */
    public function getItem_id()
    {
        return $this->item_id;
    }
    /**
     * Set item_id value
     * @param MerlionStructArrayOfString $_item_id the item_id
     * @return MerlionStructArrayOfString
     */
    public function setItem_id($_item_id)
    {
        return ($this->item_id = $_item_id);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsBarcodes
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
