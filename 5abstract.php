<?php 
abstract class setValueClass 
{

    function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    

    abstract public function execute();

}


class form extends setValueClass
{


    protected $value;

    public function execute()
    {
        return  $this->value;
    }
}

$obj = new form();
echo $obj->setValue('as')->execute();
// var_dump(get_class($obj->setValue('as')));



?>