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
    const DB_MODE = "production";
    const MENU = [
        'home' => [
            'title' => 'На главную',
            'url' => '',
            'visibility' => [],
        ],
        'events' => [
            'title' => 'Мероприятия',
            'url' => 'events',
            'visibility' => [],
        ],
        'news' => [
            'title' => 'Новости',
            'url' => 'news',
            'visibility' => [],
        ],
        'help' => [
            'title' => 'Помощь',
            'url' => 'main/help',
            'visibility' => [],
        ],
        'contacts' => [
            'title' => 'Контакты',
            'url' => 'main/contacts',
            'visibility' => [],
        ],
        'signin' => [
            'title' => 'Войти',
            'url' => 'main/login',
            'visibility' => [],
        ],
        'signup' => [
            'title' => 'Регистрация',
            'url' => 'main/registration',
            'visibility' => [],
        ],
        'profile' => [
            'title' => 'Профиль',
            'url' => 'profile',
            'visibility' => ['auth'],
            'sub' => [
                'person_data' => [
                    'title' => 'Личный кабинет',
                    'url' => 'user',
                    'visibility' => ['basic_auth'],
                ],
                'orders' => [
                    'title' => 'Заявки',
                    'url' => 'orders',
                    'visibility' => ['basic_auth'],
                ],
                'results' => [
                    'title' => 'Итоги',
                    'url' => 'results',
                    'visibility' => ['basic_auth'],
                ],
                'settings' => [
                    'title' => 'Настройки',
                    'url' => 'user/settings',
                    'visibility' => ['basic_auth'],
                ],
                'admin_panel' => [
                    'title' => 'Админ-панель',
                    'url' => 'admin',
                    'visibility' => ['admin'],
                ],
                'logout' => [
                    'title' => 'Выход',
                    'url' => 'main/logout',
                    'visibility' => ['basic_auth'],
                ],
            ]
        ]
    ];
    
}
