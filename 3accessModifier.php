<?php 

class MyClass{

    public $name;
    protected $version;
    private $tech;

    function name($n)
    {
        echo $n;
    }
    function setVersion($v)
    {
         $this->version = $v;
    }
    function getVersion()
    {
        echo $this->version;
    } 
    function tech()   
    {
        echo $this->tech = 'php'; 
    }
}

$obj = new MyClass();
$name = $obj->name = 'Yogesh <br />'; 
echo $obj->name($name);
$obj->setVersion('1.2');
echo $obj->getVersion().' '.$obj->tech();