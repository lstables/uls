<?php
/**
 * File for class ULSEnumLoginResults
 * @package ULS
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * This class stands for ULSEnumLoginResults originally named LoginResults
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl}
 * @package ULS
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSEnumLoginResults extends ULSWsdlClass
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'FailedIncorrectLoginCredentials'
     * @return string 'FailedIncorrectLoginCredentials'
     */
    const VALUE_FAILEDINCORRECTLOGINCREDENTIALS = 'FailedIncorrectLoginCredentials';
    /**
     * Constant for value 'FailedSystemLocked'
     * @return string 'FailedSystemLocked'
     */
    const VALUE_FAILEDSYSTEMLOCKED = 'FailedSystemLocked';
    /**
     * Constant for value 'FailedSessionExpired'
     * @return string 'FailedSessionExpired'
     */
    const VALUE_FAILEDSESSIONEXPIRED = 'FailedSessionExpired';
    /**
     * Return true if value is allowed
     * @uses ULSEnumLoginResults::VALUE_SUCCESS
     * @uses ULSEnumLoginResults::VALUE_FAILEDINCORRECTLOGINCREDENTIALS
     * @uses ULSEnumLoginResults::VALUE_FAILEDSYSTEMLOCKED
     * @uses ULSEnumLoginResults::VALUE_FAILEDSESSIONEXPIRED
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(ULSEnumLoginResults::VALUE_SUCCESS,ULSEnumLoginResults::VALUE_FAILEDINCORRECTLOGINCREDENTIALS,ULSEnumLoginResults::VALUE_FAILEDSYSTEMLOCKED,ULSEnumLoginResults::VALUE_FAILEDSESSIONEXPIRED));
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
