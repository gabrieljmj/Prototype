<?php
require_once 'src/Gabrieljmj/Prototype/Autoload/Autoloader.php';
require_once 'src/Gabrieljmj/Prototype/Autoload/Autoloadable/AutoloadableInterface.php';
require_once 'src/Gabrieljmj/Prototype/Autoload/Autoloadable/StandardAutoloadable.php';

$autoloader = new Gabrieljmj\Prototype\Autoload\Autoloader();
$autoloadable = new Gabrieljmj\Prototype\Autoload\Autoloadable\StandardAutoloadable('src');
$autoloader->register($autoloadable);