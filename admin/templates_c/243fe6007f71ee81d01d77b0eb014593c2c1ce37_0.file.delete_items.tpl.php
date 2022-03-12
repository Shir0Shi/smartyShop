<?php
/* Smarty version 3.1.36, created on 2021-01-14 15:40:21
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\delete_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60003bb5902765_31265910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '243fe6007f71ee81d01d77b0eb014593c2c1ce37' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\delete_items.tpl',
      1 => 1610628017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60003bb5902765_31265910 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="delete_items.php">
    <label><h2>Do you sure you want to delete <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2></label><br>
    <input type="radio" value="yes" name="del" checked>Yes
    <input type="radio" value="no" name="del">No<br>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
    <input type="submit" name="send" value="Submit">
</form><?php }
}
