<form method="post" action="delete_items.php">
    <label><h2>Do you sure you want to delete {$name}?</h2></label><br>
    <input type="radio" value="yes" name="del" checked>Yes
    <input type="radio" value="no" name="del">No<br>
    <input type="hidden" value="{$id}" name="id">
    <input type="submit" name="send" value="Submit">
</form>