<h1 class="title">Каталог</h1>

<div class="items">
<?php for ($i = 0; $i < count($products); $i++): ?>
    <div class="item">
        <img src="<?=$products[$i]['img']?>">
        <h2><?=$products[$i]['name']?></h2>
        <h3><?=$products[$i]['descriprion']?></h3>
        <h3><?=$products[$i]['price']?></h3>
        <a href="/product/<?=$products[$i]['id']?>">Подробнее</a>
    </div>
<?php endfor; ?>
</div>