<?php
/**
 * File for class ULSServiceEAU
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSServiceEAU originally named EAU
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSServiceEAU extends ULSWsdlClass
{
    /**
     * Method to call the operation originally named EAUser_ChangePassword
     * Documentation : Changes the password for an EAUser
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructEAUser_ChangePassword $_uLSStructEAUser_ChangePassword
     * @return ULSStructEAUser_ChangePasswordResponse
     */
    public function EAUser_ChangePassword(ULSStructEAUser_ChangePassword $_uLSStructEAUser_ChangePassword)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->EAUser_ChangePassword($_uLSStructEAUser_ChangePassword));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named EAUser_Login
     * Documentation : Enables a User to log in to the system using an External Application User Code under the current Session. Returns a code to indicate if successful.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructEAUser_Login $_uLSStructEAUser_Login
     * @return ULSStructEAUser_LoginResponse
     */
    public function EAUser_Login(ULSStructEAUser_Login $_uLSStructEAUser_Login)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->EAUser_Login($_uLSStructEAUser_Login));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named EAUser_FindFromUserCode
     * Documentation : Finds the User with the specified External Application User Code.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructEAUser_FindFromUserCode $_uLSStructEAUser_FindFromUserCode
     * @return ULSStructEAUser_FindFromUserCodeResponse
     */
    public function EAUser_FindFromUserCode(ULSStructEAUser_FindFromUserCode $_uLSStructEAUser_FindFromUserCode)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->EAUser_FindFromUserCode($_uLSStructEAUser_FindFromUserCode));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ULSWsdlClass::getResult()
     * @return ULSStructEAUser_ChangePasswordResponse|ULSStructEAUser_FindFromUserCodeResponse|ULSStructEAUser_LoginResponse
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
