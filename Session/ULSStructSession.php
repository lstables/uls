<?php
/**
 * File for class ULSStructSession
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructSession originally named Session
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructSession extends ULSWsdlClass
{
    /**
     * The StartTimestamp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $StartTimestamp;
    /**
     * The EndTimestamp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $EndTimestamp;
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
     * The LoggedIn
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $LoggedIn;
    /**
     * The SID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SID;
    /**
     * The UserDisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserDisplayName;
    /**
     * Constructor method for Session
     * @see parent::__construct()
     * @param dateTime $_startTimestamp
     * @param dateTime $_endTimestamp
     * @param long $_userId
     * @param boolean $_active
     * @param boolean $_loggedIn
     * @param string $_sID
     * @param string $_userDisplayName
     * @return ULSStructSession
     */
    public function __construct($_startTimestamp,$_endTimestamp,$_userId,$_active,$_loggedIn,$_sID = NULL,$_userDisplayName = NULL)
    {
        parent::__construct(array('StartTimestamp'=>$_startTimestamp,'EndTimestamp'=>$_endTimestamp,'UserId'=>$_userId,'Active'=>$_active,'LoggedIn'=>$_loggedIn,'SID'=>$_sID,'UserDisplayName'=>$_userDisplayName),false);
    }
    /**
     * Get StartTimestamp value
     * @return dateTime
     */
    public function getStartTimestamp()
    {
        return $this->StartTimestamp;
    }
    /**
     * Set StartTimestamp value
     * @param dateTime $_startTimestamp the StartTimestamp
     * @return dateTime
     */
    public function setStartTimestamp($_startTimestamp)
    {
        return ($this->StartTimestamp = $_startTimestamp);
    }
    /**
     * Get EndTimestamp value
     * @return dateTime
     */
    public function getEndTimestamp()
    {
        return $this->EndTimestamp;
    }
    /**
     * Set EndTimestamp value
     * @param dateTime $_endTimestamp the EndTimestamp
     * @return dateTime
     */
    public function setEndTimestamp($_endTimestamp)
    {
        return ($this->EndTimestamp = $_endTimestamp);
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
     * Get LoggedIn value
     * @return boolean
     */
    public function getLoggedIn()
    {
        return $this->LoggedIn;
    }
    /**
     * Set LoggedIn value
     * @param boolean $_loggedIn the LoggedIn
     * @return boolean
     */
    public function setLoggedIn($_loggedIn)
    {
        return ($this->LoggedIn = $_loggedIn);
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
     * @return ULSStructSession
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
