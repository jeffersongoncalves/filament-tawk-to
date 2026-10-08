<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Skonfiguruj czat na żywo Tawk.to w swojej witrynie.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID właściwości',
            'helper' => 'ID właściwości w Tawk.to (24 znaki). Znajdziesz go w Tawk.to w Administration > Channels > Chat Widget. Pozostaw puste, aby ukryć czat.',
        ],
        'widget_id' => [
            'label' => 'ID widżetu',
            'helper' => 'ID widżetu z tego samego kodu osadzania. Zwykle „default”.',
        ],
        'identify_users' => [
            'label' => 'Identyfikuj zalogowanych użytkowników',
            'helper' => 'Wysyła imię i e-mail zalogowanego użytkownika do czatu, aby konsultanci wiedzieli, z kim rozmawiają.',
        ],
        'only_when_open' => [
            'label' => 'Tylko w godzinach otwarcia',
            'helper' => 'Ukrywa czat poza godzinami z jeffersongoncalves/laravel-open-hours. Ignorowane, gdy ten pakiet nie jest zainstalowany.',
        ],
    ],
];
