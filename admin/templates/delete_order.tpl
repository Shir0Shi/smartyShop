<form method="post" action="delete_order.php">
    <label><h2>Do you sure you want to delete {$name}'s order?</h2></label><br>
    <input type="radio" name="choose" value="yes" checked>Yes
    <input type="radio" name="choose" value="no" >No <br>
    <input type="hidden" value="{$id}" name="id">
    <input type="submit" name="send" value="Confirm">
</form>