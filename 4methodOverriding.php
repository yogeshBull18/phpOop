<?php
class First
{

    function name()
    {
        echo "yogesh";
    }

}

class Seco extends First
{

    function name()
    {
        echo "kashyap";
    }

    function parentName()
    { 
     return parent::class;
    }

}

$obj = new Seco();
echo $obj->parentName()->name();
?>