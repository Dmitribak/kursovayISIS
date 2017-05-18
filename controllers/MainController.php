<?php

include_once ROOT. '/models/Main.php';

class MainController
{
    public function actionIndex()
    {

        $newsList = array();
        $newsList = Main::getNewsList();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }
}