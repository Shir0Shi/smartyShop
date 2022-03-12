<h3>Editing page</h3>
<form method="post" action="edit_page.php">
    <label>Edit Title to SEO</label><br>
    <textarea name="meta_title" >{$meta_title}</textarea><br>
    <label>Edit keywords to SEO</label><br>
    <textarea name="meta_keywords">{$meta_keywords}</textarea><br>
    <label>Edit description to SEO</label><br>
    <textarea name="meta_description">{$meta_description}</textarea><br>
    <label>Edit title</label><br>
    <input type="text" name="title" value="{$title}"><br>
    <label>Edit content</label><br>
    <textarea name="content">{$content}</textarea><br>
    <label>Edit name</label><br>
    <input type="text" name="name" value="{$name}"><br>
    <input type="hidden" value="{$id}" name="id">
    <input type="submit" name="send">
</form>