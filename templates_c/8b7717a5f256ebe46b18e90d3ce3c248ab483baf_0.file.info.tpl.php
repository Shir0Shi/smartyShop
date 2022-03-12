<?php
/* Smarty version 3.1.36, created on 2021-01-24 17:51:17
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\templates\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600d8965973705_49354681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7717a5f256ebe46b18e90d3ce3c248ab483baf' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\templates\\info.tpl',
      1 => 1611499875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600d8965973705_49354681 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1" style="text-align: center; ">
    <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Category</th>
    </tr>
    <tr>
        <td><img src="images_item/<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
" width="200px" ></td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['amount'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['descrip'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cat_id'];?>
</td>
    </tr>
</table><?php }
}
