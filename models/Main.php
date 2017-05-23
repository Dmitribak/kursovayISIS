<?php

class Main
{
    public static function sliderMain()
    {
        $db = Db::getConnection();
        $sliders_main = array();

        $result = $db -> query('SELECT `url_picture` FROM `home_page_image` ORDER BY `id_picture` ASC;');

        $i = 0;
        while($row = $result->fetch()) {
            $sliders_main['url_picture'] = $row['url_picture'];
            $i++;
        }
        return $sliders_main;
    }
}