<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Calculator</h1>
<form action="calc.php" method="post">
   <input type="text" name="first" {if isset($num1)}value= "{$num1}"{else} placeholder="Input num1"{/if} >
   <input type="text" name="second"  {if isset($num2)}value= "{$num2}" {else} placeholder="Input num2"{/if} >
    <input type="submit" name="send" value="+">
    <input type="submit" name="send" value="-">
    <input type="submit" name="send" value="*">
    <input type="submit" name="send" value="/">
    <input type="submit" name="send" value="^">

</form>
<p>Result: <strong>{$result}</strong></p>
</body>
</html>