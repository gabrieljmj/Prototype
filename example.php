<?php
require_once 'autoload.php';

use Gabrieljmj\Prototype\Prototype;

function User() {
    return Prototype::getInstance()->prot('User');
}

function Admin() {
    return Prototype::getInstance()->prot('Admin');
}

User()->setName = function ($name) {
    global $self;
    $self->name = $name;
};

User()->getName = function () {
    global $self;
    return $self->name;
};

function Employee() {
    return Prototype::getInstance()->prot('Employee');
}

Employee()->prototype = new User();

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