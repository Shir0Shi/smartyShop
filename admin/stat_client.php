<?php
require_once "header.php";
$smarty_stat = new Smarty();
$query = "SELECT id, name, email, phone , sum(relationorder.amount) AS sum_item 
          FROM client 
          INNER JOIN relationorder ON client.id = relationorder.id_client 
          GROUP BY client.id ORDER BY sum(relationorder.amount) DESC";
$result = mysqli_query($dbc, $query) or die ("Query sel error");
$client = [];
$num = 1;
while($row = mysqli_fetch_array($result))
{
    $client[] = array("id"=>$row['id'], "name"=>$row['name'], "email"=>$row['email'], "phone"=>$row['phone'], "sum"=>$row['sum_item']);
}
$smarty_stat->assign("client", $client);
$smarty_stat->assign("num", $num);
$content = $smarty_stat->fetch("stat_client.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");