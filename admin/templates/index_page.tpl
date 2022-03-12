<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Direct</th>
    </tr>
    {section loop=$table_row name=i}
        <tr>
            <td>{$number++}</td>
            <td>{$table_row[i].name}</td>
            <td><a href="edit_page.php?id={$table_row[i].id}">Edit</a></td>
        </tr>
        {/section}
</table>