<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'modules' => [
		'social' => [
			'class' => 'kartik\social\Module',
				'twitter' => [
				'screenName' => '@KaratelZop'
				],
        ],
	],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'sBFpQpRdNfQsr9j5iw-SAdcDS4QMmJxQ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'urlManager' => [
            'showScriptName' => false,
            'enablePrettyUrl' => true
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => [
    'twitterApiKey' => 'EHRpp6GnJZcFRe4qyLhHhzWrK',
    'twitterApiSecret' => 'xc4wcoTnDSUpBwW04QhBUQdoa1E89G7EnqMXtw1pXP6RvL4VW7',
    'twitterAccessToken' => '2906458007-WnAwT66kFBPU7G8vUiGkW3vbVq47d7gpqCg2e8A',
    'twitterAccessTokenSecret' => '8IfRApvV3E9NDOLtmTFW9P9K6ajrNtyN1VjiuwNSDeksu'
	],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
