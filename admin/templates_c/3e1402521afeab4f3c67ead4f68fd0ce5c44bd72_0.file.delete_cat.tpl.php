<?php
/* Smarty version 3.1.36, created on 2021-01-14 15:08:48
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\delete_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60003450d12510_38201614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e1402521afeab4f3c67ead4f68fd0ce5c44bd72' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\delete_cat.tpl',
      1 => 1610626107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60003450d12510_38201614 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="delete_cat.php" method="post">
    <label><h2>Do you sure you want to delete <span style="color: #0d70b7"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>?</h2></label><br>
    <label>all items in this category would be deleted</label><br>
    <input type="radio" name="del" value="yes" checked>Yes
    <input type="radio" name="del" value="no">No<br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Confirm">
</form>

<p>Items:</p>
<?php if (!empty($_smarty_tpl->tpl_vars['table_row']->value)) {?>
<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Photo</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['table_row']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><img src="../images_item/<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="100px"></td>

        </tr>

    <?php
}
}
?>
</table>
<?php } else { ?> <p>No items in category</p>
<?php }?>
</table>
<?php }
}
