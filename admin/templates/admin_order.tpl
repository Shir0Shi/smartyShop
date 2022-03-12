<table border="1">

    {section loop = $items name = i}
{if $items[i].id_cl != $items[i].change_client}
    <tr>
        <th>№</th>
        <th>Client name</th>
        <th>Mail</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Add info</th>
        <th>Date order</th>
        <th>Complete</th>
        <th>Delete</th>
    </tr>
        <tr>
            <td>{$num++}</td>
            <td>{$items[i].name}</td>
            <td>{$items[i].email}</td>
            <td>{$items[i].phone}</td>
            <td>{$items[i].address}</td>
            <td>{$items[i].note}</td>
            <td>{$items[i].date}</td>
            <td><a href="complete_order.php?id_cl={$items[i].id_cl}">Complete</a></td>
            <td><a href="delete_order.php?id_cl={$items[i].id_cl}&name={$items[i].name}">Delete</a></td>
        </tr>
    <tr>
        <th colspan='2'>Item photo</th>
        <th>Item name</th>
        <th>Item price</th>
        <th>Item amount</th>
        <th colspan='4'>Cost</th>
    </tr>
{/if}
        <tr>
            <td colspan="2"><img src="../images_item/{$items[i].photo}" width="150px"></td>
            <td>{$items[i].it_name}</td>
            <td>{$items[i].price}</td>
            <td>{$items[i].amount}</td>
            <td colspan="4">{$items[i].sum}</td>
        </tr>
        {if $items[i].count_row == $items[i].row_it}
        <tr><th colspan='5'>Total sum</th><th colspan='4'>{$items[i].total}</th></tr>
        {/if}
    {/section}
</table>