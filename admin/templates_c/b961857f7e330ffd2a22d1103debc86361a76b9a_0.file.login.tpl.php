<?php
/* Smarty version 3.1.36, created on 2021-01-18 16:49:23
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600591e378bc06_77452831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b961857f7e330ffd2a22d1103debc86361a76b9a' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\login.tpl',
      1 => 1610977760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600591e378bc06_77452831 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lod_style.css">
    <title>Document</title>
</head>
<body>
<form method="post" action="login.php">
    <label>Input login</label><br>
    <input type="text" name="login"><br>
    <label>Input password</label><br>
    <input name="pass" type="password"><br>
    <input type="submit" name="send" value="Log in">
</form>
<p class="error"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</body>
</html><?php }
}
