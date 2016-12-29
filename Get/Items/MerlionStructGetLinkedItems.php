<?php
/**
 * File for class MerlionStructGetLinkedItems
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructGetLinkedItems originally named getLinkedItems
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructGetLinkedItems extends MerlionWsdlClass
{
    /**
     * The page
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $page;
    /**
     * The rows_on_page
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $rows_on_page;
    /**
     * The type_item_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $type_item_id;
    /**
     * The item_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var MerlionStructArrayOfString
     */
    public $item_id;
    /**
     * Constructor method for getLinkedItems
     * @see parent::__construct()
     * @param int $_page
     * @param int $_rows_on_page
     * @param int $_type_item_id
     * @param MerlionStructArrayOfString $_item_id
     * @return MerlionStructGetLinkedItems
     */
    public function __construct($_page = NULL,$_rows_on_page = NULL,$_type_item_id = NULL,$_item_id = NULL)
    {
        parent::__construct(array('page'=>$_page,'rows_on_page'=>$_rows_on_page,'type_item_id'=>$_type_item_id,'item_id'=>($_item_id instanceof MerlionStructArrayOfString)?$_item_id:new MerlionStructArrayOfString($_item_id)),false);
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $_page the page
     * @return int
     */
    public function setPage($_page)
    {
        return ($this->page = $_page);
    }
    /**
     * Get rows_on_page value
     * @return int|null
     */
    public function getRows_on_page()
    {
        return $this->rows_on_page;
    }
    /**
     * Set rows_on_page value
     * @param int $_rows_on_page the rows_on_page
     * @return int
     */
    public function setRows_on_page($_rows_on_page)
    {
        return ($this->rows_on_page = $_rows_on_page);
    }
    /**
     * Get type_item_id value
     * @return int|null
     */
    public function getType_item_id()
    {
        return $this->type_item_id;
    }
    /**
     * Set type_item_id value
     * @param int $_type_item_id the type_item_id
     * @return int
     */
    public function setType_item_id($_type_item_id)
    {
        return ($this->type_item_id = $_type_item_id);
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
     * @return MerlionStructGetLinkedItems
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
