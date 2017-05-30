<?php

class Afisha
{
    public static function getEventsList() {

        $db = Db::getConnection();
        $eventsList = array();

        $result = $db->query('SELECT id_events, title_events, events_category.category, short_text_events, date_events, count_views_events, img_events FROM events_afisha LEFT JOIN events_category ON events_afisha.id_category_events = events_category.id_category ORDER BY date_events ASC LIMIT 4;');

        $i = 0;
        while($row = $result->fetch()) {
            $eventsList[$i]['id_events'] = $row['id_events'];
            $eventsList[$i]['title'] = $row['title_events'];
            $eventsList[$i]['category'] = $row['category'];
            $eventsList[$i]['short_text'] = $row['short_text_events'];
            $eventsList[$i]['date_events'] = $row['date_events'];
            $eventsList[$i]['count_views_events'] = $row['count_views_events'];
            $eventsList[$i]['img_events'] = $row['img_events'];
            $i++;
        }

        return $eventsList;
    }

    public static function getEventsItemByID($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT title_events, events_category.category, full_text_events, date_events, count_views_events, img_events, id_category_events FROM events_afisha LEFT JOIN events_category ON events_afisha.id_category_events = events_category.id_category WHERE id_events = '. $id. ' ORDER BY date_events ASC');

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $eventsItem = $result->fetch();

            return $eventsItem;
        }

    }
    public static function getEventsAll() {
        $db = Db::getConnection();
        $eventsAll = array();

        $result = $db->query('SELECT id_events, title_events, events_category.category, full_text_events, date_events, count_views_events, img_events FROM events_afisha LEFT JOIN events_category ON events_afisha.id_category_events = events_category.id_category ORDER BY date_events ASC LIMIT 4;');

        $i = 0;
        while($row = $result->fetch()) {
            $eventsAll[$i]['id_events'] = $row['id_events'];
            $eventsAll[$i]['title'] = $row['title_events'];
            $eventsAll[$i]['category'] = $row['category'];
            $eventsAll[$i]['full_text'] = $row['full_text_events'];
            $eventsAll[$i]['date_events'] = $row['date_events'];
            $eventsAll[$i]['count_views_events'] = $row['count_views_events'];
            $eventsAll[$i]['img_events'] = $row['img_events'];
            $i++;

        }
        return $eventsAll;
    }
    public static function getCategory($id=1 )
    {
        // Соединение с БД
        $db = Db::getConnection();
        $sql = 'SELECT * FROM events_category WHERE id_category = (:id)';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id,PDO::PARAM_STR);
        return $result -> execute();

        while($row = $result->fetch())
        {
            $eventsAll['id'] = $row['id_category'];
            $eventsAll['category'] = $row['category'];
        }
        return $eventsAll;


//TODO: !!!!!!!!!!!!


        $db = Db::getConnection();
        $result = $db->query('SELECT title_events, events_category.category, full_text_events, date_events, count_views_events, img_events, id_category_events FROM events_afisha LEFT JOIN events_category ON events_afisha.id_category_events = events_category.id_category WHERE id_events = '. $id. ' ORDER BY date_events ASC');

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $eventsItem = $result->fetch();

        return $eventsItem;

    }
}