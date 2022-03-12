<?php
/* Smarty version 3.1.36, created on 2021-01-18 16:08:29
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6005884d1e4f61_18991621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdd0fefb5d13a000f401b2fc1296dcb3daaebf2d' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\registration.tpl',
      1 => 1610975305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6005884d1e4f61_18991621 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="registration.php" method="post" enctype="multipart/form-data">
    <label>Input name</label><br>
    <input type="text" name="name"><br>
    <label>Input login</label><br>
    <input type="text" name="login"><br>
    <label>Input phone</label><br>
    <input type="text" name="phone"><br>
    <label>Input photo</label><br>
    <input type="file" name="photo"><br>
    <label>Chose rights</label><br>
    <select name="rights">
        <option value="0">Chose rights</option>
        <option value="1">Admin</option>
        <option value="2">Operator</option>
    </select><br>
    <label>Input password</label><br>
    <input type="password" name="pass"><br>
    <label>Repeat password</label><br>
    <input type="password" name="pass2"><br>
    <input type="submit" name="send"><br>
</form><?php }
}
