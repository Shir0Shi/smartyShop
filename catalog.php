<?php
require_once "header.php";
$page = "catalog";
$smarty_catalog = new Smarty();
$records = 5;
if(isset($_GET['page']))
    $active_page = $_GET['page'];
else
    $active_page = 1;

switch ($_GET['sort'])
{
    case "ASC": $sort = "DESC";
        break;
    case "DESC": $sort = "ASC";
        break;
    default: $sort = "ASC";
        break;
}
if(isset($_GET['sort_by']))
{
    //$sort_by = $_GET['sort_by'];
    setcookie("sort_by", $_GET['sort_by']);
    $_COOKIE['sort_by'] = $_GET['sort_by'];
} else if( !isset($_GET['sort_by'])&& !isset($_COOKIE['sort_by']))
{
    setcookie("sort_by", "price");
}
$skip = ($active_page-1)*$records;
if(isset($_GET['id_cat']) && !empty($_GET['id_cat'])) $query_list = "SELECT id FROM items WHERE cat_id='{$_GET['id_cat']}'";
else $query_list = "SELECT id FROM items";
$result_list = mysqli_query($dbc, $query_list) or die("Query list error");
$num_rows = mysqli_num_rows($result_list);
$pages = ceil($num_rows/$records);


$smarty_catalog->assign("p", $pages+1);
$smarty_catalog->assign("active_page", $active_page);
$smarty_catalog->assign("count_pages", $pages);
$smarty_catalog->assign("sort", $sort);
if(isset($_GET['id_cat'])&& !empty($_GET['id_cat'])) {
    $smarty_catalog->assign("cat_id",$_GET['id_cat']);
    $query = "SELECT id, name, photo, price, amount FROM items  WHERE cat_id='{$_GET['id_cat']}' ORDER BY {$_COOKIE['sort_by']} {$sort} LIMIT {$skip},{$records}";
}
    else
$query = "SELECT id, name, photo, price, amount FROM items ORDER BY {$_COOKIE['sort_by']} {$sort} LIMIT {$skip},{$records}";
   // echo $query;
$result = mysqli_query($dbc, $query) or die("Query error");
$items = array();
$num = 1;
while ($row = mysqli_fetch_array($result))
{
    $items[] = array("id"=>$row['id'], "name"=>$row['name'], "photo" =>$row['photo'], "price"=>$row['price'], "amount"=>$row['amount']);
}
$smarty_catalog->assign("num", $num);
$smarty_catalog->assign("items", $items);
$content = $smarty_catalog->fetch("catalog.tpl");
require_once "main.php";