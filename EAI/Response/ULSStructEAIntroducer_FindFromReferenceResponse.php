<?php
/**
 * File for class ULSStructEAIntroducer_FindFromReferenceResponse
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSStructEAIntroducer_FindFromReferenceResponse originally named EAIntroducer_FindFromReferenceResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSStructEAIntroducer_FindFromReferenceResponse extends ULSWsdlClass
{
    /**
     * The EAIntroducer_FindFromReferenceResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ULSStructEAIntroducer_FindFromReferenceResult
     */
    public $EAIntroducer_FindFromReferenceResult;
    /**
     * Constructor method for EAIntroducer_FindFromReferenceResponse
     * @see parent::__construct()
     * @param ULSStructEAIntroducer_FindFromReferenceResult $_eAIntroducer_FindFromReferenceResult
     * @return ULSStructEAIntroducer_FindFromReferenceResponse
     */
    public function __construct($_eAIntroducer_FindFromReferenceResult = NULL)
    {
        parent::__construct(array('EAIntroducer_FindFromReferenceResult'=>$_eAIntroducer_FindFromReferenceResult),false);
    }
    /**
     * Get EAIntroducer_FindFromReferenceResult value
     * @return ULSStructEAIntroducer_FindFromReferenceResult|null
     */
    public function getEAIntroducer_FindFromReferenceResult()
    {
        return $this->EAIntroducer_FindFromReferenceResult;
    }
    /**
     * Set EAIntroducer_FindFromReferenceResult value
     * @param ULSStructEAIntroducer_FindFromReferenceResult $_eAIntroducer_FindFromReferenceResult the EAIntroducer_FindFromReferenceResult
     * @return ULSStructEAIntroducer_FindFromReferenceResult
     */
    public function setEAIntroducer_FindFromReferenceResult($_eAIntroducer_FindFromReferenceResult)
    {
        return ($this->EAIntroducer_FindFromReferenceResult = $_eAIntroducer_FindFromReferenceResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ULSWsdlClass::__set_state()
     * @uses ULSWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ULSStructEAIntroducer_FindFromReferenceResponse
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
