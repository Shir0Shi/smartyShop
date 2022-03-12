<?php
/* Smarty version 3.1.36, created on 2021-02-18 14:12:43
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\info_client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602e4baba89124_78350557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7999c311ae76631d158f2606fb5ee216c4f146ff' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\info_client.tpl',
      1 => 1613646761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602e4baba89124_78350557 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th colspan="2">Name</th>
        <th colspan="2">Email</th>
        <th colspan="2">Address</th>
        <th>Phone</th>
    </tr>

        <tr>
            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
        </tr>
    <tr>
        <th colspan="7" style="text-align: center">Orders</th>
    </tr>
<tr>
    <th>Photo</th>
    <th>Name</th>
    <th>Price</th>
    <th>Amount</th>
    <th>Sum</th>
    <th>Description</th>
    <th>Date of order</th>
</tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <td><img src="../images_item/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="150px"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['amount'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sum'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descrip'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</td>
    </tr>
    <?php
}
}
?>
    <tr>
        <th style="text-align: center" colspan="4">Total sum:</th>
        <td style="text-align: center" colspan="3"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
    </tr>
</table><?php }
}
