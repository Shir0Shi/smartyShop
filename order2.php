<?php
require_once "header.php";

//print_r( $_POST);
if(isset($_SESSION['basket'])) {

    if(!isset($_POST['send'])) {
        $smarty_order = new Smarty();
        $num = 1;
        $items = [];
        $total_sum = 0;

        foreach ($_SESSION['basket'] as $item) {
            $cost = $item['price'] * $item['count'];
            $items[] = array("id" => $item['id'], "name" => $item['name'], "photo" => $item['photo'], "price" => $item['price'], "count" => $item['count'], "sum" => $cost);
            $total_sum += $cost;
        }
        if(isset($_GET['log'])&& $_GET['log']==1)
            $smarty_order->assign("user", 1);
        $smarty_order->assign("items", $items);
        $smarty_order->assign("total", $total_sum);
        $smarty_order->assign("num", $num);
        $content = $smarty_order->fetch("order2.tpl");
        $smarty_main->assign("content", $content);


    }
    else if(isset($_POST['send'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['note'], $_POST['pass'])
        && !empty($_POST['name'])&& !empty($_POST['phone'])&& !empty($_POST['email'])&& !empty($_POST['address'])&& !empty($_POST['pass'])
        && $_POST['pass']==$_POST['pass2'])
    {
        if(!empty($_POST['note']))
        $query = "INSERT INTO client (name, email, password, adress, note, phone)
                  VALUES ('{$_POST['name']}', '{$_POST['email']}', SHA1('{$_POST['pass']}'), '{$_POST['address']}', '{$_POST['note']}', '{$_POST['phone']}')";
        else
            $query = "INSERT INTO client (name, email, password, adress, phone)
                  VALUES ('{$_POST['name']}', '{$_POST['email']}', SHA1('{$_POST['pass']}'), '{$_POST['address']}', '{$_POST['phone']}')";
        //echo $query;
        mysqli_query($dbc, $query) or die("Query error of add");
        $id_client = mysqli_insert_id($dbc);
        foreach ($_SESSION['basket'] as $item)
        {
            $query2 = "INSERT INTO relationorder (id_client, id_item, amount, date_order)
                        VALUES ('{$id_client}', '{$item['id']}', '{$item['count']}', now())";
            mysqli_query($dbc, $query2) or die("Query 2 error");
        }
        $content = "Thank you for your order<br>Operator will call you soon";
        unset($_SESSION['basket']);
        header("refresh:3; url=catalog.php");
    }else if (isset($_POST['send'], $_POST['email'], $_POST['pass'], $_POST['log2'])&& !empty($_POST['email']) && !empty($_POST['pass']))
    {
        $query = "SELECT id FROM client WHERE email = '{$_POST['email']}' AND password = SHA1('{$_POST['pass']}')";
        echo $query;
        $result = mysqli_query($dbc, $query) or die("Query error");
        if(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_array($result);
            foreach ($_SESSION['basket'] as $item) {
                $query2 = "INSERT INTO relationorder (id_client, id_item, amount, date_order)
                        VALUES ('{$row['id']}', '{$item['id']}', '{$item['count']}', now())";
                mysqli_query($dbc, $query2) or die("Query2 error");
            }
            $content = "Thank you for your order<br>Operator will call you soon";
            unset($_SESSION['basket']);
            header("refresh:3; url=catalog.php");
        }else
        {
            $content = "There is no user with this email or you enter wrong password";
            header("refresh: 3; url=order2.php");
        }

    }
}
$page = "Catalog";
//$smarty_main->assign("page", $page);

require_once "main.php";