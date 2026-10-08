<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => 'Settings',
    'title' => 'Tawk.to Settings',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'Configure the Tawk.to live chat widget for your site.',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Property ID',
            'helper' => 'Your Tawk.to property ID (24 characters). Find it in Tawk.to under Administration > Channels > Chat Widget. Leave empty to hide the chat.',
        ],
        'widget_id' => [
            'label' => 'Widget ID',
            'helper' => 'The widget ID from the same embed code. Usually "default".',
        ],
        'identify_users' => [
            'label' => 'Identify signed-in users',
            'helper' => 'Send the name and email of the signed-in user to the chat, so your agents know who they are talking to.',
        ],
        'only_when_open' => [
            'label' => 'Only during opening hours',
            'helper' => 'Hide the chat outside the schedule of jeffersongoncalves/laravel-open-hours. Ignored when that package is not installed.',
        ],
    ],
];
