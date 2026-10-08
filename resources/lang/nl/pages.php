<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Instellingen',
    'title' => 'Tawk.to-instellingen',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Configureer de Tawk.to-livechat voor je site.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Property-ID',
            'helper' => 'Je Tawk.to-property-ID (24 tekens). Te vinden in Tawk.to onder Administration > Channels > Chat Widget. Laat leeg om de chat te verbergen.',
        ],
        'widget_id' => [
            'label' => 'Widget-ID',
            'helper' => 'De widget-ID uit dezelfde insluitcode. Meestal "default".',
        ],
        'identify_users' => [
            'label' => 'Ingelogde gebruikers identificeren',
            'helper' => 'Stuurt de naam en het e-mailadres van de ingelogde gebruiker naar de chat, zodat je medewerkers weten met wie ze praten.',
        ],
        'only_when_open' => [
            'label' => 'Alleen tijdens openingstijden',
            'helper' => 'Verbergt de chat buiten de openingstijden van jeffersongoncalves/laravel-open-hours. Wordt genegeerd als dat pakket niet is geïnstalleerd.',
        ],
    ],
];
