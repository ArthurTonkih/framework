<h1 class="title">Подробное описание</h1>

<div class="items_full">
    <div class="item_full">
        <!-- <img src='../webroot/".$product['img']"'> -->
        <h2><?=$product['name']?></h2>
        <img src="<?=$product['img']?>">
        <h3><?=$product['descriprion']?></h3>
        <h3>Бренд: <?=$product['brand']?></h3>
        <h3>Серия: <?=$product['series']?></h3>
        <h3><?=$product['price']?></h3>
        <div class = 'cartadd'>Добавить в корзину</div>
    </div>
</div>


<!-- <script type="text/javascript" src="admin/jquery-3.6.0.min.js"></script> -->
<script type="text/javascript" src="../webroot/js_cart.js?<?php echo time() ?>"></script>