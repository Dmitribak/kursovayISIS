<?php

include_once ROOT. '/models/Main.php';
include_once ROOT. '/models/Afisha.php';

class MainController
{
    public function actionIndex()
    {

        $eventsList = array();
        $eventsList = Afisha::getEventsList();

        $sliders_main = array();
        $sliders_main = Main::sliderMain();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }
}