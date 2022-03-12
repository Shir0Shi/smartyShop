<?php
/* Smarty version 3.1.36, created on 2020-12-28 15:09:01
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\templates\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe9caddb00a23_79001842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f05f6cd370aea1b9eb7fee9d5d90a6949b06da' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\templates\\calc.tpl',
      1 => 1609157275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe9caddb00a23_79001842 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Calculator</h1>
<form action="calc.php" method="post">
   <input type="text" name="first" placeholder="Input num1" <?php if ((isset($_smarty_tpl->tpl_vars['num1']->value))) {?>value= <?php echo $_smarty_tpl->tpl_vars['num1']->value;
}?> >
   <input type="text" name="second" placeholder="Input num2" <?php if ((isset($_smarty_tpl->tpl_vars['num2']->value))) {?>value= <?php echo $_smarty_tpl->tpl_vars['num2']->value;
}?> >
    <input type="submit" name="send" value="+">
    <input type="submit" name="send" value="-">
    <input type="submit" name="send" value="*">
    <input type="submit" name="send" value="/">
    <input type="submit" name="send" value="^">

</form>
<p>Result: <strong><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</strong></p>
</body>
</html><?php }
}
