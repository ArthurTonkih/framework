<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Hello extends Model
	{
		public function getUsers() {
			return $this -> findMany('SELECT * FROM `products`'); 
		}
	}
