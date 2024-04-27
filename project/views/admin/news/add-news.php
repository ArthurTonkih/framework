<h1>Добавление товара</h1>
<form action="/add-news-post" method="POST" enctype="multipart/form-data">
    <input type="text" name="tema" placeholder="Тема новости">
    <textarea name="name" placeholder="Название новости"></textarea>
    <!-- <input type="text" name="brand" placeholder="Название бренда">
    <input type="text" name="series" placeholder="Название серии"> -->
    <input type="text" name="text" placeholder="Новость">
    <input type="file" name="img" placeholder="Картинка товара">

    <input type="submit" value="Добавить">
</form>