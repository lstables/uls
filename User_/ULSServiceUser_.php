<?php
/**
 * File for class ULSServiceUser_
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSServiceUser_ originally named User_
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSServiceUser_ extends ULSWsdlClass
{
    /**
     * Method to call the operation originally named User_CreateEAUser
     * Documentation : Links an EAUserCode to a User for the current External Application.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructUser_CreateEAUser $_uLSStructUser_CreateEAUser
     * @return ULSStructUser_CreateEAUserResponse
     */
    public function User_CreateEAUser(ULSStructUser_CreateEAUser $_uLSStructUser_CreateEAUser)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->User_CreateEAUser($_uLSStructUser_CreateEAUser));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named User_Login
     * Documentation : Enables a User to log in to the system under the current Session. Returns a code to indicate if successful.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructUser_Login $_uLSStructUser_Login
     * @return ULSStructUser_LoginResponse
     */
    public function User_Login(ULSStructUser_Login $_uLSStructUser_Login)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->User_Login($_uLSStructUser_Login));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named User_FindFromLoginCredentials
     * Documentation : Finds the User with the specified username and password.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructUser_FindFromLoginCredentials $_uLSStructUser_FindFromLoginCredentials
     * @return ULSStructUser_FindFromLoginCredentialsResponse
     */
    public function User_FindFromLoginCredentials(ULSStructUser_FindFromLoginCredentials $_uLSStructUser_FindFromLoginCredentials)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->User_FindFromLoginCredentials($_uLSStructUser_FindFromLoginCredentials));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named User_Logout
     * Documentation : Logs out the current User for the Session.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructUser_Logout $_uLSStructUser_Logout
     * @return ULSStructUser_LogoutResponse
     */
    public function User_Logout(ULSStructUser_Logout $_uLSStructUser_Logout)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->User_Logout($_uLSStructUser_Logout));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ULSWsdlClass::getResult()
     * @return ULSStructUser_CreateEAUserResponse|ULSStructUser_FindFromLoginCredentialsResponse|ULSStructUser_LoginResponse|ULSStructUser_LogoutResponse
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
