<?php
require_once "header.php";
$page = "catalog";
if(isset($_GET['id'])&& !empty($_GET['id']))
{
    $smarty_info = new Smarty();
    $query = "SELECT name, photo, descrip, price, cat_id, amount FROM items WHERE id ='{$_GET['id']}'";
    $result = mysqli_query($dbc, $query) or die("Query error");
    $row = mysqli_fetch_array($result);

    $query_cat = "SELECT name FROM categories WHERE id ='{$row['cat_id']}'";
    $result_cat = mysqli_query($dbc, $query_cat) or die("Query cat error");
    $row_cat = mysqli_fetch_array($result_cat);
    $row['cat_id'] = $row_cat['name'];
    $smarty_info->assign("row", $row);
    $content = $smarty_info->fetch("info.tpl");
    $smarty_main->assign("content", $content);
}else $content = "Not enough info to output";
require_once "main.php";