<h2>Direct categories</h2>
<p><a href="add_cat.php">Add category</a></p>
<div>
<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th colspan="2">Manegment</th>
    </tr>
    {section loop=$table_row name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$table_row[i].name}</td>
            <td><a href="edit_cat.php?id={$table_row[i].id}">EDIT</a></td>
            <td><a href="delete_cat.php?id={$table_row[i].id}&name={$table_row[i].name}">DELETE</a> </td>
        </tr>
    {/section}
</table>
</div>
