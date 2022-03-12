<?php
require_once "header.php";
$page = "catalog";

$smarty_list = new Smarty();
$records = 2;
if(isset($_GET['page']))
    $active_page = $_GET['page'];
else
    $active_page = 1;
$skip = ($active_page-1)*$records;
$query_list = "SELECT id FROM items";
$result_list = mysqli_query($dbc, $query_list) or die("Query list error");
$num_rows = mysqli_num_rows($result_list);
$p = ceil($num_rows/$records);

$smarty_list->assign("p", $p+1);
$smarty_list->assign("active_page", $active_page);


$query = "SELECT id, name,photo, amount, price FROM items LIMIT {$skip},{$records}";
$result = mysqli_query($dbc, $query) or die ("Query error");
$arr = array();
$num = 1;

while($row = mysqli_fetch_array($result))
{
    $arr[]= array("id"=>$row['id'], "name"=>$row['name'], "photo"=>$row['photo'], "amount"=>$row['amount'], "price"=>$row['price']);
}
$smarty_list->assign("arr", $arr);
$smarty_list->assign("num", $num);
$content = $smarty_list->fetch("listalka.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");