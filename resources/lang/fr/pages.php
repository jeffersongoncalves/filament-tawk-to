<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Configurez le chat en direct Tawk.to de votre site.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID de la propriété',
            'helper' => 'L\'ID de votre propriété Tawk.to (24 caractères). Vous le trouverez dans Tawk.to, sous Administration > Channels > Chat Widget. Laissez vide pour masquer le chat.',
        ],
        'widget_id' => [
            'label' => 'ID du widget',
            'helper' => 'L\'ID du widget, dans le même code d\'intégration. En général « default ».',
        ],
        'identify_users' => [
            'label' => 'Identifier les utilisateurs connectés',
            'helper' => 'Envoie le nom et l\'e-mail de l\'utilisateur connecté au chat, pour que vos agents sachent à qui ils parlent.',
        ],
        'only_when_open' => [
            'label' => 'Uniquement pendant les heures d\'ouverture',
            'helper' => 'Masque le chat en dehors des horaires de jeffersongoncalves/laravel-open-hours. Ignoré si ce paquet n\'est pas installé.',
        ],
    ],
];
