<?php
/**
 * File for class ULSStructUser_FindFromLoginCredentialsResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructUser_FindFromLoginCredentialsResponse originally named User_FindFromLoginCredentialsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructUser_FindFromLoginCredentialsResponse extends ULSWsdlClass
{
    /**
     * The User_FindFromLoginCredentialsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var ULSStructUser
     */
    public $User_FindFromLoginCredentialsResult;
    /**
     * Constructor method for User_FindFromLoginCredentialsResponse
     * @see parent::__construct()
     * @param ULSStructUser $_user_FindFromLoginCredentialsResult
     * @return ULSStructUser_FindFromLoginCredentialsResponse
     */
    public function __construct($_user_FindFromLoginCredentialsResult)
    {
        parent::__construct(array('User_FindFromLoginCredentialsResult'=>$_user_FindFromLoginCredentialsResult),false);
    }
    /**
     * Get User_FindFromLoginCredentialsResult value
     * @return ULSStructUser
     */
    public function getUser_FindFromLoginCredentialsResult()
    {
        return $this->User_FindFromLoginCredentialsResult;
    }
    /**
     * Set User_FindFromLoginCredentialsResult value
     * @param ULSStructUser $_user_FindFromLoginCredentialsResult the User_FindFromLoginCredentialsResult
     * @return ULSStructUser
     */
    public function setUser_FindFromLoginCredentialsResult($_user_FindFromLoginCredentialsResult)
    {
        return ($this->User_FindFromLoginCredentialsResult = $_user_FindFromLoginCredentialsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructUser_FindFromLoginCredentialsResponse
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
