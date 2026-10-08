<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Configura el chat en vivo de Tawk.to en tu sitio.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID de la propiedad',
            'helper' => 'El ID de la propiedad en Tawk.to (24 caracteres). Encuéntralo en Tawk.to, en Administration > Channels > Chat Widget. Déjalo vacío para ocultar el chat.',
        ],
        'widget_id' => [
            'label' => 'ID del widget',
            'helper' => 'El ID del widget, del mismo código de inserción. Normalmente "default".',
        ],
        'identify_users' => [
            'label' => 'Identificar a los usuarios conectados',
            'helper' => 'Envía el nombre y el correo del usuario conectado al chat, para que tus agentes sepan con quién hablan.',
        ],
        'only_when_open' => [
            'label' => 'Solo en horario de atención',
            'helper' => 'Oculta el chat fuera del horario de jeffersongoncalves/laravel-open-hours. Se ignora si ese paquete no está instalado.',
        ],
    ],
];
