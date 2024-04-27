<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Product;
	
	class ProductController extends Controller {
		public function show($params) {
            $id = $params['id'];
			$this->title = 'Каталог';
			
			$product = new Product; // тестовая модель для проверки базы
			$data = $product -> getById($id);
			return $this->render('product/product', ['product' => $data]);
		}
	}
