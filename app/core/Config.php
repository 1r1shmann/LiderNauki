<?php

    return [
        'DATETIME_FORMAT' => 'd.m.Y H:i:s',
        'DATE_FORMAT' => 'd.m.Y',
        'TIME_FORMAT' => 'H:i:s',
        'db' => [
            'development' => 'mysql://root:@localhost/mvcapp',
            'production' => 'mysql://root:@localhost/mvcapp',
        ],
        'menu' => [
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
                'url' => 'help',
                'position' => 4,
                'visibility' => ['auth', 'nonauth'],
            ],
            'contacts' => [
                'title' => 'Контакты',
                'url' => 'contacts',
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
                    'results' => [
                        'title' => 'Итоги',
                        'url' => 'results',
                        'position' => 2,
                        'visibility' => ['auth'],
                    ],
                    'orders' => [
                        'title' => 'Заявки',
                        'url' => 'orders',
                        'position' => 3,
                        'visibility' => ['auth'],
                    ],
                    'institution' => [
                        'title' => 'Учреждения',
                        'url' => 'institutions',
                        'position' => 4,
                        'visibility' => ['auth'],
                    ],
                    'teachers' => [
                        'title' => 'Преподаватели',
                        'url' => 'teachers',
                        'position' => 5,
                        'visibility' => ['auth'],
                    ],
                    'members' => [
                        'title' => 'Участники',
                        'url' => 'members',
                        'position' => 6,
                        'visibility' => ['auth'],
                    ],
                    'logout' => [
                        'title' => 'Выход',
                        'url' => 'main/logout',
                        'position' => 7,
                        'visibility' => ['auth'],
                    ],
                ]
            ]
        ],
    ];
