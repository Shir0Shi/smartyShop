<?php
session_start();
if(isset($_GET['id'],$_GET['b_mode'])&& !empty($_GET['id'])&& $_GET['b_mode']=="add")
{
   $exist = false;
   if(!isset($_SESSION['basket']))
   {
        $_SESSION['basket'] = array();
   }
   if(count($_SESSION['basket'])>0)
   {
       for ($i = 0; $i < count($_SESSION); $i++)
       if($_SESSION['basket'][$i]['id'] == $_GET['id'])
       {
           $_SESSION['basket'][$i]['count']++;
           $exist = true;
           break;
       }
   }
   if(!$exist)
   {
       require_once "admin/param.php";
       $query = "SELECT  name, photo, price FROM items WHERE id='{$_GET['id']}'";
       $result = mysqli_query($dbc, $query) or die("Query error");
       $row = mysqli_fetch_array($result);
       if(empty($row['photo'])) $row['photo']="no_photo.png";
       $_SESSION['basket'][] = array("id"=>$_GET['id'], "name"=>$row['name'], "photo"=>$row['photo'], "price"=>$row['price'], "count"=>1);
   }
}
if(isset($_GET['b_mode'])&&$_GET['b_mode']=="clean")
{
    if(isset($_SESSION['basket']))
    {
        unset($_SESSION['basket']);
    }
    $_SESSION['basket']=array();
}
if(isset($_GET['id'],$_GET['b_mode'])&&!empty($_GET['id'])&&$_GET['b_mode']=="del")
{
    $arr = [];
    for($i=0; $i<count($_SESSION['basket']); $i++)
    {
        if($_SESSION['basket'][$i]['id']!=$_GET['id'])
        {
            $arr[] = $_SESSION['basket'][$i];
        }
    }
    unset($_SESSION['basket']);
    $_SESSION['basket'] = [];
    $_SESSION['basket'] = $arr;
    unset($arr);
}
if(isset($_GET['page'])&&!empty($_GET['page']))
   // print_r($_SESSION['basket']);
header("location: catalog.php?page={$_GET['page']}");
else header("location: catalog.php");
//print_r("success2");