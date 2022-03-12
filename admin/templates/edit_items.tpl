<form method="post" action="edit_items.php" enctype="multipart/form-data">
    <label>Edit name</label><br>
    <input type="text" value="{$name}" name="new_name"><br>
    <label>Upload new photo</label><br>
    <input type="file" name="new_photo"><br>
    <label>Edit description</label><br>
    <textarea name="new_descrip">{$descrip}</textarea><br>
    <label>Edit price</label><br>
    <input type="text" name="new_price" value="{$price}"><br>
    <label>Edit category</label><br>
    <select name="new_cat_id">
        {section loop=$cat name=i}
            <option {if $cat[i].id==$cat_id}selected{/if} value="{$cat[i].id}">{$cat[i].name}</option>
        {/section}
    </select><br>
    <input type="hidden" name="old_photo" value="{$photo}">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Submit">
</form>