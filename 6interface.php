<?php
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function name()
    {
        echo "sd";
    }
    public function makeSound()
    {

    }
}
$obj = new Dog();
echo $obj->name();