<?php
/* Smarty version 3.1.36, created on 2021-01-04 15:42:52
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\index_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff30d4cee32b7_01305391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b481582072c7e4bf5e09904ded1ea539059c0d2' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\index_page.tpl',
      1 => 1609764170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff30d4cee32b7_01305391 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Direct</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['table_row']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><a href="edit_page.php?id=<?php echo $_smarty_tpl->tpl_vars['table_row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Edit</a></td>
        </tr>
        <?php
}
}
?>
</table><?php }
}
