<?php
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient=new Google_Client();
$gClient->setClientId("377654877204-mhs9ikkgr1u6vkd5q8hc3moknlom5umf.apps.googleusercontent.com");

$gClient->setClientSecret("qsHLpNTdpUVpjKAr5OwRsTEX");

$gClient->setApplicationName("GOOGLE LOGIN");
$gClient->setRedirectUri("http://localhost/app/php/studentview2.php");
$gClient->addScope( "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email" );

?>