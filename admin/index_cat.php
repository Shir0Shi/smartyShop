<?php
 require_once "header.php";
 $smarty_index = new Smarty();
 $query = "SELECT id, name FROM categories";
 $result = mysqli_query($dbc, $query) or die("Query error");
 $table_row = array();
 $num = 1;
 while($row=mysqli_fetch_array($result))
 {
     $table_row[] = array("id"=>$row["id"],"name"=>$row['name']);
 }
 $smarty_index->assign("table_row",$table_row);
 $smarty_index->assign("num", $num);
 $content = $smarty_index->fetch("index_cat.tpl");

 $title = "Direct categories";
 $smarty_main->assign("title", $title);
 $smarty_main->assign("content", $content);
 $smarty_main->display("main.tpl");