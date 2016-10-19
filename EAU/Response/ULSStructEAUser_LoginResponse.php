<?php
/**
 * File for class ULSStructEAUser_LoginResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructEAUser_LoginResponse originally named EAUser_LoginResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructEAUser_LoginResponse extends ULSWsdlClass
{
    /**
     * The EAUser_LoginResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var ULSEnumLoginResults
     */
    public $EAUser_LoginResult;
    /**
     * Constructor method for EAUser_LoginResponse
     * @see parent::__construct()
     * @param ULSEnumLoginResults $_eAUser_LoginResult
     * @return ULSStructEAUser_LoginResponse
     */
    public function __construct($_eAUser_LoginResult)
    {
        parent::__construct(array('EAUser_LoginResult'=>$_eAUser_LoginResult),false);
    }
    /**
     * Get EAUser_LoginResult value
     * @return ULSEnumLoginResults
     */
    public function getEAUser_LoginResult()
    {
        return $this->EAUser_LoginResult;
    }
    /**
     * Set EAUser_LoginResult value
     * @uses ULSEnumLoginResults::valueIsValid()
     * @param ULSEnumLoginResults $_eAUser_LoginResult the EAUser_LoginResult
     * @return ULSEnumLoginResults
     */
    public function setEAUser_LoginResult($_eAUser_LoginResult)
    {
        if(!ULSEnumLoginResults::valueIsValid($_eAUser_LoginResult))
        {
            return false;
        }
        return ($this->EAUser_LoginResult = $_eAUser_LoginResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructEAUser_LoginResponse
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
