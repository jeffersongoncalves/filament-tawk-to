<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Настройте онлайн-чат Tawk.to для вашего сайта.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID ресурса',
            'helper' => 'ID ресурса в Tawk.to (24 символа). Его можно найти в Tawk.to в разделе Administration > Channels > Chat Widget. Оставьте пустым, чтобы скрыть чат.',
        ],
        'widget_id' => [
            'label' => 'ID виджета',
            'helper' => 'ID виджета из того же кода встраивания. Обычно «default».',
        ],
        'identify_users' => [
            'label' => 'Идентифицировать вошедших пользователей',
            'helper' => 'Передаёт в чат имя и e-mail вошедшего пользователя, чтобы операторы знали, с кем говорят.',
        ],
        'only_when_open' => [
            'label' => 'Только в рабочие часы',
            'helper' => 'Скрывает чат вне расписания jeffersongoncalves/laravel-open-hours. Игнорируется, если пакет не установлен.',
        ],
    ],
];
