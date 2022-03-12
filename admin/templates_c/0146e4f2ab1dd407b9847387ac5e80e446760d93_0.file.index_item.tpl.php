<?php
/* Smarty version 3.1.36, created on 2021-01-14 15:36:33
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\index_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60003ad139e668_85490570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0146e4f2ab1dd407b9847387ac5e80e446760d93' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\index_item.tpl',
      1 => 1610627789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60003ad139e668_85490570 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Direct items</h2>
<p><a href="add_item.php">Add items</a></p>
<form method="post" action="index_item.php">
    <select name="cat_id">
        <option value="0">Select category</option>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option <?php if ((isset($_smarty_tpl->tpl_vars['cat_id']->value)) && $_smarty_tpl->tpl_vars['cat_id']->value == $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
?>
    </select>
    <input type="submit" name="send" value="Confirm">
</form>
<?php if (!empty($_smarty_tpl->tpl_vars['table_row']->value)) {?>
<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Photo</th>
        <th colspan="2">Manegment</th>
    </tr>
    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['table_row']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><img src="../images_item/<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></td>
            <td><a href="edit_items.php?id=<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">EDIT</a> </td>
            <td><a href="delete_items.php?id=<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Delete</a></td>
        </tr>

    <?php
}
}
?>
</table>
<?php } else { ?> <p>No items in category</p>
<?php }
}
}
