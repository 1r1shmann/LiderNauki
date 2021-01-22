<?php

namespace app\core;

class Config {

    const DATETIME_FORMAT = 'd.m.Y H:i:s';
    const DATE_FORMAT = 'd.m.Y';
    const TIME_FORMAT = 'H:i:s';
    const ROOT_DIR = '';
    const DB = [
        'development' => 'mysql://root:@localhost/mvcapp',
        'production' => 'mysql://id7925547_dizkod:p1a2s3s4Wor-d@localhost/id7925547_dizkod',
    ];
    const DB_MODE = "development";
    const SMTP_HOST = 'smtp.mail.ru';
    const SMTP_LOGIN = 'lidernauki.ru@mail.ru';
    const SMTP_PASS = 'KdAPOp4opm4]';
    const SMTP_PORT = '465';
    const SMTP_EMAIL = 'lidernauki.ru@mail.ru';
    const SMTP_EMAIL_NAME = 'Ассоциация "Лидер Науки"';
    const SMTP_CHARSET = 'UTF-8';


    const MENU_NON_AUTH = [
        'home' => [
            'title' => 'На главную',
            'url' => '',
        ],
        'events' => [
            'title' => 'Мероприятия',
            'url' => 'events',
        ],
        'news' => [
            'title' => 'Новости',
            'url' => 'news',
        ],
        'contacts' => [
            'title' => 'Контакты',
            'url' => 'main/contacts',
        ],
        'signin' => [
            'title' => 'Войти',
            'url' => 'main/login',
        ],
        'signup' => [
            'title' => 'Регистрация',
            'url' => 'main/registration',
        ],
    ];
    const MENU_AUTH = [
        'home' => [
            'title' => 'На главную',
            'url' => '',
            'visibility' => [],
            'banned' => [],
        ],
        'events' => [
            'title' => 'Мероприятия',
            'url' => 'events',
            'visibility' => [],
            'banned' => [],
        ],
        'news' => [
            'title' => 'Новости',
            'url' => 'news',
            'visibility' => [],
            'banned' => [],
        ],
        'contacts' => [
            'title' => 'Контакты',
            'url' => 'main/contacts',
            'visibility' => [],
            'banned' => [],
        ],
        'profile' => [
            'title' => 'Профиль',
            'url' => 'profile',
            'visibility' => ['basic_auth'],
            'banned' => [],
            'sub' => [
                'person_data' => [
                    'title' => 'Личный кабинет',
                    'url' => 'user',
                    'visibility' => ['basic_auth'],
                    'banned' => [],
                ],
                'orders' => [
                    'title' => 'Заявки',
                    'url' => 'orders',
                    'visibility' => ['basic_auth'],
                    'banned' => [],
                ],
                'results' => [
                    'title' => 'Итоги',
                    'url' => 'results',
                    'visibility' => ['basic_auth'],
                    'banned' => [],
                ],
                'settings' => [
                    'title' => 'Настройки',
                    'url' => 'user/settings',
                    'visibility' => ['basic_auth'],
                    'banned' => [],
                ],
                'admin_panel' => [
                    'title' => 'Админ-панель',
                    'url' => 'admin',
                    'visibility' => ['admin'],
                    'banned' => [],
                ],
                'logout' => [
                    'title' => 'Выход',
                    'url' => 'main/logout',
                    'visibility' => ['basic_auth'],
                    'banned' => [],
                ],
            ]
        ]
    ];

}
