<?php
/* Smarty version 3.1.36, created on 2021-01-14 15:56:11
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\edit_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60003f6b908180_54156025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '292be76e24671be51d17539bdfc62d699ae42d4a' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\edit_cat.tpl',
      1 => 1610628965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60003f6b908180_54156025 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="edit_cat.php" method="post">
    <label>Input new name</label><br>
    <input name="name" type="text"><br>
    <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="send">
</form><?php }
}
