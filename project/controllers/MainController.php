<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Hello;
	
	class MainController extends Controller
	{
		public function catalog() {
			$this->title = 'Каталог';
			
			$hello = new Hello; // тестовая модель для проверки базы
			$data = $hello -> getUsers();
			// var_dump($data);
			return $this->render('hello/index', ['products' => $data]);
		}
		public function index() {
			$this->title = 'Главная страница';

			return $this->render('index/index');
		}

		public function admin_index() {
			$this->title = 'Главная страница АДМИН';

			return $this->render('admin/index/index');
		}
	}
