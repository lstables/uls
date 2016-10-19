<?php
/**
 * File for class ULSServiceSession_
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSServiceSession_ originally named Session_
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSServiceSession_ extends ULSWsdlClass
{
    /**
     * Method to call the operation originally named Session_Start
     * Documentation : Starts a new Session using your 'External Application' security credentials (EAUsername and EAPassword) for identification.<br>Returns a <i><b>'SID'</b></i> (GUID) that needs to be passed in all subsequent web service requests.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructSession_Start $_uLSStructSession_Start
     * @return ULSStructSession_StartResponse
     */
    public function Session_Start(ULSStructSession_Start $_uLSStructSession_Start)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Session_Start($_uLSStructSession_Start));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named Session_GetDetails
     * Documentation : Retrieves details about the current Session.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructSession_GetDetails $_uLSStructSession_GetDetails
     * @return ULSStructSession_GetDetailsResponse
     */
    public function Session_GetDetails(ULSStructSession_GetDetails $_uLSStructSession_GetDetails)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Session_GetDetails($_uLSStructSession_GetDetails));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named Session_End
     * Documentation : Ends the session.
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructSession_End $_uLSStructSession_End
     * @return ULSStructSession_EndResponse
     */
    public function Session_End(ULSStructSession_End $_uLSStructSession_End)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Session_End($_uLSStructSession_End));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ULSWsdlClass::getResult()
     * @return ULSStructSession_EndResponse|ULSStructSession_GetDetailsResponse|ULSStructSession_StartResponse
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
