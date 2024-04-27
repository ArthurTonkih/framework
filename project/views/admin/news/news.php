<h2>Таблица Новостей</h2>
<div class="table-prod mtb">
    <table class="prodtable">
        <tr>
            <th>Тема</th>
            <th>Название</th>
            <th>Новость</th>
            <th></th>
            <th>Изображение</th>
            <th>Редактирование</th>
            <th>Удаление</th>
            
        </tr>
        <?
            for ($i = 0; $i < count($news); $i++){
                echo "<tr>";
                echo "<td>".$news[$i]['tema']."</td>
                <td>".$news[$i]['name']."</td>
                <td>".$news[$i]['text']."</td>
                <td>".$news[$i]['img']."</td>
                <td><img src='../img/".$news[$i]['img']."'></td>
                <td><a href= 'edit_news.php?id=".$news[$i]['id']."'><i class='fa fa-pencil fa-2x'></i> </a></td>
                <td><i class='fa fa-trash-o fa-fw news-delete' id=".$news[$i]['id']."></i></td>
                ";
            }
        ?>

    </table>