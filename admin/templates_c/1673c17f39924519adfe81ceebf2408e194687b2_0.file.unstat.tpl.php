<?php
/* Smarty version 3.1.36, created on 2021-02-18 15:03:57
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\unstat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602e57ad20a2b6_02401573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1673c17f39924519adfe81ceebf2408e194687b2' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\unstat.tpl',
      1 => 1613649834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602e57ad20a2b6_02401573 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['client']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
</td>
        </tr>
    <?php
}
}
?>
</table><?php }
}
