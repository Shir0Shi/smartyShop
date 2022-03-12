<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lod_style.css">
    <title>Document</title>
</head>
<body>
<form method="post" action="login.php">
    <label>Input login</label><br>
    <input type="text" name="login"><br>
    <label>Input password</label><br>
    <input name="pass" type="password"><br>
    <input type="submit" name="send" value="Log in">
</form>
<p class="error">{$content}</p>
</body>
</html>