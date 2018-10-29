<?php
return [
    'components' => [
        'db' => require_once('conf.d/db.php'),
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
