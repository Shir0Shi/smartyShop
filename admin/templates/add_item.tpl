<form action="add_item.php" method="post" enctype="multipart/form-data">
    <label>Input name</label><br>
    <input name="name" type="text"><br>
    <label>Load photo</label><br>
    <input type="file" name="photo"><br>
    <label>Input description</label><br>
    <textarea name="descrip"></textarea><br>
    <label>Input price</label><br>
    <input type="text" name="price"><br>
    <label>Choose category</label><br>
    <select name="cat_id">
        {section loop=$cat name=i}
            <option value="{$cat[i].id}">{$cat[i].name}</option>
        {/section}
    </select><br>
    <label>Input amount of phones</label>
    <input type="text" name="amount" ><br>
    <input type="submit" name="send" value="Add">
</form>