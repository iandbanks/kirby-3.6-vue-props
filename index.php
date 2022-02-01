<?php
Kirby::plugin('iandbanks/imagerandomizer', [
    'sections' => [
        'imagerandomizer' => [
            'props' => [
                'src' => function () {
                    return "https://source.unsplash.com/random/300x300?technology";
                },
                'src2' => function () {
                    return "https://source.unsplash.com/random/300x300?fruit";
                }
            ]
        ],
        'todos' => [
            'props' => [
                'title' => 'Todos',
                'todos' => [
                    'Buy milk',
                    'Try Kirby 3.6'
                ]
            ]
        ],
    ],
    'areas' => [
        'todos' => function ($kirby) {
            return [
                // label for the menu and the breadcrumb
                'label' => 'Todos',

                // icon for the menu and breadcrumb
                'icon' => 'check',

                // optional replacement for the breadcrumb label
                'breadcrumbLabel' => function () {
                    return '12 Todos';
                },

                // show / hide from the menu
                'menu' => true,

                // link to the main area view
                'link' => 'todos',

                // views
                'views' => [
                    [
                        'pattern' => 'todos',
                        'action'  => function () {
                            return [
                                'component' => 'k-todo-view',
                                'props' => [
                                    'title' => 'Todos',
                                    'todos' => [
                                        'Buy milk',
                                        'Try Kirby 3.6'
                                    ]
                                ]
                            ];
  }
                    ]
                ]
            ];
        }
    ]
]);
