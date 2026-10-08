<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Tawk.to sozlamalari',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Saytingiz uchun Tawk.to jonli chatini sozlang.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Mulk ID',
            'helper' => 'Tawk.to mulk ID’ingiz (24 belgi). Tawk.to ichida Administration > Channels > Chat Widget bo‘limida topasiz. Chatni yashirish uchun bo‘sh qoldiring.',
        ],
        'widget_id' => [
            'label' => 'Vidjet ID',
            'helper' => 'Xuddi shu joylashtirish kodidagi vidjet ID’si. Odatda "default".',
        ],
        'identify_users' => [
            'label' => 'Tizimga kirgan foydalanuvchilarni aniqlash',
            'helper' => 'Tizimga kirgan foydalanuvchining ismi va e-pochtasini chatga yuboradi, shunda operatorlar kim bilan gaplashayotganini biladi.',
        ],
        'only_when_open' => [
            'label' => 'Faqat ish vaqtida',
            'helper' => 'jeffersongoncalves/laravel-open-hours jadvalidan tashqarida chatni yashiradi. Paket o‘rnatilmagan bo‘lsa, e’tiborga olinmaydi.',
        ],
    ],
];
