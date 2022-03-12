<?php
define("SMARTY_LIB", "libs/");
require_once SMARTY_LIB."Smarty.class.php";

$smarty_calc = new Smarty();

$result = 0;
$num1 = 0;
$num2 = 0;
if(isset($_POST['send'],$_POST['first'], $_POST['second']) && !empty($_POST['first']) && !empty($_POST['second']))
{
    $num1 = $_POST['first'];
    $num2 = $_POST['second'];

    switch ($_POST['send'])
    {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
        case "^":
            $result = pow($num1 , $num2);
            break;
    }
    $smarty_calc->assign("result", $result);
    $smarty_calc->assign("num1", $num1);
    $smarty_calc->assign("num2", $num2);
}
$smarty_calc->display("calc.tpl");