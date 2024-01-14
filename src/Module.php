<?php

declare(strict_types=1);

namespace ProcessPilot\Laminas\Client;

use Laminas\EventManager\EventInterface;
use Laminas\ModuleManager\Feature\BootstrapListenerInterface;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use ProcessPilot\Client\ErrorHandler;

use function dirname;

use const DIRECTORY_SEPARATOR;

final class Module implements ConfigProviderInterface, BootstrapListenerInterface
{
    public function getConfig(): array
    {
        return include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'module.config.php';
    }

    public function onBootstrap(EventInterface $e): void
    {
        $application    = $e->getApplication();
        $serviceManager = $application->getServiceManager();

        /** @var ErrorHandler $errorHandler */
        $errorHandler = $serviceManager->get(ErrorHandler::class);
        $errorHandler->register();
    }
}
