<?php
require_one 'autoload.php';

use Gabrieljmj\Prototype\Prototype;

function Person() {
    return Prototype::getInstance()->prot('Person');
}

Person()->on = 1;

Person()->setName = function ($name) {
    global $self;
    $self->name = $name;
};

Person()->getName = function() {
    global $self;
    return $self->getName();
};

$user1 = new Person();
$user1->setName('Hansel');

$user2 = new Person();
$user2->setName('Gretel');

echo $user1->getName() . ' and ' . $user2->getName(); //Hansel and Gretel

function Employee() {
    return Prototype::getInstance()->prot('Employee');
}

Employee()->prototype = new Person();

Employee()->setJobTitle = function ($jobtitle) {
    global $self;
    $self->jobTitle = $jobtitle;
};

Employee()->getJobTitle = function () {
    global $self;
    return $self->jobTitle;
};

$employee = new Employee();
$employee->setName('Jhon');
$employee->setJobTitle('Developer');

echo 'Hi! My name is ' . $employee->getName() . ' and I work as ' . $employee->getJobTitle();