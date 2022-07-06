<?php

declare(strict_types=1);

namespace Ruga\Layout\AdminLTE\Facade;

use Ruga\Layout\AdminLTE\AdminLteConfig;
use Ruga\Std\Facade\AbstractFacade;

/**
 * @method static bool offsetExists($offset)
 * @method static mixed offsetGet($offset)
 * @method static void offsetSet($offset, $value)
 * @method static void offsetUnset($offset)
 */
abstract class AdminLte extends AbstractFacade
{
    
    /**
     * Get the name of the component for the concrete facade.
     * Override this function in every concrete facade.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeInstanceName(): string
    {
        return AdminLteConfig::class;
    }
    
    
    
}