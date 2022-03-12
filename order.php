<?php
require_once "header.php";
$page = "catalog";
if(isset($_SESSION['basket']))
{
    if(isset($_POST['send']))
    {
        for($i=0; $i<count($_SESSION['basket']); $i++)
        {
            $nameEl = "count".$_SESSION['basket'][$i]['id'];
            $_SESSION['basket'][$i]['count']= $_POST[$nameEl];
        }
    }
    $totalsum = 0;
    $num = 1;
    $smarty_order = new Smarty();
    $basket = [];
    foreach ($_SESSION['basket'] as $item)
    {
        $sum = $item['price']*$item['count'];
        $query = "SELECT amount FROM items";
        $result = mysqli_query($dbc, $query) or die("Query error");
        $row = mysqli_fetch_array($result);
        $basket[] = array("sum"=>$sum,"id"=>$item['id'], "name"=>$item['name'], "photo"=>$item['photo'], "price"=>$item['price'], "count"=>$item['count'], "max"=>$row['amount']);
        $totalsum +=$sum;
    }
$smarty_order->assign("total", $totalsum);
    $smarty_order->assign("items",$basket);
    $smarty_order->assign("num", $num);
    $content = $smarty_order->fetch("order.tpl");
    $smarty_main->assign("content", $content);
}
$smarty_main->assign("page",$page);
require_once "main.php";