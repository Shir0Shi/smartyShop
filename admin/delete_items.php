<?php
require_once "header.php";
$title= "Deleting item";
if(!isset($_POST['send'])&& isset($_GET['id'],$_GET['name'])&& !empty($_GET['id'])&& !empty($_GET['name']))
{
    $smarty_item = new Smarty();
    $smarty_item->assign("name", $_GET['name']);
    $smarty_item->assign("id", $_GET['id']);
    $content=$smarty_item->fetch("delete_items.tpl");
}else if(isset($_POST['send'],$_POST['del'], $_POST['id'])&& !empty($_POST['id'])&& $_POST['del']=="yes")
{
    $query2 = "SELECT photo FROM items WHERE id='{$_POST['id']}'";
    $result=mysqli_query($dbc, $query2) or die("Query2 error");
    $row= mysqli_fetch_array($result);
    if(!empty($row['photo']))
    unlink("../images_item/{$row['photo']}");
    $query = "DELETE FROM items WHERE id='{$_POST['id']}'";
    mysqli_query($dbc, $query) or die("Query error");

    $content="Successful delete";
    header("refresh: 2 url=index_item.php");
}else
{
    $content= "Not enough info";
    header("refresh: 2 url=index_item.php");
}
$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");