<?php
/**
 * File for class ULSServiceEAI
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSServiceEAI originally named EAI
 * @package ULS
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSServiceEAI extends ULSWsdlClass
{
    /**
     * Method to call the operation originally named EAIntroducer_FindFromReference
     * Documentation : Returns an introducer based on reference
     * @uses ULSWsdlClass::getSoapClient()
     * @uses ULSWsdlClass::setResult()
     * @uses ULSWsdlClass::saveLastError()
     * @param ULSStructEAIntroducer_FindFromReference $_uLSStructEAIntroducer_FindFromReference
     * @return ULSStructEAIntroducer_FindFromReferenceResponse
     */
    public function EAIntroducer_FindFromReference(ULSStructEAIntroducer_FindFromReference $_uLSStructEAIntroducer_FindFromReference)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->EAIntroducer_FindFromReference($_uLSStructEAIntroducer_FindFromReference));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ULSWsdlClass::getResult()
     * @return ULSStructEAIntroducer_FindFromReferenceResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
