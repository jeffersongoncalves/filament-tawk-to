<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Ayarlar',
    'title' => 'Tawk.to ayarları',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Siteniz için Tawk.to canlı sohbetini yapılandırın.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Mülk kimliği',
            'helper' => 'Tawk.to mülk kimliğiniz (24 karakter). Tawk.to içinde Administration > Channels > Chat Widget altında bulunur. Sohbeti gizlemek için boş bırakın.',
        ],
        'widget_id' => [
            'label' => 'Widget kimliği',
            'helper' => 'Aynı yerleştirme kodundaki widget kimliği. Genellikle "default".',
        ],
        'identify_users' => [
            'label' => 'Oturum açmış kullanıcıları tanımla',
            'helper' => 'Oturum açmış kullanıcının adını ve e-postasını sohbete gönderir; böylece temsilcileriniz kiminle konuştuğunu bilir.',
        ],
        'only_when_open' => [
            'label' => 'Yalnızca çalışma saatlerinde',
            'helper' => 'jeffersongoncalves/laravel-open-hours çalışma saatleri dışında sohbeti gizler. Paket yüklü değilse yok sayılır.',
        ],
    ],
];
