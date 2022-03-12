<?php
if(isset($_GET['id'])&& !empty($_GET['id']))
{
    require_once "param.php";
    $query = "UPDATE relationorder SET relationorder.status = 0 WHERE id_client = '{$_GET['id']}'";
    mysqli_query($dbc, $query) or die("Query recover error");
    $query2 = "SELECT id_item, amount FROM relationorder WHERE id_client = '{$_GET['id']}'";
    $result = mysqli_query($dbc, $query2) or die("Query sel error");
    while($row = mysqli_fetch_array($result))
    {
        $query3 = "UPDATE items SET amount = amount + {$row['amount']} WHERE id = '{$row['id_item']}'";
        mysqli_query($dbc, $query3) or die("Query 3 error");
    }
}
header("location: admin_order.php");