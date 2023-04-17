<?php

return [
    'plugin' => [
        'name' => 'Сторонний код',
        'description' => 'Предоставляет инструмент для управления сторонним кодом.',
    ],
    'components' => [
        'codes' => [
            'name' => 'Код',
            'description' => 'Выводит код',
            'properties' => [
                'target' => [
                    'title' => 'Цель',
                    'description' => 'Значение цели, код которой нужно вывести',
                ],
            ],
        ],
    ],
    'code' => [
        'name' => 'Код',
        'pages' => [
            'index' => [
                'title' => 'Код',
                'breadcrumb' => 'Код',
            ],
            'preview' => [
                'title' => 'Просмотр кода',
                'breadcrumb' => 'Просмотр кода',
            ],
            'create' => [
                'title' => 'Создание кода',
                'breadcrumb' => 'Создание кода',
            ],
            'update' => [
                'title' => 'Обновление кода',
                'breadcrumb' => 'Обновление кода',
            ],
            'reorder' => [
                'title' => 'Сортировка кода',
                'breadcrumb' => 'Сортировка кода',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Название',
                'comment' => 'Отображается только в админ панели',
                'placeholder' => 'Сторонний сервис',
            ],
            'is_enabled' => [
                'label' => 'Включено',
                'comment' => 'Отображать код',
            ],
            'code' => [
                'label' => 'Код',
                'comment' => 'HTML-код',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
            'target' => [
                'label' => 'Цель',
                'comment' => 'В каких компонентах отображать код',
            ],
            'sort_order' => [
                'label' => 'Порядок',
            ],
        ],
    ],
];
