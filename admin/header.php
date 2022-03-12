<?php
session_start();
define("SMARTY_LIB", "../libs/");
require_once SMARTY_LIB."Smarty.class.php";
$smarty_main = new Smarty();
require_once "param.php";
if(isset($_COOKIE['user_id'],$_COOKIE['user_name'], $_COOKIE['user_photo'], $_COOKIE['user_rights']))
{
    $_SESSION['user_id']= $_COOKIE['user_id'];
    $_SESSION['user_name']= $_COOKIE['user_name'];
    $_SESSION['user_photo']= $_COOKIE['user_photo'];
    $_SESSION['user_rights']= $_COOKIE['user_rights'];
}