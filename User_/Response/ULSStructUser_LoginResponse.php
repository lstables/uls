<?php
/**
 * File for class ULSStructUser_LoginResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructUser_LoginResponse originally named User_LoginResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructUser_LoginResponse extends ULSWsdlClass
{
    /**
     * The User_LoginResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var ULSEnumLoginResults
     */
    public $User_LoginResult;
    /**
     * Constructor method for User_LoginResponse
     * @see parent::__construct()
     * @param ULSEnumLoginResults $_user_LoginResult
     * @return ULSStructUser_LoginResponse
     */
    public function __construct($_user_LoginResult)
    {
        parent::__construct(array('User_LoginResult'=>$_user_LoginResult),false);
    }
    /**
     * Get User_LoginResult value
     * @return ULSEnumLoginResults
     */
    public function getUser_LoginResult()
    {
        return $this->User_LoginResult;
    }
    /**
     * Set User_LoginResult value
     * @uses ULSEnumLoginResults::valueIsValid()
     * @param ULSEnumLoginResults $_user_LoginResult the User_LoginResult
     * @return ULSEnumLoginResults
     */
    public function setUser_LoginResult($_user_LoginResult)
    {
        if(!ULSEnumLoginResults::valueIsValid($_user_LoginResult))
        {
            return false;
        }
        return ($this->User_LoginResult = $_user_LoginResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructUser_LoginResponse
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
