<?php

class Validation
{

    function __construct()
    {
        echo "Validation Construct <br />";
    }

    public function validatonNUmber($n='0')
    {
        if(is_float($n) || is_int($n))
        {
            return $n;
        } 
        else
        {
            return 0;
        }
    }
}
class Methods extends Validation
{
    
    function __construct()
    {
        echo  "Methods Construct <br />";
    }
    
    function sum($a='',$b='')
    {
        $f = $this->validatonNUmber($a);
        $s = $this->validatonNUmber($b);
        return $f+$s;
    }

    function multiplication($a='',$b='')
    {

        return $a*$b;
    }
    function subtraction($a='',$b='')
    {

        return $a-$b;
    }    
}

// $valiObj = new Validation; 
$obj = new Methods();
echo $obj->sum(2,23);
?>