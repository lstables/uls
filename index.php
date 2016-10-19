<?php
session_start();

include('ULSAutoload.php');


$uLSServiceSession_ = new ULSServiceSession_();
// sample call for ULSServiceSession_::Session_Start()
if($uLSServiceSession_->Session_Start(new ULSStructSession_Start('BeaumontLegalCWSAuthUser34', 'HIjJveTA4j'))) {
    var_dump($uLSServiceSession_->getResult());
}
else {
    var_dump($uLSServiceSession_->getLastError());
}

$uLSServiceEAU = new ULSServiceEAU();

if($uLSServiceEAU->EAUser_FindFromUserCode(new ULSStructEAUser_FindFromUserCode('2700deab-45f5-43c2-af94-a3fd1d1ceec9', 'BEAUL001')))
    print_r($uLSServiceEAU);
else
    print_r($uLSServiceEAU->getLastError());
