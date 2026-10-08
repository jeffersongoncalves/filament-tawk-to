<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'گفتگوی زنده Tawk.to را برای سایت خود پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'شناسه دارایی',
            'helper' => 'شناسه دارایی شما در Tawk.to (۲۴ نویسه). آن را در Tawk.to در بخش Administration > Channels > Chat Widget پیدا کنید. برای پنهان کردن گفتگو خالی بگذارید.',
        ],
        'widget_id' => [
            'label' => 'شناسه ویجت',
            'helper' => 'شناسه ویجت از همان کد جاسازی. معمولاً "default".',
        ],
        'identify_users' => [
            'label' => 'شناسایی کاربران واردشده',
            'helper' => 'نام و ایمیل کاربر واردشده را به گفتگو می‌فرستد تا کارشناسان بدانند با چه کسی صحبت می‌کنند.',
        ],
        'only_when_open' => [
            'label' => 'فقط در ساعات کاری',
            'helper' => 'گفتگو را خارج از برنامه jeffersongoncalves/laravel-open-hours پنهان می‌کند. اگر این بسته نصب نباشد نادیده گرفته می‌شود.',
        ],
    ],
];
