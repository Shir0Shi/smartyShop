<?php
require_once "header.php";
$title= "Edit category";
if(!isset($_POST['send'])&& isset($_GET['id'])&&!empty($_GET['id']))
{
    $smarty_cat= new Smarty();
    $smarty_cat->assign("id", $_GET['id']);
    $content=$smarty_cat->fetch("edit_cat.tpl");
}else if(isset($_POST['send'],$_POST['name'],$_POST['id'])&&!empty($_POST['name']))
{
    $query = "UPDATE categories SET name='{$_POST['name']}'WHERE id='{$_POST['id']}'";
    mysqli_query($dbc,$query) or die("Query error");
    $content = "Successful updated";
    header("refresh: 2 url=index_cat.php");
}else $content="Not enough info";
$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");