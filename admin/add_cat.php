<?php
require_once "header.php";
$content = "";
if(!isset($_POST['send']))
{
    $smarty_add = new Smarty();
    $content = $smarty_add->fetch("add_cat.tpl");
}
else if(isset($_POST['send'], $_POST['name'])&& !empty($_POST['name']))
{
    $query = "INSERT INTO categories (name) VALUES ('{$_POST['name']}')";
    mysqli_query($dbc, $query) or die("Query error");
    $content = "Successful added";
    header("refresh: 2 url=add_cat.php");
}
else
{
    $content = "Not enough info to add";
}
$title = "Add categories";
$smarty_main->assign("title", $title);

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");