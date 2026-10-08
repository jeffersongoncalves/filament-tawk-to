<?php

return [
    'navigation_label' => 'Tawk.to',
    'navigation_group' => '設定',
    'title' => 'Tawk.to 設定',
    'sections' => [
        'tawk_to' => [
            'heading' => 'Tawk.to',
            'description' => 'サイトの Tawk.to ライブチャットを設定します。',
        ],
    ],
    'fields' => [
        'property_id' => [
            'label' => 'プロパティ ID',
            'helper' => 'Tawk.to のプロパティ ID（24 文字）。 Tawk.to の Administration > Channels > Chat Widget で確認できます。 チャットを非表示にするには空のままにします。',
        ],
        'widget_id' => [
            'label' => 'ウィジェット ID',
            'helper' => '同じ埋め込みコードにあるウィジェット ID。通常は「default」です。',
        ],
        'identify_users' => [
            'label' => 'ログイン中のユーザーを識別',
            'helper' => 'ログイン中のユーザーの名前とメールアドレスをチャットに送信し、担当者が相手を把握できるようにします。',
        ],
        'only_when_open' => [
            'label' => '営業時間中のみ',
            'helper' => 'jeffersongoncalves/laravel-open-hours の営業時間外はチャットを非表示にします。パッケージ未インストール時は無視されます。',
        ],
    ],
];
