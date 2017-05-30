<?php

class Adminka
{
    public static function insertbd($category)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO events_category (category) VALUES (:category)';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        if ($result->execute())
            return true;
    }

    public static function deletebd($id)
    {
        $db = Db::getConnection();
        $sql = 'DELETE FROM events_category WHERE id_category = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        if ($result->execute())
            return true;
    }
    public static function edit($id)
    {
        $db = Db::getConnection();
        $sql = '';
    }
}