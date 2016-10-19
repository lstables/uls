<?php
/**
 * File for class ULSServiceProxy
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSServiceProxy originally named Proxy
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSServiceProxy extends ULSWsdlClass
{
    /**
     * Method to call the operation originally named ProxyUser_Login
     * Documentation : Enables a Proxy User to log in to the system using an Proxy UserCode under the current Session. Returns a code to indicate if successful.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructProxyUser_Login $_uLSStructProxyUser_Login
     * @return ULSStructProxyUser_LoginResponse
     */
    public function ProxyUser_Login(ULSStructProxyUser_Login $_uLSStructProxyUser_Login)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ProxyUser_Login($_uLSStructProxyUser_Login));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ULSWsdlClass::getResult()
     * @return ULSStructProxyUser_LoginResponse
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
