<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'اضبط الدردشة المباشرة Tawk.to لموقعك.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'معرّف الخاصية',
            'helper' => 'معرّف الخاصية في Tawk.to (24 حرفًا). تجده في Tawk.to ضمن Administration > Channels > Chat Widget. اتركه فارغًا لإخفاء الدردشة.',
        ],
        'widget_id' => [
            'label' => 'معرّف الأداة',
            'helper' => 'معرّف الأداة من رمز التضمين نفسه. عادةً "default".',
        ],
        'identify_users' => [
            'label' => 'تعريف المستخدمين المسجّلين',
            'helper' => 'يرسل اسم المستخدم المسجّل وبريده الإلكتروني إلى الدردشة ليعرف موظفوك مع من يتحدثون.',
        ],
        'only_when_open' => [
            'label' => 'فقط خلال ساعات العمل',
            'helper' => 'يخفي الدردشة خارج جدول jeffersongoncalves/laravel-open-hours. يُتجاهل إذا لم تكن الحزمة مثبتة.',
        ],
    ],
];
