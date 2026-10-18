<?php

if (getenv('ENVIRONMENT') !== 'local') {
    return [];
}

return [
    'bootstrap' => [
        function () {
            Craft::$app->getConfig()->getGeneral()->runQueueAutomatically = false;
        },
    ],
    'components' => [
        'mailer' => function () {
            $config = \craft\helpers\App::mailerConfig();
            $config['useFileTransport'] = true;
            return Craft::createObject($config);
        },
    ],
];
