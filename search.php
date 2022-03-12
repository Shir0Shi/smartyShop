<?php
require_once "header.php";
$page = "catalog";
$smarty_cat = new Smarty();
$query = "SELECT id,name, photo, price, amount FROM items ";
if(isset($_GET['search'])&&!empty($_GET['search']))
    $search1 = $_GET['search'];
$search= "";
$search = str_replace(",", " ", $search1);
$words = explode(" ", $search);
$final_words = array();
if(count($words)>0)
foreach ($words as $word)
{
    if(!empty($word)) {
        array_push($final_words, "name LIKE '%{$word}%'");
    }
}
$where_result = implode(" OR ", $final_words);
    if(!empty($where_result))
        $query.=" WHERE ".$where_result;
//$query = "SELECT id,name, photo, price, amount FROM items WHERE name LIKE '%{$_GET['search']}%'";
//echo $query;
$result = mysqli_query($dbc, $query) or die ("Query error");
$items = array();
$num=1;
while($row=mysqli_fetch_array($result))
{
    $items[]= array("id"=>$row['id'], "name"=>$row['name'], "photo"=>$row['photo'],
        "price"=>$row['price'], "amount"=>$row['amount']);
}
$smarty_cat->assign("items", $items);
$smarty_cat->assign("num", $num);
$content = $smarty_cat->fetch("search.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");