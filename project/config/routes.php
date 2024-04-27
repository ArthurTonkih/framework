<?php
	use \Core\Route;
	
	return [
		new Route('/', 'main', 'index'), // роут для главной страницы

		new Route('/catalog/', 'main', 'catalog'), // роут для страницы каталог
		new Route('/product/:id', 'product', 'show'), // роут для страницы подробных товаров

		new Route('/news/', 'news', 'news'), // роут для страницы новостей
		new Route('/news/:id', 'news', 'show_news'), // роут для страницы подробных новостей

		new Route('/cart/', 'cart', 'cart'), // роут для страницы корзины

		new Route('/reg', 'Users', 'show_users'), // роут для отображения формы регистрации
		new Route('/reg-post', 'Users', 'add_users'), // роут для обработки данных из формы регистрации

		new Route('/admin/products', 'AdminProducts', 'show_add_products'), // роут для отображения формы добавления
		new Route('/add-product-post', 'AdminProducts', 'add_product'), // роут для обработки данных из формы добавления товара

		new Route('/admin/news', 'AdminNews', 'show_add_news'), // роут для отображения формы добавления новостей
		new Route('/add-news-post', 'AdminNews', 'add_news'), // роут для обработки данных из формы добавления новостей

		new Route('/admin/index', 'main', 'admin_index'), // роут для главной страницы АДМИН

		new Route('/admin/tbnews', 'AdminNews', 'tbnews'), // роут для страницы таблицы с новостями
		new Route('/admin/tbproduct', 'AdminProducts', 'tbproduct'), // роут для страницы таблицы с товарами
	];
	
