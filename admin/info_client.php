<?php
require_once "header.php";
if(isset($_GET['id'])&& !empty($_GET['id']))
{
    $smarty_info = new Smarty();
    $query = "SELECT  name, email, adress, phone FROM client WHERE id='{$_GET['id']}'";
    $result = mysqli_query($dbc, $query) or die("Query sel error");
    $query2 = "SELECT name, photo, descrip, price, relationorder.amount AS rel_amount, date_order FROM items INNER JOIN relationorder ON items.id = relationorder.id_item WHERE id_client='{$_GET['id']}'";
    echo $query2;
    $result2 = mysqli_query($dbc, $query2) or die("Query 2 error");
    $items = [];
    $sum = 0;
    $total = 0;
    while($row2 = mysqli_fetch_array($result2))
    {
        $sum=$row2['price']*$row2['rel_amount'];
        $total +=$sum;
        if(empty($row2['photo'])) $row2['photo'] = "no_photo.png";
        $items[] = array("name"=>$row2['name'], "photo"=>$row2['photo'], "price"=>$row2['price'], "descrip" => $row2['descrip'],
            "amount"=>$row2['rel_amount'], "date"=>$row2['date_order'], "sum"=>$sum);
    }

    $row = mysqli_fetch_array($result);
    $smarty_info->assign("items", $items);
    $smarty_info->assign("total", $total);
    $smarty_info->assign("name", $row['name']);
    $smarty_info->assign("email", $row['email']);
    $smarty_info->assign("address", $row['adress']);
    $smarty_info->assign("phone", $row['phone']);
    $content = $smarty_info->fetch("info_client.tpl");
    $smarty_main->assign("content", $content);
}
$smarty_main->display("main.tpl");