<?php
session_start();
define("SMARTY_LIB", "libs/");
// создаем константу которая хронит путь к смарти библиотеке
//подключаем смарти библиотеку
require_once SMARTY_LIB."Smarty.class.php";
// создаем обьект на основании класса смарти для обслуживания тпл файла
$smarty_main = new Smarty();
require_once "admin/param.php";
?>