<?php
require_once "header.php";
if(isset($_SESSION['user_id'],$_SESSION['user_name'], $_SESSION['user_rights'])) {

    $smarty_main->assign("user_name", $_SESSION['user_name']);
    $smarty_main->assign("user_photo", $_SESSION['user_photo']);
    $smarty_main->assign("user_rights", $_SESSION['user_rights']);
    $title = "Main page admin part";
    $content = "Select menu position to use";
    $smarty_main->assign("title", $title);
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else
    {
    header("location: ../404.html");
}