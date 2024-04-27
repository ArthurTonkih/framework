<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Users;
	
	class UsersController extends Controller {
		public function show_users() {
			$this->title = 'Регистрация';

			return $this->render('users/reg');
		}

        public function add_users() {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $login = $_POST['login'];
            $password = $_POST['password'];

            $users_data = [
                'name' => $name,
                'surname' => $surname,
                'login' => $login,
                'password' => $password,
            ];
            $users = New Users;
            $users -> add_users($users_data);
		}
	}