<?php
require_once "header.php";
$title = "Delete category";
//print_r($_POST);
if(!isset($_POST['send'])&& isset($_GET['id'],$_GET['name']) && !empty($_GET['id']) && !empty($_GET['name']))
{
    $smarty_cat = new Smarty();

      $query2 = "SELECT id,name, photo FROM items WHERE cat_id=".$_GET['id'];
      $result2 = mysqli_query($dbc, $query2)or die("Query error");
      $table_row = array();
      $num = 1;
      while($row = mysqli_fetch_array($result2))
            {
                if(empty($row["photo"])) $row["photo"] = "no_photo.png";
                $table_row[] = array("id"=>$row["id"], "name"=>$row["name"], "photo"=>$row["photo"]);
            }
       $smarty_cat->assign("table_row", $table_row);
      $smarty_cat->assign("num", $num);
    $smarty_cat->assign("name", $_GET['name']);
    $smarty_cat->assign("id", $_GET['id']);
    $content = $smarty_cat->fetch("delete_cat.tpl");
}else if(isset($_POST['send'], $_POST["del"], $_POST['id'])
    && !empty($_POST['id'])  && $_POST['del']== "yes")
{
    $query = "DELETE FROM categories WHERE id='{$_POST['id']}'";
    $query1 = "DELETE FROM items WHERE cat_id='{$_POST['id']}'";
    mysqli_query($dbc, $query) or die("Query error");
    mysqli_query($dbc, $query1)or die("Query error");
    $content = "Successful deleted";
    //header("refresh: 2 url=index_cat.php");
}else if($_POST['del']=="no") header("refresh: 2 url=index_cat.php");
    else {
        $content = "Not enough info";
        header("refresh: 2 url=index_cat.php");
    }

$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");