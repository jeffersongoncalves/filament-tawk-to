<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Configura la chat dal vivo di Tawk.to per il tuo sito.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID della proprietà',
            'helper' => 'L\'ID della proprietà Tawk.to (24 caratteri). Lo trovi in Tawk.to, in Administration > Channels > Chat Widget. Lascia vuoto per nascondere la chat.',
        ],
        'widget_id' => [
            'label' => 'ID del widget',
            'helper' => 'L\'ID del widget, dallo stesso codice di incorporamento. Di solito "default".',
        ],
        'identify_users' => [
            'label' => 'Identifica gli utenti connessi',
            'helper' => 'Invia nome ed e-mail dell\'utente connesso alla chat, così i tuoi operatori sanno con chi stanno parlando.',
        ],
        'only_when_open' => [
            'label' => 'Solo negli orari di apertura',
            'helper' => 'Nasconde la chat fuori dagli orari di jeffersongoncalves/laravel-open-hours. Ignorato se il pacchetto non è installato.',
        ],
    ],
];
