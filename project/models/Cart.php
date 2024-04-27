<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Cart extends Model
	{
		public function getCart() {
			// return $this -> findMany('SELECT * FROM `cart`'); 
			// return $this -> findMany('SELECT * FROM `cart` WHERE `id_users` = 1 LEFT JOIN `products` ' ); 

			return $this -> findMany('SELECT p.name, p.descriprion, p.price FROM `cart` c, `products` p WHERE c.`id_users` = 1 and c.`id_products`= p.`id`'); 

			// return $this -> findMany('SELECT * FROM `products` WHERE `id` =". $cart[$i]['id_products']'); 
		}
	}
