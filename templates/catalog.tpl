{if isset($items)}
    <table width="700" border="1" style="text-align: center; ">
        <tr>
            <th>№</th>
            <th>Photo</th>
            <th><a href="catalog.php?sort={$sort}&sort_by=name&id_cat={$cat_id}" style="color: #ec971f;">Name</a></th>
            <th><a href="catalog.php?sort={$sort}&sort_by=price&id_cat={$cat_id}" style="color: #ec971f;">Price</a></th>
            <th>Amount</th>
            <th>More info</th>
        </tr>
        {section loop=$items name=i}
            <tr>
                <td>{$num++}</td>
                <td><img src="images_item/{$items[i].photo}" width="150px"></td>
                <td>{$items[i].name}</td>
                <td>{$items[i].price}</td>
                <td>{if $items[i].amount==0}No items{else}{$items[i].amount} <a href="basket.php?id={$items[i].id}&b_mode=add&page={$active_page}">Add to basket</a>{/if}</td>
                <td><a href="info.php?id={$items[i].id}">More</a></td>
            </tr>
        {/section}
    </table>
    <table>
        <tr>
            {if $active_page == 1 }
                <td> < </td>
                {else } <td><a href="catalog.php?page={$active_page-1}&id_cat={$cat_id}"> < </a></td>
            {/if}
            {section loop=$p name=i step=1 start=1}

                {if $smarty.section.i.index == $active_page}
                    <td>{$smarty.section.i.index}</td>
                    {elseif isset($cat_id)} <td><a href="catalog.php?page={$smarty.section.i.index}&id_cat={$cat_id}">{$smarty.section.i.index}</a></td>

                {else} <td><a href="catalog.php?page={$smarty.section.i.index}">{$smarty.section.i.index}</a></td>
                {/if}
            {/section}
            {if $active_page == $count_pages}
                <td> > </td>
            {else} <td><a href="catalog.php?page={$active_page+1}&id_cat={$cat_id}"> > </a></td>
            {/if}
        </tr>
    </table>

{/if}