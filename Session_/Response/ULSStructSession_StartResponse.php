<?php
/**
 * File for class ULSStructSession_StartResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructSession_StartResponse originally named Session_StartResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructSession_StartResponse extends ULSWsdlClass
{
    /**
     * The Session_StartResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Session_StartResult;
    /**
     * Constructor method for Session_StartResponse
     * @see parent::__construct()
     * @param string $_session_StartResult
     * @return ULSStructSession_StartResponse
     */
    public function __construct($_session_StartResult = NULL)
    {
        parent::__construct(array('Session_StartResult'=>$_session_StartResult),false);
    }
    /**
     * Get Session_StartResult value
     * @return string|null
     */
    public function getSession_StartResult()
    {
        return $this->Session_StartResult;
    }
    /**
     * Set Session_StartResult value
     * @param string $_session_StartResult the Session_StartResult
     * @return string
     */
    public function setSession_StartResult($_session_StartResult)
    {
        return ($this->Session_StartResult = $_session_StartResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructSession_StartResponse
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
