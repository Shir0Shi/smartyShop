<?php
/* Smarty version 3.1.36, created on 2021-01-04 16:26:58
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\admin\templates\edit_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff317a29ee366_91113721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f669d7451b282b39485b2a094f95aafcbc6e40c1' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\admin\\templates\\edit_page.tpl',
      1 => 1609766488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff317a29ee366_91113721 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Editing page</h3>
<form method="post" action="edit_page.php">
    <label>Edit Title to SEO</label><br>
    <textarea name="meta_title" ><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea><br>
    <label>Edit keywords to SEO</label><br>
    <textarea name="meta_keywords"><?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
</textarea><br>
    <label>Edit description to SEO</label><br>
    <textarea name="meta_description"><?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
</textarea><br>
    <label>Edit title</label><br>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><br>
    <label>Edit content</label><br>
    <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea><br>
    <label>Edit name</label><br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
    <input type="submit" name="send">
</form><?php }
}
