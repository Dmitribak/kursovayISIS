<?php

class Db
{
    public static function getConnection()
    {
        try {
            $paramsPath = ROOT . '/config/db_params.php';
            $params = include($paramsPath);


            $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
            $db = new PDO($dsn, $params['user'], $params['password']);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec("set names utf8");

            return $db;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function closeConnection()
    {
        $db = null;
    }
}