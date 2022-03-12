<?php
require_once "header.php";


if(isset($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_rights'], $_SESSION['user_photo']) && $_SESSION['user_rights']==1) {


    $title = "Registration";

    if (!isset($_POST['send'])) {
        $smarty_regist = new Smarty();
        $content = $smarty_regist->fetch("registration.tpl");
    } else if (isset($_POST['send'], $_POST['name'], $_POST['login'], $_POST['phone'], $_POST['pass'], $_POST['rights']) &&
        !empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['phone']) && $_POST['pass'] == $_POST['pass2']) {
        if ($_FILES['photo']['error'] == 0) {
            $photo_name = time() . $_FILES['photo']['name'];
            $photo_name_tmp = $_FILES['photo']['tmp_name'];
            move_uploaded_file($photo_name_tmp, "images_avatar/$photo_name");
            $query = "INSERT INTO user (name,login,photo,phone,password,rights)
        VALUES ('{$_POST['name']}','{$_POST['login']}','{$photo_name}', '{$_POST['phone']}', SHA1('{$_POST['pass']}'), '{$_POST['rights']}')";

        } else
            $query = "INSERT INTO user (name,login,phone,password, rights )
        VALUES ('{$_POST['name']}','{$_POST['login']}', '{$_POST['phone']}', SHA1('{$_POST['pass']}'), '{$_POST['rights']}')";
        //echo $query;
        mysqli_query($dbc, $query) or die("Query error");
        $content = "Successful added";
    } else {
        $content = "Invalid input";
        header("refresh: 2 url=registration.php");
    }
    $smarty_main->assign("title", $title);
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
} else header("location: ../404.html");