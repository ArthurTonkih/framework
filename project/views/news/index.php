<h1 class="title">Новости</h1>

<div class="items">
<?php for ($i = 0; $i < count($news); $i++): ?>
    <div class="item">
        <!-- <img src="<?=$news[$i]['img']?>"> -->
        <h3><?=$news[$i]['tema']?></h3>
        <h4><?=$news[$i]['name']?></h4>
        <a href="/news/<?=$news[$i]['id']?>">Подробнее</a>
    </div>
<?php endfor; ?>
</div>