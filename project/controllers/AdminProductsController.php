<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Product;
	
	class AdminProductsController extends Controller {
		public function show_add_products() {
			$this->title = 'Каталог';

			return $this->render('admin/products/add-product');
		}

        public function add_product() {
            $name = $_POST['name'];
            $descriprion = $_POST['descriprion'];
            $brand = 1;
            $series = 2;
            $price = $_POST['price'];

            $path = "./project/webroot/img/product/".$_FILES['img']['name'];
            copy($_FILES['img']['tmp_name'],$path);
            $fname=$_FILES['img']['name'];

            $product_data = [
                'name' => $name,
                'descriprion' => $descriprion,
                'brand' => $brand,
                'series' => $series,
                'price' => $price,
                'img' => $fname
            ];
            $product = New Product;
            $product -> add_product($product_data);
		}


        public function tbproduct() {
			$this->title = 'Товары';

            $product = new Product;
			$data = $product -> getProduct();

			return $this->render('admin/products/product', ['product' => $data]);
		}
	}
