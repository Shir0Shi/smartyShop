<?php
/* Smarty version 3.1.36, created on 2021-01-07 15:49:43
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\add_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff70367aeb3e1_81560662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8a0bfa42212105c6352ad88f1e0a0d47127ece1' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\add_cat.tpl',
      1 => 1610023425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff70367aeb3e1_81560662 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add_cat.php" method="post">
    <label>Input name</label><br>
    <input name="name" type="text" ><br>
    <input type="submit" name="send" value="Add">
</form><?php }
}
