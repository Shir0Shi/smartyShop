<?php
/* Smarty version 3.1.36, created on 2021-01-28 18:48:42
  from 'D:\menya_obidel_sasha\OpenServer\domains\smarty\search.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6012dcda808492_11316878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb6e0c5bdba2b3e5019ff3f091fb2c2ae9656c3' => 
    array (
      0 => 'D:\\menya_obidel_sasha\\OpenServer\\domains\\smarty\\search.php',
      1 => 1611848920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6012dcda808492_11316878 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
require_once "header.php";
$page = "catalog";
$smarty_cat = new Smarty();
$query = "SELECT id,name, photo, price, amount FROM items";
$result = mysqli_query($dbc, $query) or die ("Query error");
$items = array();
$num=1;
while($row=mysqli_fetch_array($result))
{
    $items[]= array("id"=>$row['id'], "name"=>$row['name'], "photo"=>$row['photo'],
        "price"=>$row['price'], "amount"=>$row['amount']);
}
$smarty_cat->assign("items", $items);
$smarty_cat->assign("num", $num);
$content = $smarty_cat->fetch("search.php");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");<?php }
}
