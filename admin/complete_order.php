<?php
if(isset($_GET['id_cl'])&& !empty($_GET['id_cl']))
{
    require_once "header.php";
    $query = "UPDATE relationorder SET relationorder.status = 1 WHERE id_client = '{$_GET['id_cl']}'";
    mysqli_query($dbc, $query) or die ("Query error 1");
    $query2 = "SELECT id_item, amount FROM relationorder WHERE id_client = '{$_GET['id_cl']}'";
    $result = mysqli_query($dbc, $query2) or die ("Query error 2");
    while($row = mysqli_fetch_array($result))
    {
        $query3 = "UPDATE items SET amount=amount-{$row['amount']} WHERE id = '{$row['id_item']}'";
        mysqli_query($dbc, $query3) or die("query error 3");
    }
}
header("location: admin_order.php");