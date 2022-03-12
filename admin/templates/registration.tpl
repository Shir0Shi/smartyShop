<form action="registration.php" method="post" enctype="multipart/form-data">
    <label>Input name</label><br>
    <input type="text" name="name"><br>
    <label>Input login</label><br>
    <input type="text" name="login"><br>
    <label>Input phone</label><br>
    <input type="text" name="phone"><br>
    <label>Input photo</label><br>
    <input type="file" name="photo"><br>
    <label>Chose rights</label><br>
    <select name="rights">
        <option value="0">Chose rights</option>
        <option value="1">Admin</option>
        <option value="2">Operator</option>
    </select><br>
    <label>Input password</label><br>
    <input type="password" name="pass"><br>
    <label>Repeat password</label><br>
    <input type="password" name="pass2"><br>
    <input type="submit" name="send"><br>
</form>