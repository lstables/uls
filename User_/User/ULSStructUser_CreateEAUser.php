<?php
/**
 * File for class ULSStructUser_CreateEAUser
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructUser_CreateEAUser originally named User_CreateEAUser
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructUser_CreateEAUser extends ULSWsdlClass
{
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $UserId;
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
     * Constructor method for User_CreateEAUser
     * @see parent::__construct()
     * @param long $_userId
     * @param string $_sID
     * @param string $_eAUserCode
     * @return ULSStructUser_CreateEAUser
     */
    public function __construct($_userId,$_sID = NULL,$_eAUserCode = NULL)
    {
        parent::__construct(array('UserId'=>$_userId,'SID'=>$_sID,'EAUserCode'=>$_eAUserCode),false);
    }
    /**
     * Get UserId value
     * @return long
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param long $_userId the UserId
     * @return long
     */
    public function setUserId($_userId)
    {
        return ($this->UserId = $_userId);
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
     * @return ULSStructUser_CreateEAUser
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
