<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    {section loop=$client name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$client[i].name}</td>
            <td>{$client[i].email}</td>
            <td>{$client[i].phone}</td>
        </tr>
    {/section}
</table>