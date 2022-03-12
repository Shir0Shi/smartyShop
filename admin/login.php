<?php
session_start();
require_once "header.php";
if(isset($_POST['send'],$_POST['login'],$_POST['pass'])&&!empty($_POST['login'])&& !empty($_POST['pass']))
{
    $query = "SELECT id,name,rights,photo FROM user WHERE login='{$_POST['login']}' AND password=SHA1('{$_POST['pass']}')";
    $result=mysqli_query($dbc,$query) or die("Query error");
    if(mysqli_num_rows($result)==1)
    {
        $row = mysqli_fetch_array($result);
        if(empty($row['photo']))
            $row['photo'] = "no_photo.png";
        setcookie("user_id", $row['id'], time()+60*60*24*30);
        setcookie("user_name", $row['name'], time()+60*60*24*30);
        setcookie("user_rights", $row['rights'], time()+60*60*24*30);
        setcookie("user_photo", $row['photo'], time()+60*60*24*30);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_rights'] = $row['rights'];
        $_SESSION['user_photo'] = $row['photo'];
        $content = "Successful login";
        $smarty_main->assign("content", $content);
        header("refresh: 2 url=index.php");
    }else
    {
        $smarty_main->assign("content", "Login or password is not correct");
    }

}else if(isset($_POST['send']))
    $smarty_main->assign("content", "Invalid input");
$smarty_main->display("login.tpl");
