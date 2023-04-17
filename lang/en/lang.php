<?php

return [
    'plugin' => [
        'name' => 'Third Party Code',
        'description' => 'Provides third party code management tool.',
    ],
    'components' => [
        'codes' => [
            'name' => 'Codes',
            'description' => 'Outputs codes',
            'properties' => [
                'target' => [
                    'title' => 'Target',
                    'description' => 'The value of the target which code needs to output',
                ],
            ],
        ],
    ],
];
