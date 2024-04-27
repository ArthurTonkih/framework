<h1 class="title">Корзина</h1>

<div class="items">
    <div class="item">
    <? 
    for ($i = 0; $i < count($cart); $i++){
		echo '<div class="cart">';
		echo "<img src=".$cart[$i]['img']."
            <p>".$cart[$i]['name']."</p>
            <p>".$cart[$i]['descriprion']."</p>
     		<p>".$cart[$i]['price']."</p>
			</div>
     		";
}
?>
        <!-- <img src="<?=$products['img']?>">
        <h2><?=$products['name']?></h2>
        <h3><?=$products['descriprion']?></h3>
        <h3><?=$products['price']?></h3> -->
    </div>
</div>