<?php

declare(strict_types=1);

use ProcessPilot\Client\ErrorHandler;
use ProcessPilot\Client\Service\PilotClientService;
use ProcessPilot\Client\Settings;
use ProcessPilot\Laminas\Client\Factory\PilotClientErrorHandlerFactory;
use ProcessPilot\Laminas\Client\Factory\PilotClientServiceFactory;
use ProcessPilot\Laminas\Client\Factory\SettingsFactory;

return [
    'process-pilot'   => [
        'host'         => 'process-pilot.com',
        'project_hash' => '',
        'project_id'   => '',
        'enabled'      => true,
    ],
    'service-manager' => [
        'factories' => [
            Settings::class           => SettingsFactory::class,
            PilotClientService::class => PilotClientServiceFactory::class,
            ErrorHandler::class       => PilotClientErrorHandlerFactory::class,
        ],
    ],
];
