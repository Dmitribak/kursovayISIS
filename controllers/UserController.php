<?php

class UserController
{
    public function actionRegister()
    {
        $login = false;
        $name = false;
        $surname = false;
        $email = false;
        $password = false;
        $result = false;
        $passwordconfim = false;

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $today = date("Y-m-d H:i:s");
            $passwordconfim = $_POST['passwordconfim'];

            $errors = false;

            if (!User::checkName($login, 1)) {
                $errors[] = 'Логин не должен быть короче 1-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!User::checkPassword($password, 1)) {
                $errors[] = 'Пароль не должен быть короче 1-ти символов';
            }

            if (!User::checkPass($password, $passwordconfim)){
                $errors[] = 'Пароли должны совпадать';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                $result = User::register($login, $password, $email, $today, $name, $surname);
            }

        }


        require_once(ROOT . '/views/site/authorization/register.php');

        return true;
    }

    public function actionForgot()
    {
        $email = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];

            $errors = false;

            if (!User::checkEmailExists($email)) {
                $errors[] = 'Данный Email не существует';
            }
            //TODO: + функция отправкисообщения пользователю
        }


        require_once(ROOT . '/views/site/authorization/forgot_password.php');

        return true;
    }

    public function actionLogin()
    {
        // Переменные для формы
        $email = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password, 1)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            $role = $userId[1];

            print_r($userId);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                echo "ВЫ авторизованны, спасибо";
//              //Перенаправляем пользователя в закрытую часть - кабинет
//                header("Location: /cabinet");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/site/authorization/login.php');
        return true;
    }
}
