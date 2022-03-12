<?php
require_once "header.php";
$title = "Edit order";
$content = "";
$query = "SELECT client.name, email, adress, note, phone, relationorder.id_client, relationorder.amount, relationorder.date_order,
          items.name AS item_name, photo, price FROM client INNER JOIN relationorder ON client.id = relationorder.id_client
          INNER JOIN items ON relationorder.id_item = items.id WHERE relationorder.status = 0
          ORDER BY relationorder.id_client ASC, relationorder.date_order DESC ";
$result = mysqli_query($dbc, $query) or die("Query error");
$num = 1;
$change_client = 0;
$total = 0;
$row_item = 0;
$items = [];
$smart_order = new Smarty();
while ($row = mysqli_fetch_array($result))
{
    $sum = $row['price']*$row['amount'];
    if($change_client != $row['id_client'])
    {
        $total = 0;
        $row_item = 1;
        $query_it = "SELECT id_item FROM relationorder WHERE id_client='{$row['id_client']}'";
        $result_it = mysqli_query($dbc, $query_it) or die("Error 1");
        $count_rows = mysqli_num_rows($result_it);
        //echo  $query_it;
    }
    $total+=$sum;
    if(empty($row['photo'])) $row['photo'] = "no_photo.png";
    $items[] = array("name"=>$row['name'],"email"=>$row['email'],"address"=>$row['adress'],"note"=>$row['note'],
        "phone"=>$row['phone'], "id_cl"=>$row['id_client'],"date"=>$row['date_order'], "it_name"=>$row['item_name'],
        "photo"=>$row['photo'], "price"=>$row['price'], "amount"=>$row['amount'], "sum"=>$sum, "total"=>$total,
        "row_it"=>$row_item, "count_row"=>$count_rows, "change_client"=>$change_client);

    $row_item++;
    if($change_client != $row['id_client'])
    $change_client = $row['id_client'];
}
//print_r($items);
$smart_order->assign("items", $items);
$smart_order->assign("num", $num);


$content = $smart_order->fetch("admin_order.tpl");
$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");