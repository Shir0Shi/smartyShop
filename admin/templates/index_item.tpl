<h2>Direct items</h2>
<p><a href="add_item.php">Add items</a></p>
<form method="post" action="index_item.php">
    <select name="cat_id">
        <option value="0">Select category</option>
        {section loop=$cat name=i}
            <option {if isset($cat_id)&&$cat_id==$cat[i].id}selected{/if}  value="{$cat[i].id}">{$cat[i].name}</option>
        {/section}
    </select>
    <input type="submit" name="send" value="Confirm">
</form>
{if !empty($table_row)}
<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Photo</th>
        <th colspan="2">Manegment</th>
    </tr>
    {section loop=$table_row name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$table_row[i].name}</td>
            <td><img src="../images_item/{$table_row[i].photo}" width="100px"></td>
            <td><a href="edit_items.php?id={$table_row[i].id}">EDIT</a> </td>
            <td><a href="delete_items.php?id={$table_row[i].id}&name={$table_row[i].name}">Delete</a></td>
        </tr>

    {/section}
</table>
{else} <p>No items in category</p>
{/if}