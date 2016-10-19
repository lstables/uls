<?php
/**
 * File for class ULSStructProxyUser_Login
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructProxyUser_Login originally named ProxyUser_Login
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructProxyUser_Login extends ULSWsdlClass
{
    /**
     * The SID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SID;
    /**
     * The ProxyUserCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProxyUserCode;
    /**
     * Constructor method for ProxyUser_Login
     * @see parent::__construct()
     * @param string $_sID
     * @param string $_proxyUserCode
     * @return ULSStructProxyUser_Login
     */
    public function __construct($_sID = NULL,$_proxyUserCode = NULL)
    {
        parent::__construct(array('SID'=>$_sID,'ProxyUserCode'=>$_proxyUserCode),false);
    }
    /**
     * Get SID value
     * @return string|null
     */
    public function getSID()
    {
        return $this->SID;
    }
    /**
     * Set SID value
     * @param string $_sID the SID
     * @return string
     */
    public function setSID($_sID)
    {
        return ($this->SID = $_sID);
    }
    /**
     * Get ProxyUserCode value
     * @return string|null
     */
    public function getProxyUserCode()
    {
        return $this->ProxyUserCode;
    }
    /**
     * Set ProxyUserCode value
     * @param string $_proxyUserCode the ProxyUserCode
     * @return string
     */
    public function setProxyUserCode($_proxyUserCode)
    {
        return ($this->ProxyUserCode = $_proxyUserCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructProxyUser_Login
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
