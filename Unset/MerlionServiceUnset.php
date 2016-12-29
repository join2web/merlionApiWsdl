<?php
/**
 * File for class MerlionServiceUnset
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
/**
 * This class stands for MerlionServiceUnset originally named Unset
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-12-29
 */
class MerlionServiceUnset extends MerlionWsdlClass
{
    /**
     * Method to call the operation originally named unsetSignOrderCommand
     * Documentation : Команда для снятия подписи заказа
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructUnsetSignOrderCommand $_merlionStructUnsetSignOrderCommand
     * @return MerlionStructUnsetSignOrderCommandResponse
     */
    public function unsetSignOrderCommand(MerlionStructUnsetSignOrderCommand $_merlionStructUnsetSignOrderCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->unsetSignOrderCommand($_merlionStructUnsetSignOrderCommand));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MerlionWsdlClass::getResult()
     * @return MerlionStructUnsetSignOrderCommandResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
