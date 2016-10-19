<?php
/**
 * File for class ULSStructEAUser_FindFromUserCodeResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructEAUser_FindFromUserCodeResponse originally named EAUser_FindFromUserCodeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructEAUser_FindFromUserCodeResponse extends ULSWsdlClass
{
    /**
     * The EAUser_FindFromUserCodeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var ULSStructUser
     */
    public $EAUser_FindFromUserCodeResult;
    /**
     * Constructor method for EAUser_FindFromUserCodeResponse
     * @see parent::__construct()
     * @param ULSStructUser $_eAUser_FindFromUserCodeResult
     * @return ULSStructEAUser_FindFromUserCodeResponse
     */
    public function __construct($_eAUser_FindFromUserCodeResult)
    {
        parent::__construct(array('EAUser_FindFromUserCodeResult'=>$_eAUser_FindFromUserCodeResult),false);
    }
    /**
     * Get EAUser_FindFromUserCodeResult value
     * @return ULSStructUser
     */
    public function getEAUser_FindFromUserCodeResult()
    {
        return $this->EAUser_FindFromUserCodeResult;
    }
    /**
     * Set EAUser_FindFromUserCodeResult value
     * @param ULSStructUser $_eAUser_FindFromUserCodeResult the EAUser_FindFromUserCodeResult
     * @return ULSStructUser
     */
    public function setEAUser_FindFromUserCodeResult($_eAUser_FindFromUserCodeResult)
    {
        return ($this->EAUser_FindFromUserCodeResult = $_eAUser_FindFromUserCodeResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructEAUser_FindFromUserCodeResponse
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
