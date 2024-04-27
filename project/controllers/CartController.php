<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Cart;
	
	class CartController extends Controller {
		public function cart() {
			$this->title = 'Корзина';
			
			$cart = new Cart; // тестовая модель для проверки базы
			$id = 1;
			$data = $cart -> getCart($id);
			return $this->render('cart/index', ['cart' => $data]);
		}
	}
