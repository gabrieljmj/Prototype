<?php
namespace Gabrieljmj\Prototype\Autoload\Autoloadable;

interface AutoloadableInterface
{
    /**
     * Returns the function to autoload
     *
     * @return callable
    */
    public function getCallable();
}