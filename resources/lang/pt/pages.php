<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Configure o chat em direto do Tawk.to no seu site.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID da propriedade',
            'helper' => 'O ID da propriedade no Tawk.to (24 caracteres). Encontre-o em Tawk.to, em Administration > Channels > Chat Widget. Deixe vazio para ocultar o chat.',
        ],
        'widget_id' => [
            'label' => 'ID do widget',
            'helper' => 'O ID do widget, do mesmo código de incorporação. Normalmente "default".',
        ],
        'identify_users' => [
            'label' => 'Identificar utilizadores autenticados',
            'helper' => 'Envia o nome e o e-mail do utilizador autenticado para o chat, para os agentes saberem com quem estão a falar.',
        ],
        'only_when_open' => [
            'label' => 'Apenas no horário de atendimento',
            'helper' => 'Oculta o chat fora do horário definido no jeffersongoncalves/laravel-open-hours. Ignorado quando esse pacote não está instalado.',
        ],
    ],
];
