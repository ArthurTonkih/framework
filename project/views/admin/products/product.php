<h2>Таблица Товаров</h2>
<div class="table-prod mtb">
    <table class="prodtable">
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Бренд</th>
            <th>Серия</th>
            <th>Цена</th>
            <th></th>
            <th>Изображение</th>
            <th>Редактирование</th>
            <th>Удаление</th>
            
        </tr>
        <?
            for ($i = 0; $i < count($product); $i++){
                echo "<tr>";
                echo "<td>".$product[$i]['name']."</td>
                <td>".$product[$i]['descriprion']."</td>
                <td>".$product[$i]['brand']."</td>
                <td>".$product[$i]['series']."</td>
                <td>".$product[$i]['price']."</td>
                <td>".$product[$i]['img']."</td>
                <td><img src='../img/".$product[$i]['img']."'></td>
                <td><a href= 'edit_products.php?id=".$product[$i]['id']."'><i class='fa fa-pencil fa-2x'></i> </a></td>
                <td><i class='fa fa-trash-o fa-fw products-delete' id=".$product[$i]['id']."></i></td>
                ";
            }
        ?>

    </table>