<?php
namespace Gabrieljmj\Prototype\Autoload;

use Gabrieljmj\Prototype\Autoload\Autoloadable\AutoloadableInterface;

class Autoloader
{
    /**
     * Registers an autoload function
     *
     * @param \Gabrieljmj\Prototype\Autoload\Autoloadable\AutoloadableInterface $autoladable
    */
    public function register(AutoloadableInterface $autoloadable)
    {
        spl_autoload_register($autoloadable->getCallable());
    }

    /**
     * Unregisters an autoload function
     *
     * @param \Gabrieljmj\Prototype\Autoload\Autoloadable\AutoloadableInterface $autoladable
    */
    public function unregister(AutoloadableInterface $autoloadable)
    {
        spl_autoload_unregister($autoloadable->getCallable());
    }
}