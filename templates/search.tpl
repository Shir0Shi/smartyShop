<table border="1" width="100%">
    <tr>
        <th>№</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Info</th>
    </tr>
    {section loop=$items name=i}
        <tr>
            <td>{$num++}</td>
            <td><img src="images_item/{$items[i].photo}" width="150px"></td>
            <td>{$items[i].name}</td>
            <td>{$items[i].price}</td>
            <td>{$items[i].amount}</td>
            <td><a href="info.php?id={$items[i].id}">More</a></td>
        </tr>
    {/section}
</table>