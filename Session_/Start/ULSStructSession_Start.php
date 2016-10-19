<?php
/**
 * File for class ULSStructSession_Start
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructSession_Start originally named Session_Start
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructSession_Start extends ULSWsdlClass
{
    /**
     * The EAUsername
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EAUsername;
    /**
     * The EAPassword
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EAPassword;
    /**
     * Constructor method for Session_Start
     * @see parent::__construct()
     * @param string $_eAUsername
     * @param string $_eAPassword
     * @return ULSStructSession_Start
     */
    public function __construct($_eAUsername = NULL,$_eAPassword = NULL)
    {
        parent::__construct(array('EAUsername'=>$_eAUsername,'EAPassword'=>$_eAPassword),false);
    }
    /**
     * Get EAUsername value
     * @return string|null
     */
    public function getEAUsername()
    {
        return $this->EAUsername;
    }
    /**
     * Set EAUsername value
     * @param string $_eAUsername the EAUsername
     * @return string
     */
    public function setEAUsername($_eAUsername)
    {
        return ($this->EAUsername = $_eAUsername);
    }
    /**
     * Get EAPassword value
     * @return string|null
     */
    public function getEAPassword()
    {
        return $this->EAPassword;
    }
    /**
     * Set EAPassword value
     * @param string $_eAPassword the EAPassword
     * @return string
     */
    public function setEAPassword($_eAPassword)
    {
        return ($this->EAPassword = $_eAPassword);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructSession_Start
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
