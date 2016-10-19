<?php
/**
 * File for class ULSStructProxyUser_LoginResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructProxyUser_LoginResponse originally named ProxyUser_LoginResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructProxyUser_LoginResponse extends ULSWsdlClass
{
    /**
     * The ProxyUser_LoginResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var ULSEnumLoginResults
     */
    public $ProxyUser_LoginResult;
    /**
     * Constructor method for ProxyUser_LoginResponse
     * @see parent::__construct()
     * @param ULSEnumLoginResults $_proxyUser_LoginResult
     * @return ULSStructProxyUser_LoginResponse
     */
    public function __construct($_proxyUser_LoginResult)
    {
        parent::__construct(array('ProxyUser_LoginResult'=>$_proxyUser_LoginResult),false);
    }
    /**
     * Get ProxyUser_LoginResult value
     * @return ULSEnumLoginResults
     */
    public function getProxyUser_LoginResult()
    {
        return $this->ProxyUser_LoginResult;
    }
    /**
     * Set ProxyUser_LoginResult value
     * @uses ULSEnumLoginResults::valueIsValid()
     * @param ULSEnumLoginResults $_proxyUser_LoginResult the ProxyUser_LoginResult
     * @return ULSEnumLoginResults
     */
    public function setProxyUser_LoginResult($_proxyUser_LoginResult)
    {
        if(!ULSEnumLoginResults::valueIsValid($_proxyUser_LoginResult))
        {
            return false;
        }
        return ($this->ProxyUser_LoginResult = $_proxyUser_LoginResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructProxyUser_LoginResponse
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
