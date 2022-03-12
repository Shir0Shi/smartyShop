<?php
require_once "header.php";
if(isset($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_rights'], $_SESSION['user_photo'])) {

    $smarty_index = new Smarty();
    $query = "SELECT id, name FROM setting";
    $result = mysqli_query($dbc, $query) or die("Query error");
    $table_rows = array();
    while ($row = mysqli_fetch_array($result)) {
        $table_rows[] = array("id" => $row["id"], "name" => $row["name"]);
    }
    $smarty_index->assign("table_row", $table_rows);
    $smarty_index->assign("number", 1);
    $content = $smarty_index->fetch("index_page.tpl");// метод fetch компилирует php и tpl файл и результат сохраняет в переменную
    $title = "Direct pages";

    $smarty_main->assign("title", $title);
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else header("location: ../404.html");