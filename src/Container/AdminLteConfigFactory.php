<?php

declare(strict_types=1);

namespace Ruga\Layout\AdminLTE\Container;

use Psr\Container\ContainerInterface;
use Ruga\Layout\AdminLTE\AdminLteConfig;

class AdminLteConfigFactory
{
    /**
     * Create and return a AdminLteConfig instance.
     *
     * @param ContainerInterface $container
     *
     * @return AdminLteConfig
     * @throws \ReflectionException
     */
    public function __invoke(ContainerInterface $container): AdminLteConfig
    {
        $config = $container->has('config') ? $container->get('config') : [];
        $config = $config[AdminLteConfig::class] ?? [];
        return new AdminLteConfig($config);
    }
}