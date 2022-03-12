<form action="delete_cat.php" method="post">
    <label><h2>Do you sure you want to delete <span style="color: #0d70b7">{$name}</span>?</h2></label><br>
    <label>all items in this category would be deleted</label><br>
    <input type="radio" name="del" value="yes" checked>Yes
    <input type="radio" name="del" value="no">No<br>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Confirm">
</form>

<p>Items:</p>
{if !empty($table_row)}
<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Photo</th>
    </tr>
    {section loop=$table_row name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$table_row[i].name}</td>
            <td><img src="../images_item/{$table_row[i].photo}" width="100px"></td>

        </tr>

    {/section}
</table>
{else} <p>No items in category</p>
{/if}
</table>
