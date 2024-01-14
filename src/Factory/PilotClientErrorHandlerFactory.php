<?php

declare(strict_types=1);

namespace ProcessPilot\Laminas\Client\Factory;

use Laminas\ServiceManager\Factory\FactoryInterface;
use ProcessPilot\Client\ErrorHandler;
use ProcessPilot\Client\Service\PilotClientService;
use Psr\Container\ContainerInterface;

class PilotClientErrorHandlerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, string $requestedName, ?array $options = null): mixed
    {
        $pilotClientService = $container->get(PilotClientService::class);

        return new ErrorHandler($pilotClientService);
    }
}
