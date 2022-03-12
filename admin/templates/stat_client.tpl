<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Amount of items</th>
        <th>More info</th>
    </tr>
    {section loop=$client name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$client[i].name}</td>
            <td>{$client[i].email}</td>
            <td>{$client[i].phone}</td>
            <td>{$client[i].sum}</td>
            <td><a href="info_client.php?id={$client[i].id}">More</a></td>
        </tr>
    {/section}
</table>