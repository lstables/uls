<?php
/**
 * File for class ULSStructSession_GetDetailsResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructSession_GetDetailsResponse originally named Session_GetDetailsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructSession_GetDetailsResponse extends ULSWsdlClass
{
    /**
     * The Session_GetDetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var ULSStructSession
     */
    public $Session_GetDetailsResult;
    /**
     * Constructor method for Session_GetDetailsResponse
     * @see parent::__construct()
     * @param ULSStructSession $_session_GetDetailsResult
     * @return ULSStructSession_GetDetailsResponse
     */
    public function __construct($_session_GetDetailsResult)
    {
        parent::__construct(array('Session_GetDetailsResult'=>$_session_GetDetailsResult),false);
    }
    /**
     * Get Session_GetDetailsResult value
     * @return ULSStructSession
     */
    public function getSession_GetDetailsResult()
    {
        return $this->Session_GetDetailsResult;
    }
    /**
     * Set Session_GetDetailsResult value
     * @param ULSStructSession $_session_GetDetailsResult the Session_GetDetailsResult
     * @return ULSStructSession
     */
    public function setSession_GetDetailsResult($_session_GetDetailsResult)
    {
        return ($this->Session_GetDetailsResult = $_session_GetDetailsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructSession_GetDetailsResponse
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
