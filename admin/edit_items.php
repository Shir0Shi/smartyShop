<?php
require_once "header.php";
$title = "Edit items";
if(!isset($_POST['send'])&& isset($_GET['id'])&&!empty($_GET['id']))
{
    $smarty_item=new Smarty();
    $query = "SELECT name,price,photo, descrip, cat_id FROM items WHERE id='{$_GET['id']}'";
    $result=mysqli_query($dbc, $query) or die("Query error");
    $row = mysqli_fetch_array($result);
    $query2 = "SELECT id, name FROM categories";
    $result2= mysqli_query($dbc, $query2) or die("Query error");
    $cat = array();
    while($row2 = mysqli_fetch_array($result2))
    {
        $cat[] = array("id"=>$row2['id'], "name"=>$row2['name']);
    }
    $smarty_item->assign("name" ,$row['name']);
    $smarty_item->assign("price" ,$row['price']);
    $smarty_item->assign("descrip" ,$row['descrip']);
    $smarty_item->assign("photo" ,$row['photo']);
    $smarty_item->assign("cat_id" ,$row['cat_id']);
    $smarty_item->assign("id" ,$_GET['id']);

    $smarty_item->assign("cat", $cat);

    $content = $smarty_item->fetch("edit_items.tpl");
}else if(isset($_POST['send'], $_POST['new_name'],$_POST['new_descrip'], $_POST['new_price'], $_POST['id']) &&
!empty($_POST['new_name'])&& !empty($_POST['new_descrip'])&& !empty($_POST['new_price']))
{
    if($_FILES['new_photo']['error']==0)
    {
        if(isset($_POST['old_photo'])&& !empty($_POST['old_photo'])&& $_POST['old_photo']!="no_photo.png")
        {
            unlink("../images_item/{$_POST['old_photo']}");
        }
        $name_photo = time().$_FILES['new_photo']['name'];
        $tmp_name_photo = $_FILES['new_photo']['tmp_name'];
        move_uploaded_file($tmp_name_photo, "../images_item/$name_photo");
        $query3 = "UPDATE items SET name ='{$_POST['new_name']}', photo='{$name_photo}', descrip='{$_POST['new_descrip']}',
        price = '{$_POST['new_price']}', cat_id = '{$_POST['new_cat_id']}' WHERE id = '{$_POST['id']}'";
    } else
        $query3 = "UPDATE items SET name ='{$_POST['new_name']}', descrip='{$_POST['new_descrip']}',
        price = '{$_POST['new_price']}', cat_id = '{$_POST['new_cat_id']}' WHERE id = '{$_POST['id']}'";
    //echo $query3;
        mysqli_query($dbc, $query3) or die("Query error");

    $content="Successful edited";
    // $query3 = "UPDATE items SET name ='{$_POST['new_name']}'"
}
$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");