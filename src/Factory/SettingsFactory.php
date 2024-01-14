<?php

declare(strict_types=1);

namespace ProcessPilot\Laminas\Client\Factory;

use Laminas\ServiceManager\Factory\FactoryInterface;
use ProcessPilot\Client\Settings;
use Psr\Container\ContainerInterface;

class SettingsFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, string $requestedName, ?array $options = null): mixed
    {
        $config = $container->get('config')['process-pilot'];

        $settings = new Settings();
        $settings->setHost($config['host']);
        $settings->setProjectHash($config['project_hash']);
        $settings->setProjectId($config['project_id']);
        $settings->setEnabled($config['enabled']);

        return $settings;
    }
}
