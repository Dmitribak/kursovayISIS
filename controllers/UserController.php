<?php

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                $result = User::register($name, $email, $password);
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
}
