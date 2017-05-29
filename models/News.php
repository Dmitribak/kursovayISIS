<?php

class News
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
            $result = $db->query('SELECT title_events, events_category.category, full_text_events, date_events, count_views_events, img_events FROM events_afisha LEFT JOIN events_category ON events_afisha.id_category_events = events_category.id_category WHERE id_events = '. $id. ' ORDER BY date_events ASC');

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $eventsItem = $result->fetch();

            return $eventsItem;
        }

    }
}