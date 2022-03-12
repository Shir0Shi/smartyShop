<table border="1">
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Price</th>
        <th>Amount</th>
    </tr>
    {section loop=$arr name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$arr[i].name}</td>
            <td><img src="images_item/{$arr[i].photo}" width="150px"></td>
            <td>{$arr[i].price}</td>
            <td>{$arr[i].amount}</td>
        </tr>
    {/section}
</table>
<table>
    <tr>
        {section loop=$p name=i step=1 start=1}

            {if $smarty.section.i.index == $active_page}
            <td>{$smarty.section.i.index}</td>
            {else} <td><a href="listalka.php?page={$smarty.section.i.index}">{$smarty.section.i.index}</a></td>
        {/if}
        {/section}
    </tr>
</table>