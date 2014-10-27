<?php
namespace Gabrieljmj\Prototype\Autoload\Autoloadable;

use Gabrieljmj\Prototype\Autoload\Autoloadable\AutoloadableInterface;

class StandardAutoloadable implements AutoloadableInterface
{
    /**
     * Files path
     *
     * @var string
    */
    private $path;

    /**
     * @var string
    */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Returns the function to autoload
     *
     * @return callable
    */
    public function getCallable()
    {
        return function ($className) {
            $file = $this->path . DIRECTORY_SEPARATOR . $className . '.php';

            if (file_exists($file)) {
                require_once $file;
            }        
        };
    }
}