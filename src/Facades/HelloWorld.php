<?php

namespace Cgreuling\HelloWorld\Facades;

use Illuminate\Support\Facades\Facade;

class HelloWorld extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'hello-world';
    }
}
