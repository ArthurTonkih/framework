<?php
	namespace Project\Models;
	use \Core\Model;
	
	class News extends Model
	{
		public function getNews() {
			return $this -> findMany('SELECT * FROM `news`'); 
		}

		public function getIdNews($id)
		{
			return $this->findOne("SELECT * FROM `news` WHERE id=$id");
		}

		public function add_news($array)
		{
			return $this->query("INSERT `news` (`tema`, `name`, `text`, `img`) 
			VALUES ('".$array['tema']."','".$array['name']."','".$array['text']."','".$array['img']."')");
		}
	}