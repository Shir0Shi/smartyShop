<?php
/* Smarty version 3.1.36, created on 2021-01-14 16:25:46
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\edit_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6000465a99a6a5_64839681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '576b7514f1a719491e1780f293e503cd53788ab7' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\edit_items.tpl',
      1 => 1610630741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6000465a99a6a5_64839681 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="edit_items.php" enctype="multipart/form-data">
    <label>Edit name</label><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="new_name"><br>
    <label>Upload new photo</label><br>
    <input type="file" name="new_photo"><br>
    <label>Edit description</label><br>
    <textarea name="new_descrip"><?php echo $_smarty_tpl->tpl_vars['descrip']->value;?>
</textarea><br>
    <label>Edit price</label><br>
    <input type="text" name="new_price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"><br>
    <label>Edit category</label><br>
    <select name="new_cat_id">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option <?php if ($_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <input type="hidden" name="old_photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Submit">
</form><?php }
}
