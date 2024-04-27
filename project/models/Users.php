<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Users extends Model
	{
		public function add_users($array)
		{
			return $this->query("INSERT `users` (`name`, `surname`, `login`, `password`) 
			VALUES ('".$array['name']."','".$array['surname']."','".$array['login']."','".$array['password']."')");
		}
	}
