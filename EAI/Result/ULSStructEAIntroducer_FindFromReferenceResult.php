<?php
/**
 * File for class ULSStructEAIntroducer_FindFromReferenceResult
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructEAIntroducer_FindFromReferenceResult originally named EAIntroducer_FindFromReferenceResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructEAIntroducer_FindFromReferenceResult extends ULSWsdlClass
{
    /**
     * The Found
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $Found;
    /**
     * The IntroducerId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $IntroducerId;
    /**
     * The RegistrationIntroducerId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $RegistrationIntroducerId;
    /**
     * Constructor method for EAIntroducer_FindFromReferenceResult
     * @see parent::__construct()
     * @param boolean $_found
     * @param long $_introducerId
     * @param long $_registrationIntroducerId
     * @return ULSStructEAIntroducer_FindFromReferenceResult
     */
    public function __construct($_found,$_introducerId,$_registrationIntroducerId)
    {
        parent::__construct(array('Found'=>$_found,'IntroducerId'=>$_introducerId,'RegistrationIntroducerId'=>$_registrationIntroducerId),false);
    }
    /**
     * Get Found value
     * @return boolean
     */
    public function getFound()
    {
        return $this->Found;
    }
    /**
     * Set Found value
     * @param boolean $_found the Found
     * @return boolean
     */
    public function setFound($_found)
    {
        return ($this->Found = $_found);
    }
    /**
     * Get IntroducerId value
     * @return long
     */
    public function getIntroducerId()
    {
        return $this->IntroducerId;
    }
    /**
     * Set IntroducerId value
     * @param long $_introducerId the IntroducerId
     * @return long
     */
    public function setIntroducerId($_introducerId)
    {
        return ($this->IntroducerId = $_introducerId);
    }
    /**
     * Get RegistrationIntroducerId value
     * @return long
     */
    public function getRegistrationIntroducerId()
    {
        return $this->RegistrationIntroducerId;
    }
    /**
     * Set RegistrationIntroducerId value
     * @param long $_registrationIntroducerId the RegistrationIntroducerId
     * @return long
     */
    public function setRegistrationIntroducerId($_registrationIntroducerId)
    {
        return ($this->RegistrationIntroducerId = $_registrationIntroducerId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructEAIntroducer_FindFromReferenceResult
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
