<?php
return [
    'routes' => [
        '~^$~' => [\Controllers\newsController::class, 'news'],

        '~^news/$~' => [\Controllers\newsController::class, 'news'],
        '~^news/([0-9]+)/$~' => [\Controllers\newsController::class, 'onePage'],
        '~^news/page_([0-9]+)/$~' => [\Controllers\newsController::class, 'news'],
        '~^news/delete/([0-9]+)/$~' => [\Controllers\newsController::class, 'delete'],

        '~^author/$~' => [\Controllers\authorController::class, 'index'],
        '~^author/page_([0-9]+)/$~' => [\Controllers\authorController::class, 'index'],
    ],
    'count_in_page' => 2,  //Количество новостей или Авторов выводимых на страницу
];
