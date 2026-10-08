<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Parametrlər',
    'title' => 'Tawk.to parametrləri',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Saytınız üçün Tawk.to canlı çatını tənzimləyin.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Mülk ID',
            'helper' => 'Tawk.to mülk ID-niz (24 simvol). Tawk.to daxilində Administration > Channels > Chat Widget bölməsində tapılır. Çatı gizlətmək üçün boş buraxın.',
        ],
        'widget_id' => [
            'label' => 'Vidjet ID',
            'helper' => 'Eyni yerləşdirmə kodundakı vidjet ID-si. Adətən "default".',
        ],
        'identify_users' => [
            'label' => 'Daxil olmuş istifadəçiləri tanı',
            'helper' => 'Daxil olmuş istifadəçinin adını və e-poçtunu çata göndərir ki, operatorlarınız kiminlə danışdıqlarını bilsin.',
        ],
        'only_when_open' => [
            'label' => 'Yalnız iş saatlarında',
            'helper' => 'jeffersongoncalves/laravel-open-hours cədvəlindən kənarda çatı gizlədir. Paket quraşdırılmayıbsa nəzərə alınmır.',
        ],
    ],
];
