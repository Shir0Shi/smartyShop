<?php
/* Smarty version 3.1.36, created on 2021-02-12 13:13:32
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\delete_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602654cc516237_25174449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2de5c5df356c5060747df8a9fc8eb4fbaaa4fe0' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\delete_order.tpl',
      1 => 1613124808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602654cc516237_25174449 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="delete_order.php">
    <label><h2>Do you sure you want to delete <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
's order?</h2></label><br>
    <input type="radio" name="choose" value="yes" checked>Yes
    <input type="radio" name="choose" value="no" >No <br>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
    <input type="submit" name="send" value="Confirm">
</form><?php }
}
