<?php
require_once "header.php";
$smarty_arch = new Smarty();
$query = "SELECT client.name, email, adress, note, phone, relationorder.id_client, relationorder.amount,
          relationorder.date_order, items.name AS item_name, photo, price FROM client 
          INNER JOIN relationorder ON client.id = relationorder.id_client
          INNER JOIN items ON relationorder.id_item = items.id WHERE relationorder.status = 1
          ORDER BY relationorder.id_client ASC, relationorder.date_order DESC";
$result = mysqli_query($dbc, $query) or die("Query 1 error");
$change_client = 0;
$total = 0;
$num = 1;
$row_item = 0;
$items = [];
while($row = mysqli_fetch_array($result))
{
    if(empty($row['photo'])) $row['photo'] = "no_photo.png";
    if($change_client != $row['id_client'])
    {
        $row_item = 1;
        $total = 0;
        $query2 = "SELECT id_item FROM relationorder WHERE id_client = '{$row['id_client']}'";
        $result2 = mysqli_query($dbc, $query2) or die("Query 2 error");
        $count_rows = mysqli_num_rows($result2);
    }
    $sum = $row['price']*$row['amount'];
    $total+=$sum;
    $items[] = array("name"=>$row['name'],"email"=>$row['email'],"address"=>$row['adress'],"note"=>$row['note'],
        "phone"=>$row['phone'], "id_cl"=>$row['id_client'],"date"=>$row['date_order'], "it_name"=>$row['item_name'],
        "photo"=>$row['photo'], "price"=>$row['price'], "amount"=>$row['amount'], "sum"=>$sum, "total"=>$total,
        "row_it"=>$row_item, "count_row"=>$count_rows, "change_client"=>$change_client);
    $row_item++;
    if($change_client != $row['id_client'])
    {
        $change_client = $row['id_client'];
    }
}
$smarty_arch->assign("items", $items);
$smarty_arch->assign("num", $num);

$content = $smarty_arch->fetch("archive.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");