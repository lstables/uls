<?php
/**
 * File for the class which returns the class map definition
 * @package ULS
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
/**
 * Class which returns the class map definition by the static method ULSClassMap::classMap()
 * @package ULS
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-10-18
 */
class ULSClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'EAIntroducer_FindFromReference' => 'ULSStructEAIntroducer_FindFromReference',
  'EAIntroducer_FindFromReferenceResponse' => 'ULSStructEAIntroducer_FindFromReferenceResponse',
  'EAIntroducer_FindFromReferenceResult' => 'ULSStructEAIntroducer_FindFromReferenceResult',
  'EAUser_ChangePassword' => 'ULSStructEAUser_ChangePassword',
  'EAUser_ChangePasswordResponse' => 'ULSStructEAUser_ChangePasswordResponse',
  'EAUser_FindFromUserCode' => 'ULSStructEAUser_FindFromUserCode',
  'EAUser_FindFromUserCodeResponse' => 'ULSStructEAUser_FindFromUserCodeResponse',
  'EAUser_Login' => 'ULSStructEAUser_Login',
  'EAUser_LoginResponse' => 'ULSStructEAUser_LoginResponse',
  'LoginResults' => 'ULSEnumLoginResults',
  'ProxyUser_Login' => 'ULSStructProxyUser_Login',
  'ProxyUser_LoginResponse' => 'ULSStructProxyUser_LoginResponse',
  'Session' => 'ULSStructSession',
  'Session_End' => 'ULSStructSession_End',
  'Session_EndResponse' => 'ULSStructSession_EndResponse',
  'Session_GetDetails' => 'ULSStructSession_GetDetails',
  'Session_GetDetailsResponse' => 'ULSStructSession_GetDetailsResponse',
  'Session_Start' => 'ULSStructSession_Start',
  'Session_StartResponse' => 'ULSStructSession_StartResponse',
  'User' => 'ULSStructUser',
  'User_CreateEAUser' => 'ULSStructUser_CreateEAUser',
  'User_CreateEAUserResponse' => 'ULSStructUser_CreateEAUserResponse',
  'User_FindFromLoginCredentials' => 'ULSStructUser_FindFromLoginCredentials',
  'User_FindFromLoginCredentialsResponse' => 'ULSStructUser_FindFromLoginCredentialsResponse',
  'User_Login' => 'ULSStructUser_Login',
  'User_LoginResponse' => 'ULSStructUser_LoginResponse',
  'User_Logout' => 'ULSStructUser_Logout',
  'User_LogoutResponse' => 'ULSStructUser_LogoutResponse',
);
    }
}
