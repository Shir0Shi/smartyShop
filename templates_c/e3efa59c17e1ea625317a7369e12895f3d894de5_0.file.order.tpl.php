<?php
/* Smarty version 3.1.36, created on 2021-02-05 13:17:43
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_601d1b4770ab14_97511132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3efa59c17e1ea625317a7369e12895f3d894de5' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\templates\\order.tpl',
      1 => 1612520258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601d1b4770ab14_97511132 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="order.php" method="post">
    <table border="1" style="text-align: center">
        <tr>
            <th>№</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Sum</th>
            <th>Edit</th>
        </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
                <td><img src="images_item/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="150px"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
                <td><input name="count<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" type="number" min="1" max="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['max'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sum'];?>
</td>
                <td><a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&b_mode=del">Delete</a></td>
            </tr>
        <?php
}
}
?>
        <tr >
            <th colspan="5" style="text-align: center">Total price: </th>
            <th colspan="2" style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</th>
        </tr>
        <tr>
            <th colspan="3" style="text-align: center"><a href="basket.php?b_mode=clean">Clean</a></th>
            <th colspan="4" style="text-align: center"><a href="order2.php">Buy</a></th>
        </tr>
        <tr>
            <th colspan="7" style="text-align: center"><input type="submit" name="send" value="Calculate"></th>
        </tr>
    </table>
</form><?php }
}
