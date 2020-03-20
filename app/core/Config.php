<?php

namespace app\core;

class Config {
    const DATETIME_FORMAT = 'd.m.Y H:i:s';
    const DATE_FORMAT = 'd.m.Y';
    const TIME_FORMAT = 'H:i:s';
    const ROOT_DIR = '';
    const DB = [
        'development' => 'mysql://root:@localhost/mvcapp',
        'production' => 'mysql://b90969ck_mvc:b90969ck_mvcc@localhost/b90969ck_mvc',
    ];
    const DB_MODE = "development";
    const MENU = [
        'home' => [
            'title' => 'На главную',
            'url' => '',
            'position' => 1,
            'visibility' => ['auth', 'nonauth'],
        ],
        'events' => [
            'title' => 'Мероприятия',
            'url' => 'events',
            'position' => 2,
            'visibility' => ['auth', 'nonauth'],
        ],
        'news' => [
            'title' => 'Новости',
            'url' => 'news',
            'position' => 3,
            'visibility' => ['auth', 'nonauth'],
        ],
        'help' => [
            'title' => 'Помощь',
            'url' => 'main/help',
            'position' => 4,
            'visibility' => ['auth', 'nonauth'],
        ],
        'contacts' => [
            'title' => 'Контакты',
            'url' => 'main/contacts',
            'position' => 5,
            'visibility' => ['auth', 'nonauth'],
        ],
        'signin' => [
            'title' => 'Войти',
            'url' => 'main/login',
            'position' => 6,
            'visibility' => ['nonauth'],
        ],
        'signup' => [
            'title' => 'Регистрация',
            'url' => 'main/registration',
            'position' => 7,
            'visibility' => ['nonauth'],
        ],
        'profile' => [
            'title' => 'Профиль',
            'url' => 'profile',
            'position' => 8,
            'visibility' => ['auth'],
            'sub' => [
                'person_data' => [
                    'title' => 'Личный кабинет',
                    'url' => 'user',
                    'position' => 1,
                    'visibility' => ['auth'],
                ],
                'orders' => [
                    'title' => 'Заявки',
                    'url' => 'orders',
                    'position' => 2,
                    'visibility' => ['auth'],
                ],
                'results' => [
                    'title' => 'Итоги',
                    'url' => 'results',
                    'position' => 3,
                    'visibility' => ['auth'],
                ],
                'logout' => [
                    'title' => 'Выход',
                    'url' => 'main/logout',
                    'position' => 4,
                    'visibility' => ['auth'],
                ],
            ]
        ]
    ];
    
}
