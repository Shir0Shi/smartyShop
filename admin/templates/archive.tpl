<table border="1">
    {section loop=$items name = i}
        {if $items[i].change_client != $items[i].id_cl}
            <tr>
                <th>№</th>
                <th>Client name</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Add info</th>
                <th>Date order</th>
                <th>Recover</th>
            </tr>
            <tr>
                <td>{$num++}</td>
                <td>{$items[i].name}</td>
                <td>{$items[i].email}</td>
                <td>{$items[i].phone}</td>
                <td>{$items[i].address}</td>
                <td>{$items[i].note}</td>
                <td>{$items[i].date}</td>
                <td><a href="recover_order.php?id={$items[i].id_cl}">Recover</a></td>
            </tr>
            <tr>
                <th colspan="2">Photo</th>
                <th>Item name</th>
                <th>Item price</th>
                <th>Item amount</th>
                <th colspan='3'>Cost</th>
            </tr>
        {/if}
        <tr>
            <td colspan="2"><img src="../images_item/{$items[i].photo}" width="150px"></td>
            <td>{$items[i].it_name}</td>
            <td>{$items[i].price}</td>
            <td>{$items[i].amount}</td>
            <td colspan="3">{$items[i].sum}</td>
        </tr>
        {if $items[i].count_row == $items[i].row_it}
            <tr><th colspan='4'>Total sum</th><th colspan='4'>{$items[i].total}</th></tr>
        {/if}
    {/section}
</table>