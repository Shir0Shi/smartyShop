<?php
require_once "header.php";
$title = "Direct items";
$smarty_item = new Smarty();
if(isset($_POST['cat_id']) && !empty($_POST['cat_id']))
{
    $smarty_item->assign("cat_id", $_POST['cat_id']);
    $query = "SELECT id,name, photo FROM items WHERE cat_id=".$_POST['cat_id'];
}else
    $query = "SELECT id, name, photo FROM items";
$result = mysqli_query($dbc, $query)or die("Query error");
$table_row = array();
$num = 1;
while($row = mysqli_fetch_array($result))
{
    if(empty($row["photo"])) $row["photo"] = "no_photo.png";
    $table_row[] = array("id"=>$row["id"], "name"=>$row["name"], "photo"=>$row["photo"]);
}
$query1 = "SELECT id,name FROM categories";
$result1 = mysqli_query($dbc, $query1) or die("Query error");
$cat = array();
while($row = mysqli_fetch_array($result1))
{
    $cat[] = array("id"=>$row["id"], "name"=>$row["name"]);
}
$smarty_item->assign("cat", $cat);

$smarty_item->assign("table_row", $table_row);
$smarty_item->assign("num", $num);
$content = $smarty_item->fetch("index_item.tpl");
$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");