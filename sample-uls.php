<?php
/**
 * Test with ULS for 'https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl'
 * @package ULS
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/ULSAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a ULSWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[ULSWsdlClass::WSDL_URL] = 'https://ekacws.utdgroup.com/v1_08/security.asmx?wsdl';
 * $wsdl[ULSWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[ULSWsdlClass::WSDL_TRACE] = true;
 * $wsdl[ULSWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[ULSWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new ULSWsdlClass($wsdl);
 */
/**
 * Examples
 */


/***************************
 * Example for ULSServiceEAU
 */
$uLSServiceEAU = new ULSServiceEAU();
// sample call for ULSServiceEAU::EAUser_ChangePassword()
if($uLSServiceEAU->EAUser_ChangePassword(new ULSStructEAUser_ChangePassword(/*** update parameters list ***/)))
    print_r($uLSServiceEAU->getResult());
else
    print_r($uLSServiceEAU->getLastError());
// sample call for ULSServiceEAU::EAUser_Login()
if($uLSServiceEAU->EAUser_Login(new ULSStructEAUser_Login(/*** update parameters list ***/)))
    print_r($uLSServiceEAU->getResult());
else
    print_r($uLSServiceEAU->getLastError());
// sample call for ULSServiceEAU::EAUser_FindFromUserCode()
if($uLSServiceEAU->EAUser_FindFromUserCode(new ULSStructEAUser_FindFromUserCode(/*** update parameters list ***/)))
    print_r($uLSServiceEAU->getResult());
else
    print_r($uLSServiceEAU->getLastError());

/***************************
 * Example for ULSServiceEAI
 */
$uLSServiceEAI = new ULSServiceEAI();
// sample call for ULSServiceEAI::EAIntroducer_FindFromReference()
if($uLSServiceEAI->EAIntroducer_FindFromReference(new ULSStructEAIntroducer_FindFromReference(/*** update parameters list ***/)))
    print_r($uLSServiceEAI->getResult());
else
    print_r($uLSServiceEAI->getLastError());

/*****************************
 * Example for ULSServiceUser_
 */
$uLSServiceUser_ = new ULSServiceUser_();
// sample call for ULSServiceUser_::User_CreateEAUser()
if($uLSServiceUser_->User_CreateEAUser(new ULSStructUser_CreateEAUser(/*** update parameters list ***/)))
    print_r($uLSServiceUser_->getResult());
else
    print_r($uLSServiceUser_->getLastError());
// sample call for ULSServiceUser_::User_Login()
if($uLSServiceUser_->User_Login(new ULSStructUser_Login(/*** update parameters list ***/)))
    print_r($uLSServiceUser_->getResult());
else
    print_r($uLSServiceUser_->getLastError());
// sample call for ULSServiceUser_::User_FindFromLoginCredentials()
if($uLSServiceUser_->User_FindFromLoginCredentials(new ULSStructUser_FindFromLoginCredentials(/*** update parameters list ***/)))
    print_r($uLSServiceUser_->getResult());
else
    print_r($uLSServiceUser_->getLastError());
// sample call for ULSServiceUser_::User_Logout()
if($uLSServiceUser_->User_Logout(new ULSStructUser_Logout(/*** update parameters list ***/)))
    print_r($uLSServiceUser_->getResult());
else
    print_r($uLSServiceUser_->getLastError());

/********************************
 * Example for ULSServiceSession_
 */
$uLSServiceSession_ = new ULSServiceSession_();
// sample call for ULSServiceSession_::Session_Start()
if($uLSServiceSession_->Session_Start(new ULSStructSession_Start(/*** update parameters list ***/)))
    print_r($uLSServiceSession_->getResult());
else
    print_r($uLSServiceSession_->getLastError());
// sample call for ULSServiceSession_::Session_GetDetails()
if($uLSServiceSession_->Session_GetDetails(new ULSStructSession_GetDetails(/*** update parameters list ***/)))
    print_r($uLSServiceSession_->getResult());
else
    print_r($uLSServiceSession_->getLastError());
// sample call for ULSServiceSession_::Session_End()
if($uLSServiceSession_->Session_End(new ULSStructSession_End(/*** update parameters list ***/)))
    print_r($uLSServiceSession_->getResult());
else
    print_r($uLSServiceSession_->getLastError());

/*****************************
 * Example for ULSServiceProxy
 */
$uLSServiceProxy = new ULSServiceProxy();
// sample call for ULSServiceProxy::ProxyUser_Login()
if($uLSServiceProxy->ProxyUser_Login(new ULSStructProxyUser_Login(/*** update parameters list ***/)))
    print_r($uLSServiceProxy->getResult());
else
    print_r($uLSServiceProxy->getLastError());
