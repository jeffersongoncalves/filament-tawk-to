<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Tawk.to',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Налаштуйте онлайн-чат Tawk.to для вашого сайту.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID ресурсу',
            'helper' => 'ID ресурсу в Tawk.to (24 символи). Його можна знайти в Tawk.to у розділі Administration > Channels > Chat Widget. Залиште порожнім, щоб приховати чат.',
        ],
        'widget_id' => [
            'label' => 'ID віджета',
            'helper' => 'ID віджета з того самого коду вбудовування. Зазвичай «default».',
        ],
        'identify_users' => [
            'label' => 'Ідентифікувати користувачів, що увійшли',
            'helper' => 'Передає в чат ім’я та e-mail користувача, що увійшов, щоб оператори знали, з ким говорять.',
        ],
        'only_when_open' => [
            'label' => 'Лише в робочі години',
            'helper' => 'Приховує чат поза розкладом jeffersongoncalves/laravel-open-hours. Ігнорується, якщо пакет не встановлено.',
        ],
    ],
];
