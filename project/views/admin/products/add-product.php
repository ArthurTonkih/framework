<h1>Добавление товара</h1>
<form action="/add-product-post" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Название товара">
    <textarea name="descriprion" placeholder="Описание товара"></textarea>
    <!-- <input type="text" name="brand" placeholder="Название бренда">
    <input type="text" name="series" placeholder="Название серии"> -->
    <input type="text" name="price" placeholder="Цена">
    <input type="file" name="img" placeholder="Картинка товара">

    <input type="submit" value="Добавить">
</form>