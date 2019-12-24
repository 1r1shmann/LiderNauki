<?php

    return [
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
                'url' => '',
                'position' => 2,
                'visibility' => ['auth', 'nonauth'],
            ],
            'news' => [
                'title' => 'Новости',
                'url' => '',
                'position' => 3,
                'visibility' => ['auth', 'nonauth'],
            ],
            'help' => [
                'title' => 'Помощь',
                'url' => '',
                'position' => 4,
                'visibility' => ['auth', 'nonauth'],
            ],
            'contacts' => [
                'title' => 'Контакты',
                'url' => '',
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
                'url' => '',
                'position' => 7,
                'visibility' => ['nonauth'],
            ],
            'profile' => [
                'title' => 'Профиль',
                'url' => 'user',
                'position' => 8,
                'visibility' => ['auth'],
                'sub' => [
                    'person_data' => [
                        'title' => 'Личные кабинет',
                        'url' => 'user',
                        'position' => 1,
                        'visibility' => ['auth'],
                    ],
                    'results' => [
                        'title' => 'Итоги',
                        'url' => '',
                        'position' => 2,
                        'visibility' => ['auth'],
                    ],
                    'orders' => [
                        'title' => 'Заявки',
                        'url' => '',
                        'position' => 3,
                        'visibility' => ['auth'],
                    ],
                    'institution' => [
                        'title' => 'Учреждения',
                        'url' => '',
                        'position' => 4,
                        'visibility' => ['auth'],
                    ],
                    'teachers' => [
                        'title' => 'Преподаватели',
                        'url' => '',
                        'position' => 5,
                        'visibility' => ['auth'],
                    ],
                    'members' => [
                        'title' => 'Участники',
                        'url' => '',
                        'position' => 6,
                        'visibility' => ['auth'],
                    ],
                    'logout' => [
                        'title' => 'Выход',
                        'url' => '',
                        'position' => 7,
                        'visibility' => ['auth'],
                    ],
                ]
            ]
        ],
    ];
