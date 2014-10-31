<?php
require_once 'src/Gabrieljmj/Prototype/Autoload/Autoloader.php';
require_once 'src/Gabrieljmj/Prototype/Autoload/Autoloadable/AutoloadableInterface.php';
require_once 'src/Gabrieljmj/Prototype/Autoload/Autoloadable/ClassCreatorAutoloadable.php';
require_once 'src/Gabrieljmj/Prototype/Autoload/Autoloadable/StandardAutoloadable.php';

$autoloader = new Gabrieljmj\Prototype\Autoload\Autoloader();
$standardAutoloadable = new Gabrieljmj\Prototype\Autoload\Autoloadable\StandardAutoloadable('src');
$classCreatorAutoloadable = new Gabrieljmj\Prototype\Autoload\Autoloadable\ClassCreatorAutoloadable();
$autoloader->register($standardAutoloadable);
$autoloader->register($classCreatorAutoloadable);