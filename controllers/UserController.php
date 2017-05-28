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

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $today = date("Y-m-d H:i:s");

            $errors = false;

            if (!User::checkName($login, 1)) {
                $errors[] = 'Логин не должен быть короче 5-х символов';
            }
            if (!User::checkName($name, 1)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkName($surname, 1)) {
                $errors[] = 'Фамилия не должна быть короче 3-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!User::checkPassword($password, 1)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
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
            $password = $_POST['passwor'];

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

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

/*                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet");*/
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/site/authorization/login.php');
        return true;
    }
}
