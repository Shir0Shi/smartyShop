<?php
require_once "header.php";
if(isset($_GET['id'])&& !empty($_GET['id']))
{
    $smarty_edit = new Smarty();
    $query = "SELECT meta_title, meta_keywords, meta_description, title, content, name FROM setting WHERE id='{$_GET['id']}'";
    $result = mysqli_query($dbc, $query) or die("Query error");
    $form_content = mysqli_fetch_array($result);
    $smarty_edit->assign("meta_title", $form_content['meta_title']);
    $smarty_edit->assign("meta_keywords", $form_content['meta_keywords']);
    $smarty_edit->assign("meta_description", $form_content['meta_description']);
    $smarty_edit->assign("title", $form_content['title']);
    $smarty_edit->assign("content", $form_content['content']);
    $smarty_edit->assign("name", $form_content['name']);
    $smarty_edit->assign("id", $_GET['id']);

    $content = $smarty_edit->fetch("edit_page.tpl");
}else if(isset($_POST['send'], $_POST['meta_title'], $_POST['meta_keywords'], $_POST['meta_description'], $_POST['title'],
   $_POST['content'], $_POST['name'], $_POST['id'])&& !empty($_POST['meta_title']) && !empty($_POST['meta_keywords']) &&
!empty($_POST['meta_description']) && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['name']) && !empty($_POST['id']))
{
    $query_update = "UPDATE setting SET meta_title = '{$_POST['meta_title']}', meta_keywords = '{$_POST['meta_keywords']}',
meta_description = '{$_POST['meta_description']}', title = '{$_POST['title']}', content = '{$_POST['content']}', name = '{$_POST['name']}' WHERE id = '{$_POST['id']}'";
    mysqli_query($dbc, $query_update) or die("Query update error");
    $content = "Your page successful edited";
}else
{
    $content = "Not enough info to edit page";
}

$title = "Edit page";

$smarty_main->assign("title", $title);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");