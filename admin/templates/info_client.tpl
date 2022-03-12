<table border="1">
    <tr>
        <th colspan="2">Name</th>
        <th colspan="2">Email</th>
        <th colspan="2">Address</th>
        <th>Phone</th>
    </tr>

        <tr>
            <td colspan="2">{$name}</td>
            <td colspan="2">{$email}</td>
            <td colspan="2">{$address}</td>
            <td>{$phone}</td>
        </tr>
    <tr>
        <th colspan="7" style="text-align: center">Orders</th>
    </tr>
<tr>
    <th>Photo</th>
    <th>Name</th>
    <th>Price</th>
    <th>Amount</th>
    <th>Sum</th>
    <th>Description</th>
    <th>Date of order</th>
</tr>
    {section loop=$items name=i}
    <tr>
        <td><img src="../images_item/{$items[i].photo}" width="150px"></td>
        <td>{$items[i].name}</td>
        <td>{$items[i].price}</td>
        <td>{$items[i].amount}</td>
        <td>{$items[i].sum}</td>
        <td>{$items[i].descrip}</td>
        <td>{$items[i].date}</td>
    </tr>
    {/section}
    <tr>
        <th style="text-align: center" colspan="4">Total sum:</th>
        <td style="text-align: center" colspan="3">{$total}</td>
    </tr>
</table>