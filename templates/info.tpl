<table border="1" style="text-align: center; ">
    <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Category</th>
    </tr>
    <tr>
        <td><img src="images_item/{$row['photo']}" width="200px" ></td>
        <td>{$row['name']}</td>
        <td>{$row['price']}</td>
        <td>{$row['amount']}</td>
        <td>{$row['descrip']}</td>
        <td>{$row['cat_id']}</td>
    </tr>
</table>