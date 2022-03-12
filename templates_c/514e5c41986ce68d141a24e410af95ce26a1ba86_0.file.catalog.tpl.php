<?php
/* Smarty version 3.1.36, created on 2021-02-01 14:34:03
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\templates\catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6017e72b6c75f4_71405139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '514e5c41986ce68d141a24e410af95ce26a1ba86' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\templates\\catalog.tpl',
      1 => 1612178598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017e72b6c75f4_71405139 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['items']->value))) {?>
    <table width="700" border="1" style="text-align: center; ">
        <tr>
            <th>№</th>
            <th>Photo</th>
            <th><a href="catalog.php?sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&sort_by=name&id_cat=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
" style="color: #ec971f;">Name</a></th>
            <th><a href="catalog.php?sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&sort_by=price&id_cat=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
" style="color: #ec971f;">Price</a></th>
            <th>Amount</th>
            <th>More info</th>
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
                <td><?php if ($_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['amount'] == 0) {?>No items<?php } else {
echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['amount'];?>
 <a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&b_mode=add&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;?>
">Add to basket</a><?php }?></td>
                <td><a href="info.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">More</a></td>
            </tr>
        <?php
}
}
?>
    </table>
    <table>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['active_page']->value == 1) {?>
                <td> < </td>
                <?php } else { ?> <td><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;?>
&id_cat=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
"> < </a></td>
            <?php }?>
            <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['p']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_start = min(1, $__section_i_1_loop);
$__section_i_1_total = min(($__section_i_1_loop - $__section_i_1_start), $__section_i_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_1_start; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) == $_smarty_tpl->tpl_vars['active_page']->value) {?>
                    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</td>
                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['cat_id']->value))) {?> <td><a href="catalog.php?page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
&id_cat=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</a></td>

                <?php } else { ?> <td><a href="catalog.php?page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</a></td>
                <?php }?>
            <?php
}
}
?>
            <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_pages']->value) {?>
                <td> > </td>
            <?php } else { ?> <td><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;?>
&id_cat=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
"> > </a></td>
            <?php }?>
        </tr>
    </table>

<?php }
}
}
