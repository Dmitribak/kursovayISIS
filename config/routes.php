<?php
return array(

    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    'afisha/([0-9]+)' => 'afisha/view/$1',
    'afisha' => 'afisha/index',

//Работа с авторизацией
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user/forgot' => 'user/forgot',


    'main' => 'main/index',
    '' => 'main/index',
);