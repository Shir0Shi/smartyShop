<?php
require_once "header.php";
$title = "Add items";
if(!isset($_POST['send']))
{
    $smarty_itemsadd = new Smarty();
    $query = "SELECT id, name FROM categories";
    $result = mysqli_query($dbc, $query) or die("Query error");
    $cat = array();
    while($row = mysqli_fetch_array($result))
    {
        $cat[] = array("id"=>$row['id'], "name"=>$row['name']);
    }
    $smarty_itemsadd->assign("cat", $cat);
    $content = $smarty_itemsadd->fetch("add_item.tpl");

}else if(isset($_POST['send'], $_POST['name'], $_POST['descrip'], $_POST['price'], $_POST['cat_id'], $_POST['amount']) && !empty($_POST['name']) &&
!empty($_POST['descrip']) && !empty($_POST['price']) && !empty($_POST['amount']))
{
  if($_FILES['photo']['error']==0)
  {
      $name = time().$_FILES['photo']['name'];
      $name_tmp = $_FILES['photo']['tmp_name'];
      move_uploaded_file($name_tmp, "../images_item/$name");
      $query = "INSERT INTO items (name, photo, descrip, price, cat_id, amount) 
                VALUES ('{$_POST['name']}', '{$name}', '{$_POST['descrip']}', '{$_POST['price']}', '{$_POST['cat_id']}', '{$_POST['amount']}')";

  } else
      $query = "INSERT INTO items (name, descrip, price, cat_id, amount) 
                VALUES ('{$_POST['name']}', '{$_POST['descrip']}', '{$_POST['price']}', '{$_POST['cat_id']}'), '{$_POST['amount']}'";
  //echo $query;
  mysqli_query($dbc, $query) or die("Query error");
  $content = "Successful added";
  header("refresh: 2 url=add_item.php");
}else
{
    $content= "Not enough info to add";
}
$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");