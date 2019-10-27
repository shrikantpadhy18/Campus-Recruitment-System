<?php
require_once "config.php";
if(isset($_GET['code']))
{

  $token=$gClient->fetchAccessTokenWithAuthCode($_GET['code']);
  $_SESSION['access_token']=$token;







}
$oAuth=new Google_Service_Oauth2($gClient);
$userData=$oAuth->userinfo_v2_me->get();

echo "<pre>";

var_dump($userData);

?>