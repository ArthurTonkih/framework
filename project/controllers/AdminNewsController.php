<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\News;
	
	class AdminNewsController extends Controller {
		public function show_add_news() {
			$this->title = 'Новости';

			return $this->render('admin/news/add-news');
		}

        public function add_news() {
            $tema = $_POST['tema'];
            $name = $_POST['name'];
            $text = $_POST['text'];

            $path = "./project/webroot/img/news/".$_FILES['img']['name'];
            copy($_FILES['img']['tmp_name'],$path);
            $fname=$_FILES['img']['name'];

            $news_data = [
                'tema' => $tema,
                'name' => $name,
                'text' => $text,
                'img' => $fname
            ];
            $news = New News;
            $news -> add_news($news_data);
		}


        public function tbnews() {
			$this->title = 'Новости';

            $news = new News;
			$data = $news -> getNews();

			return $this->render('admin/news/news', ['news' => $data]);
		}
	}