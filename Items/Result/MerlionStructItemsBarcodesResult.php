<?php
/**
 * File for class MerlionStructItemsBarcodesResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionStructItemsBarcodesResult originally named ItemsBarcodesResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice3?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionStructItemsBarcodesResult extends MerlionWsdlClass
{
    /**
     * The ItemNo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ItemNo;
    /**
     * The UnitOfMeasure
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $UnitOfMeasure;
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Barcode;
    /**
     * The Checked
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Checked;
    /**
     * Constructor method for ItemsBarcodesResult
     * @see parent::__construct()
     * @param string $_itemNo
     * @param string $_unitOfMeasure
     * @param string $_barcode
     * @param int $_checked
     * @return MerlionStructItemsBarcodesResult
     */
    public function __construct($_itemNo = NULL,$_unitOfMeasure = NULL,$_barcode = NULL,$_checked = NULL)
    {
        parent::__construct(array('ItemNo'=>$_itemNo,'UnitOfMeasure'=>$_unitOfMeasure,'Barcode'=>$_barcode,'Checked'=>$_checked),false);
    }
    /**
     * Get ItemNo value
     * @return string|null
     */
    public function getItemNo()
    {
        return $this->ItemNo;
    }
    /**
     * Set ItemNo value
     * @param string $_itemNo the ItemNo
     * @return string
     */
    public function setItemNo($_itemNo)
    {
        return ($this->ItemNo = $_itemNo);
    }
    /**
     * Get UnitOfMeasure value
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    /**
     * Set UnitOfMeasure value
     * @param string $_unitOfMeasure the UnitOfMeasure
     * @return string
     */
    public function setUnitOfMeasure($_unitOfMeasure)
    {
        return ($this->UnitOfMeasure = $_unitOfMeasure);
    }
    /**
     * Get Barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param string $_barcode the Barcode
     * @return string
     */
    public function setBarcode($_barcode)
    {
        return ($this->Barcode = $_barcode);
    }
    /**
     * Get Checked value
     * @return int|null
     */
    public function getChecked()
    {
        return $this->Checked;
    }
    /**
     * Set Checked value
     * @param int $_checked the Checked
     * @return int
     */
    public function setChecked($_checked)
    {
        return ($this->Checked = $_checked);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructItemsBarcodesResult
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
