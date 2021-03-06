<?php

class User
{
    public static function register($login, $password, $email, $today, $name = 'NULL', $surname = 'NULL', $role = 1)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO users (login_users, password_users, email_users, date_registration_users, name_users, family_users, role_users)'
            . 'VALUES (:login, :password, :email, :date, :name, :family, :role_users)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':date', $today, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':family', $surname, PDO::PARAM_STR);
        $result->bindParam(':role_users', $role, PDO::PARAM_STR);
        return $result->execute();
    }
    public static function edit($id, $name, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE users
            SET name = :name, password = :password 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }
    public static function checkUserData($email, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE email_users = :email AND password = :password';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return array($user['id_users'], $user['role']);
        }
        return false;
    }
//Запоминаем пользователя
    public static function auth($userId, $role)
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
        $_SESSION['role'] = $role;
    }
//Возвращает идентификатор пользователя, если он авторизирован.
//Иначе перенаправляет на страницу входа
    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }
//Проверяет является ли пользователь гостем
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
// TODO: !!!!
    public static function isEditor()
    {
        if (isset($_SESSION[''])) {
            return false;
        }
        return true;
    }
//Проверяет имя: не меньше, чем 2 символа
    public static function checkName($name, $k)
    {
        if (strlen($name) >= $k) {
            return true;
        }
        return false;
    }
//Проверяет пароль: не меньше, чем 6 символов
    public static function checkPassword($password, $k)
    {
        if (strlen($password) >= $k) {
            return true;
        }
        return false;
    }
//Проверяет email
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
//Проверяет не занят ли email другим пользователем
    public static function checkEmailExists($email)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM users WHERE email_users = :email';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }
//Возвращает пользователя с указанным id
    public static function getUserById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function checkPass($pas1, $pas2) {
        if ($pas1 === $pas2) return true;
            else return false;
    }
}