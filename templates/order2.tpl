<table border="1">
    <tr>
        <th>№</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Sum</th>
    </tr>
    {section loop=$items name=i}
        <tr>
            <td>{$num++}</td>
            <td><img src="images_item/{$items[i].photo}" width="150px"></td>
            <td>{$items[i].name}</td>
            <td>{$items[i].price}</td>
            <td>{$items[i].count}</td>
            <td>{$items[i].sum}</td>
        </tr>
    {/section}
    <tr>
        <th colspan="4">Total sum</th>
        <th colspan="2">{$total}</th>
    </tr>
</table>
<br>
<br>
<form action="order2.php" method="post">

    {if !isset($user)}
    <label>Input name</label><br><p style="float: left; position: absolute; left: 60%"><a href="order2.php?log=1">Already registered</a></p>
    <input type="text" name="name"><br>
    <label>Input email</label><br>
    <input type="text" name="email"><br>
    <label>Input phone</label><br>
    <input type="text" name="phone"><br>
    <label>Input address</label><br>
    <input type="text" name="address"><br>
    <label>Input notes</label><br>
    <textarea name="note"></textarea><br>
    <label>Input password</label><br>
    <input type="password" name="pass"><br>
    <label>Repeat password</label><br>
    <input type="password" name="pass2"><br>
    <input type="submit" name="send" value="To order">
    {else}
    <label>Input email</label><br>
    <input name="email" type="text"><br>
    <label>Input password</label><br>
    <input type="password" name="pass"><br>
        <input type="hidden" name="log2" value="true">
    <input type="submit" name="send" value="To order">
    {/if}
</form>