<?php

declare(strict_types=1);

namespace Ruga\Layout\AdminLTE;

use Ruga\Layout\AdminLTE\Exception\KeyNotFoundException;

/**
 * Vorlage.
 */
class AdminLteConfig implements \ArrayAccess
{
    private array $config = [];
    
    
    
    public function __construct(array $config)
    {
        $this->config = $config;
    }
    
    
    
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->config);
    }
    
    
    
    public function offsetGet($offset)
    {
        return $this->config[$offset];
    }
    
    
    
    public function offsetSet($offset, $value)
    {
        if ($this->offsetExists($offset)) {
            $this->config[$offset] = $value;
        } else {
            throw new KeyNotFoundException("Key '{$offset}' not found in configuration.");
        }
    }
    
    
    
    public function offsetUnset($offset)
    {
        $this->config[$offset] = AdminLteConfigKeys::getDefaultValue($offset);
    }
}
