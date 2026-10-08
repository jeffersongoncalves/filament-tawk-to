<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Tawk.to सेटिंग्स',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'अपनी साइट के लिए Tawk.to लाइव चैट कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'प्रॉपर्टी ID',
            'helper' => 'आपकी Tawk.to प्रॉपर्टी ID (24 अक्षर)। इसे Tawk.to में Administration > Channels > Chat Widget में पाएँ। चैट छिपाने के लिए खाली छोड़ें।',
        ],
        'widget_id' => [
            'label' => 'विजेट ID',
            'helper' => 'उसी एम्बेड कोड से विजेट ID। आमतौर पर "default"।',
        ],
        'identify_users' => [
            'label' => 'साइन-इन उपयोगकर्ताओं की पहचान करें',
            'helper' => 'साइन-इन उपयोगकर्ता का नाम और ईमेल चैट को भेजता है, ताकि आपके एजेंट जानें कि वे किससे बात कर रहे हैं।',
        ],
        'only_when_open' => [
            'label' => 'केवल कार्य समय में',
            'helper' => 'jeffersongoncalves/laravel-open-hours के समय के बाहर चैट छिपाता है। पैकेज इंस्टॉल न होने पर अनदेखा किया जाता है।',
        ],
    ],
];
