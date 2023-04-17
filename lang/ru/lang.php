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
];
