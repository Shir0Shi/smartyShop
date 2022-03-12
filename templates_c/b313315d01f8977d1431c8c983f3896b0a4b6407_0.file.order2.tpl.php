<?php
/* Smarty version 3.1.36, created on 2021-02-08 16:16:35
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\templates\order2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602139b3608951_70777439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b313315d01f8977d1431c8c983f3896b0a4b6407' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\templates\\order2.tpl',
      1 => 1612790193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602139b3608951_70777439 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>№</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Sum</th>
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
            <td><img src="images_item/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="150px"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sum'];?>
</td>
        </tr>
    <?php
}
}
?>
    <tr>
        <th colspan="4">Total sum</th>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</th>
    </tr>
</table>
<br>
<br>
<form action="order2.php" method="post">

    <?php if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>
    <label>Input name</label><br><p style="float: left; position: absolute; left: 60%"><a href="order2.php?log=1">Already registered</a></p>
    <input type="text" name="name"><br>
    <label>Input email</label><br>
    <input type="text" name="email"><br>
    <label>Input phone</label><br>
    <input type="text" name="phone"><br>
    <label>Input address</label><br>
    <input type="text" name="address"><br>
    <label>Input notes</label><br>
    <textarea name="note"></textarea><br>
    <label>Input password</label><br>
    <input type="password" name="pass"><br>
    <label>Repeat password</label><br>
    <input type="password" name="pass2"><br>
    <input type="submit" name="send" value="To order">
    <?php } else { ?>
    <label>Input email</label><br>
    <input name="email" type="text"><br>
    <label>Input password</label><br>
    <input type="password" name="pass"><br>
        <input type="hidden" name="log2" value="true">
    <input type="submit" name="send" value="To order">
    <?php }?>
</form><?php }
}
