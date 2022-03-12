<?php
session_start();
//define("SMARTY_LIB", "libs/");
//// создаем константу которая хронит путь к смарти библиотеке
////подключаем смарти библиотеку
//require_once SMARTY_LIB."Smarty.class.php";
//// создаем обьект на основании класса смарти для обслуживания тпл файла
//$smarty_main = new Smarty();
//require_once "admin/param.php";
//$smarty_main->assign("privet", "Привет Смарти");// asign выполняет подстановку с данных с пхп в тпл в указанные посадочные места и имеет параметры 1- название посадочного места, которое в тпл файле выглядит: {$privet}
//2- данные которые подставляются в посадочные места
//$mark = 2;
//$smarty_main->assign("mark", $mark);
//$number= array(1,5,3,6,2);
//$smarty_main->assign("number", $number);
//$page = "index";
if(isset($page)) {
$query = "SELECT meta_title, meta_keywords, meta_description, title, content FROM setting WHERE page='{$page}'";
//echo $query;
$result = mysqli_query($dbc, $query) or die("Query error of main page");
$next = mysqli_fetch_array($result);
$smarty_main->assign("meta_title",$next['meta_title']);
$smarty_main->assign("meta_keywords",$next['meta_keywords']);
$smarty_main->assign("meta_description",$next['meta_description']);
$smarty_main->assign("title",$next['title']);
if(isset($content))
{
    $smarty_main->assign("content", $content);
}else
$smarty_main->assign("content",$next['content']);
////////////////// Menu //////////////////////////
$query_m = "SELECT name, page FROM setting ORDER BY prior ASC";
$result_m = mysqli_query($dbc, $query_m) or die("Query_m error");
$menu = array();
while($next_m = mysqli_fetch_array($result_m))
{
    $menu[] = array("name"=>$next_m['name'], "page"=>$next_m['page']);

}
$smarty_main->assign("menu", $menu);
$smarty_main->assign("page", $page);
////////////////// Edn Menu //////////////////////////
/// '''''''''''''''''''''''''''''' Cart''''''''''''''''''''''''
$count= 0;
if(count($_SESSION['basket'])>0)
    for($i = 0; $i < count($_SESSION['basket']); $i++)
{
    if($_SESSION['basket'][$i]['count']>1) $count+=$_SESSION['basket'][$i]['count'];
    else $count++;
}
    $smarty_main->assign("bas_count", $count);
/// '''''''''''''''''''''''''''''' Cart''''''''''''''''''''''''
///-----------------------------Categories-------------------------
$query_cat = "SELECT id, name FROM categories";
$result_cat = mysqli_query($dbc, $query_cat) or die("Query cat error");
$cat = array();
while($row_c = mysqli_fetch_array($result_cat))
{
    $cat[] = array("id"=>$row_c['id'], "name"=>$row_c['name']);
}
//echo "test";
//print_r($cat);
$smarty_main->assign("cat", $cat);
///-----------------------------Categories-------------------------
    $smarty_main->display("main.tpl");
// вызываем метод display который компилируют php и tpl файлы и результат компиляции передает браузеру на отображение
}else
{
    header("location: index.php");
}