<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\News;
	
	class NewsController extends Controller {

		public function show_news($param) {
            $id = $param['id'];
			$this->title = 'Новости';
			
			$news = new News; // тестовая модель для проверки базы
			$data = $news -> getIdNews($id);
			return $this->render('news/news', ['news' => $data]);
		}
		
		public function news() {
			$this->title = 'Новости';
			
			$news = new News; // тестовая модель для проверки базы
			$data = $news -> getNews();
			// var_dump($data);
			return $this->render('news/index', ['news' => $data]);

            echo "Новость";
		}
	}
