<?php
session_start();

session_destroy();
header('location:http://localhost/app/html/login.php');
?>