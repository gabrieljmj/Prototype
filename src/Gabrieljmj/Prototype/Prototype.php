<?php
namespace Gabrieljmj\Prototype;

use \stdClass;

class Prototype
{
    /**
     * @var \Gabrieljmj\Prototype\Prototype
    */
    private static $instance;
    
    /**
     * @var array
    */
    private $collection = [];

    /**
     * @return \Gabrieljmj\Prototype\Prototype
    */
    public static function getInstance()
    {
        if (!self::$instance instanceof Prototype) {
            self::$instance = new Prototype();
        }

        return self::$instance;
    }

    /**
     * Returns an created prototype
     *
     * @param string $name
     * @return \stdClass
    */
    public function prot($name)
    {
        if (!isset($this->collection[$name])) {
            $this->collection[$name] = new stdClass;
        }

        return $this->collection[$name];
    }
}