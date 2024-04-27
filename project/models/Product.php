<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Product extends Model
	{
		public function getProduct() {
			return $this -> findMany('SELECT * FROM `products`'); 
		}

		public function getById($id)
		{
			return $this->findOne("SELECT * FROM `products` WHERE id=$id");
		}
		
		public function getAll()
		{
			return $this->findMany("SELECT id, title FROM page");
		}

		public function add_product($array)
		{
			return $this->query("INSERT `products` (`name`, `descriprion`, `brand`, `series`, `price`, `img`) 
			VALUES ('".$array['name']."','".$array['descriprion']."','".$array['brand']."','".$array['series']."','".$array['price']."','".$array['img']."')");
		}
	}

