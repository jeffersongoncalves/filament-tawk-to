<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => '设置',
    'title' => 'Tawk.to 设置',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => '为你的网站配置 Tawk.to 在线聊天。',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => '属性 ID',
            'helper' => '你的 Tawk.to 属性 ID（24 个字符）。 可在 Tawk.to 的 Administration > Channels > Chat Widget 中找到。 留空则隐藏聊天。',
        ],
        'widget_id' => [
            'label' => '小部件 ID',
            'helper' => '同一嵌入代码中的小部件 ID，通常为“default”。',
        ],
        'identify_users' => [
            'label' => '识别已登录用户',
            'helper' => '将已登录用户的姓名和邮箱发送到聊天，让客服知道正在与谁交谈。',
        ],
        'only_when_open' => [
            'label' => '仅在营业时间内',
            'helper' => '在 jeffersongoncalves/laravel-open-hours 的营业时间之外隐藏聊天。未安装该包时忽略。',
        ],
    ],
];
