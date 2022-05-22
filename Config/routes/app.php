<?php


return [
    'routes' => [
        'User' => Alex\App\Components\User\Controller\Index::class
    ],

    'defaultPage' => [
        'error' => Alex\App\Components\Error\Controller\Index::class
    ],
];
