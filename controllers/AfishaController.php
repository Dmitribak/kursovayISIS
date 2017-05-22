<?php

include_once ROOT. '/models/Afisha.php';

class AfishaController
{
    public function actionIndex()
    {

        $eventsList = array();
        $eventsList = Afisha::getEventsList();

        require_once(ROOT . '/views/site/afisha/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $eventsItem = Afisha::getEventsItemByID($id);

            require_once(ROOT . '/views/site/afisha/view.php');
        }

        return true;

    }
}