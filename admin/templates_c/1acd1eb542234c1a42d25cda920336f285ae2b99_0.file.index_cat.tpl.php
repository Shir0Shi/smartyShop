<?php
/* Smarty version 3.1.36, created on 2021-01-11 21:23:00
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\index_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffc9784257449_80203552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1acd1eb542234c1a42d25cda920336f285ae2b99' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\index_cat.tpl',
      1 => 1610389364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc9784257449_80203552 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Direct categories</h2>
<p><a href="add_cat.php">Add category</a></p>
<div>
<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th colspan="2">Manegment</th>
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
            <td><a href="edit_cat.php?id=<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">EDIT</a></td>
            <td><a href="delete_cat.php?id=<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">DELETE</a> </td>
        </tr>
    <?php
}
}
?>
</table>
</div>
<?php }
}
