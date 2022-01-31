<?php 
abstract class ClassName
{
    function setName($value)
    {
        $this->value = $value;
        return $this;
    }
    abstract function getName();
}
class myClass extends ClassName
{
    protected $value;

    public function getName()
    {
        echo $this->value;
    } 
}
$obj = new myClass();
// echo $obj->setName('Vicky')->getName();



// late static                            

class a
{  
    static $name = "Yogesh";
}

class b extends a 
{
    static $name = "kashyap";
    function getName()
    {
        return parent::$name;
    }
}
$obj = new b();
echo $obj->getName();