<?php
/**
 * File for class ULSStructEAUser_FindFromUserCode
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructEAUser_FindFromUserCode originally named EAUser_FindFromUserCode
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws-qa.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructEAUser_FindFromUserCode extends ULSWsdlClass
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
     * The EAUserCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EAUserCode;
    /**
     * Constructor method for EAUser_FindFromUserCode
     * @see parent::__construct()
     * @param string $_sID
     * @param string $_eAUserCode
     * @return ULSStructEAUser_FindFromUserCode
     */
    public function __construct($_sID = NULL,$_eAUserCode = NULL)
    {
        parent::__construct(array('SID'=>$_sID,'EAUserCode'=>$_eAUserCode),false);
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
     * Get EAUserCode value
     * @return string|null
     */
    public function getEAUserCode()
    {
        return $this->EAUserCode;
    }
    /**
     * Set EAUserCode value
     * @param string $_eAUserCode the EAUserCode
     * @return string
     */
    public function setEAUserCode($_eAUserCode)
    {
        return ($this->EAUserCode = $_eAUserCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructEAUser_FindFromUserCode
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
