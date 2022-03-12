<?php
require_once "header.php";
$smarty_unstat = new Smarty();
$query = "SELECT id, name, email, phone FROM client
          LEFT JOIN relationorder ON client.id=relationorder.id_client 
          WHERE relationorder.id_client IS NULL";
$result = mysqli_query($dbc, $query) or die("Query 111 error");
$num = 1;
$client = [];
while($row = mysqli_fetch_array($result))
{
    $client[] = array("id"=>$row['id'], "name"=>$row['name'], "email"=>$row['email'], "phone"=>$row['phone']);
}
$smarty_unstat->assign("num", $num);
$smarty_unstat->assign("client", $client);
$content = $smarty_unstat->fetch("unstat.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");