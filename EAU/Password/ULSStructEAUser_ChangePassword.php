<?php
/**
 * File for class ULSStructEAUser_ChangePassword
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructEAUser_ChangePassword originally named EAUser_ChangePassword
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructEAUser_ChangePassword extends ULSWsdlClass
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
     * The Password
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Password;
    /**
     * Constructor method for EAUser_ChangePassword
     * @see parent::__construct()
     * @param string $_sID
     * @param string $_eAUserCode
     * @param string $_password
     * @return ULSStructEAUser_ChangePassword
     */
    public function __construct($_sID = NULL,$_eAUserCode = NULL,$_password = NULL)
    {
        parent::__construct(array('SID'=>$_sID,'EAUserCode'=>$_eAUserCode,'Password'=>$_password),false);
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
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $_password the Password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->Password = $_password);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructEAUser_ChangePassword
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
