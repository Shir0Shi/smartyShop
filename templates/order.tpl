<form action="order.php" method="post">
    <table border="1" style="text-align: center">
        <tr>
            <th>№</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Sum</th>
            <th>Edit</th>
        </tr>
        {section loop=$items name=i}
            <tr>
                <td>{$num++}</td>
                <td>{$items[i].name}</td>
                <td><img src="images_item/{$items[i].photo}" width="150px"></td>
                <td>{$items[i].price}</td>
                <td><input name="count{$items[i].id}" type="number" min="1" max="{$items[i].max}" value="{$items[i].count}"></td>
                <td>{$items[i].sum}</td>
                <td><a href="basket.php?id={$items[i].id}&b_mode=del">Delete</a></td>
            </tr>
        {/section}
        <tr >
            <th colspan="5" style="text-align: center">Total price: </th>
            <th colspan="2" style="text-align: center">{$total}</th>
        </tr>
        <tr>
            <th colspan="3" style="text-align: center"><a href="basket.php?b_mode=clean">Clean</a></th>
            <th colspan="4" style="text-align: center"><a href="order2.php">Buy</a></th>
        </tr>
        <tr>
            <th colspan="7" style="text-align: center"><input type="submit" name="send" value="Calculate"></th>
        </tr>
    </table>
</form>