<?php

namespace App\Core;

class Config {

    public $menu = [
        'home' => [
            'title' => 'На главную',
            'url' => '',
            'position' => 1,
            'auth_required' => false,
        ],
        'events' => [
            'title' => 'Мероприятия',
            'url' => '',
            'position' => 2,
            'auth_required' => false,
        ],
        'news' => [
            'title' => 'Новости',
            'url' => '',
            'position' => 3,
            'auth_required' => false,
        ],
        'help' => [
            'title' => 'Помощь',
            'url' => '',
            'position' => 4,
            'auth_required' => false,
        ],
        'contacts' => [
            'title' => 'Контакты',
            'url' => '',
            'position' => 5,
            'auth_required' => false,
        ],
        'signin' => [
            'title' => 'Войти',
            'url' => '',
            'position' => 6,
            'auth_required' => false,
        ],
        'signup' => [
            'title' => 'Регистрация',
            'url' => '',
            'position' => 7,
            'auth_required' => false,
        ],
        'profile' => [
            'title' => '',
            'url' => '#',
            'position' => 8,
            'auth_required' => true,
            'sub' => [
                'person_data' => [
                    'title' => 'Личные данные',
                    'url' => '',
                    'position' => 1,
                    'auth_required' => true,
                ],
                'results' => [
                    'title' => 'Итоги',
                    'url' => '',
                    'position' => 2,
                    'auth_required' => true,
                ],
                'orders' => [
                    'title' => 'Заявки',
                    'url' => '',
                    'position' => 3,
                    'auth_required' => true,
                ],
                'institution' => [
                    'title' => 'Учреждения',
                    'url' => '',
                    'position' => 4,
                    'auth_required' => true,
                ],
                'teachers' => [
                    'title' => 'Преподаватели',
                    'url' => '',
                    'position' => 5,
                    'auth_required' => true,
                ],
                'members' => [
                    'title' => 'Участники',
                    'url' => '',
                    'position' => 6,
                    'auth_required' => true,
                ],
                'logout' => [
                    'title' => 'Выход',
                    'url' => '',
                    'position' => 7,
                    'auth_required' => true,
                ],
            ]
        ]
    ];

}
