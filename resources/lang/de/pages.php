<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Einstellungen',
    'title' => 'Tawk.to-Einstellungen',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Konfigurieren Sie den Tawk.to-Live-Chat für Ihre Website.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Property-ID',
            'helper' => 'Ihre Tawk.to-Property-ID (24 Zeichen). Zu finden in Tawk.to unter Administration > Channels > Chat Widget. Leer lassen, um den Chat auszublenden.',
        ],
        'widget_id' => [
            'label' => 'Widget-ID',
            'helper' => 'Die Widget-ID aus demselben Einbettungscode. Meist "default".',
        ],
        'identify_users' => [
            'label' => 'Angemeldete Benutzer identifizieren',
            'helper' => 'Übermittelt Name und E-Mail des angemeldeten Benutzers an den Chat, damit Ihre Mitarbeiter wissen, mit wem sie sprechen.',
        ],
        'only_when_open' => [
            'label' => 'Nur während der Öffnungszeiten',
            'helper' => 'Blendet den Chat außerhalb der Zeiten aus jeffersongoncalves/laravel-open-hours aus. Wird ignoriert, wenn das Paket nicht installiert ist.',
        ],
    ],
];
