<?php
/**
 * File for class ULSStructUser
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructUser originally named User
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructUser extends ULSWsdlClass
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
     * The Active
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $Active;
    /**
     * The CompanyId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $CompanyId;
    /**
     * The UserDisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserDisplayName;
    /**
     * Constructor method for User
     * @see parent::__construct()
     * @param long $_userId
     * @param boolean $_active
     * @param long $_companyId
     * @param string $_userDisplayName
     * @return ULSStructUser
     */
    public function __construct($_userId,$_active,$_companyId,$_userDisplayName = NULL)
    {
        parent::__construct(array('UserId'=>$_userId,'Active'=>$_active,'CompanyId'=>$_companyId,'UserDisplayName'=>$_userDisplayName),false);
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
     * Get Active value
     * @return boolean
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param boolean $_active the Active
     * @return boolean
     */
    public function setActive($_active)
    {
        return ($this->Active = $_active);
    }
    /**
     * Get CompanyId value
     * @return long
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }
    /**
     * Set CompanyId value
     * @param long $_companyId the CompanyId
     * @return long
     */
    public function setCompanyId($_companyId)
    {
        return ($this->CompanyId = $_companyId);
    }
    /**
     * Get UserDisplayName value
     * @return string|null
     */
    public function getUserDisplayName()
    {
        return $this->UserDisplayName;
    }
    /**
     * Set UserDisplayName value
     * @param string $_userDisplayName the UserDisplayName
     * @return string
     */
    public function setUserDisplayName($_userDisplayName)
    {
        return ($this->UserDisplayName = $_userDisplayName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructUser
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
