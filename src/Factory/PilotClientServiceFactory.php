<?php

declare(strict_types=1);

namespace ProcessPilot\Laminas\Client\Factory;

use Laminas\ServiceManager\Factory\FactoryInterface;
use ProcessPilot\Client\Service\PilotClientService;
use ProcessPilot\Client\Settings;
use Psr\Container\ContainerInterface;

class PilotClientServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, string $requestedName, ?array $options = null): mixed
    {
        $settings = $container->get(Settings::class);

        return new PilotClientService($settings);
    }
}
