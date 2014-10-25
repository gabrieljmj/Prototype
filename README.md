Gabrieljmj\Prototype
====================
This library allows you to create prototypes like in JavaScript.

##Creating an object
Objects are created with functions. These functions will return an object. All objects are registred on a class called ```\Gabrieljmj\Prototype\Prototype```.
```php
function Person() {
    return Prototype::getInstance()->prot('Person');
}
```
To set methods, you need set as global the variable ```$self``` and use like you use ```$this``` on OOP: 
```php
Person()->on = 1;

Person()->setName = function ($name) {
    global $self;
    $self->name = $name;
}

Person()->getName = function() {
    global $self;
    return $self->getName();
}
```
So you can instance this and execute the methods and get the propeties:
```php
$user1 = new Person();
$user1->setName('Hansel');

$user2 = new Person();
$user2->setName('Gretel');

echo $user1->getName() . ' and ' . $user2->getName(); //Hansel and Gretel
```
##Extending
The extending is almost the same thing that JavaScript. Just set the property ```$prototype```:
```php
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
```