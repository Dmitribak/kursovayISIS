<?php
return array(

    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',

//Работа с авторизацией
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user/forgot' => 'user/forgot',

//Админка
    'admin/afishacategory/delete/([0-9]+)' => 'admin/categoryDelete/$1',
    'admin/afishacategory'=> 'admin/afishacategory',
    'admin/afishaedit' => 'admin/afishaedit',
    'admin' => 'admin/index',
    'admin/afishacategorycreate' => 'admin/afishacategorycreate',
//Остатки
    'main' => 'main/index',
    '' => 'main/index',

//Работа с афишей
    'afisha/all' => 'afisha/allevents',
    'afisha/([0-9]+)' => 'afisha/view/$1',
    'afisha' => 'afisha/index',

    );