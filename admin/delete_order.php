<?php
require_once "header.php";
if(isset($_GET['id_cl'], $_GET['name'])&& !empty($_GET['id_cl'])&& !empty($_GET['name'])&& !isset($_POST['send']))
{

    $smarty_del = new Smarty();

        $smarty_del->assign("name", $_GET['name']);
        $smarty_del->assign("id", $_GET['id_cl']);
        $content = $smarty_del->fetch("delete_order.tpl");
        $smarty_main->assign("content", $content);
        $smarty_main->display("main.tpl");
}
    else if (isset($_POST['send'],$_POST['id'],$_POST['choose']) && $_POST['choose']=="yes" && !empty($_POST['id']))
    {
        $query = "DELETE FROM relationorder WHERE id_client = '{$_POST['id']}'";
        //echo $query;
        mysqli_query($dbc, $query) or die ("Query del error");
        $smarty_main->assign("content", "Successful delete");
        $smarty_main->display("main.tpl");
        header("location: admin_order.php");
    }else
    {
        echo "Deleting canceled or impossible";
    }
