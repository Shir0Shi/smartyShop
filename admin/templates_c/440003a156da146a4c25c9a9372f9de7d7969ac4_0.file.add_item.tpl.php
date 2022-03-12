<?php
/* Smarty version 3.1.36, created on 2021-01-28 18:10:09
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\add_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6012d3d1709aa0_58163315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '440003a156da146a4c25c9a9372f9de7d7969ac4' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\add_item.tpl',
      1 => 1611846605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6012d3d1709aa0_58163315 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add_item.php" method="post" enctype="multipart/form-data">
    <label>Input name</label><br>
    <input name="name" type="text"><br>
    <label>Load photo</label><br>
    <input type="file" name="photo"><br>
    <label>Input description</label><br>
    <textarea name="descrip"></textarea><br>
    <label>Input price</label><br>
    <input type="text" name="price"><br>
    <label>Choose category</label><br>
    <select name="cat_id">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <label>Input amount of phones</label>
    <input type="text" name="amount" ><br>
    <input type="submit" name="send" value="Add">
</form><?php }
}
