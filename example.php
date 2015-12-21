<?php

namespace Illuminate\Container;

use Closure;
use ArrayAccess\Something;

class Container implements ArrayAccess
{
    /**
     * An array of the types that have been resolved.
     *
     * @var array
     */
    protected $resolved = Something::class;

    /**
     * Determine if a given type is shared.
     *
     * @param  string  $abstract
     * @return bool
     */
    public function isShared($abstract)
    {
        if (isset($this->bindings[$abstract]['shared'])) {
            $shared = $this->bindings[$abstract]['shared'];
        } else {
            $shared = false;
        }

        return isset($this->instances[$abstract]) || $shared === true;
    }
}
