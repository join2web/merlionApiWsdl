<?php
/**
 * File for class MerlionStructGetItemsImages
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructGetItemsImages originally named getItemsImages
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructGetItemsImages extends MerlionWsdlClass
{
    /**
     * The cat_id
     * Meta informations extracted from the WSDL
     * - nillable : true
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
     * The last_time_change
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $last_time_change;
    /**
     * Constructor method for getItemsImages
     * @see parent::__construct()
     * @param string $_cat_id
     * @param MerlionStructArrayOfString $_item_id
     * @param int $_page
     * @param int $_rows_on_page
     * @param string $_last_time_change
     * @return MerlionStructGetItemsImages
     */
    public function __construct($_cat_id = NULL,$_item_id = NULL,$_page = NULL,$_rows_on_page = NULL,$_last_time_change = NULL)
    {
        parent::__construct(array('cat_id'=>$_cat_id,'item_id'=>($_item_id instanceof MerlionStructArrayOfString)?$_item_id:new MerlionStructArrayOfString($_item_id),'page'=>$_page,'rows_on_page'=>$_rows_on_page,'last_time_change'=>$_last_time_change),false);
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
     * Get last_time_change value
     * @return string|null
     */
    public function getLast_time_change()
    {
        return $this->last_time_change;
    }
    /**
     * Set last_time_change value
     * @param string $_last_time_change the last_time_change
     * @return string
     */
    public function setLast_time_change($_last_time_change)
    {
        return ($this->last_time_change = $_last_time_change);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsImages
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
