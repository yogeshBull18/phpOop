<?php

class Myclass
{

    private $version ;

    function __construct($v='0.1')
    {
        $this->version = $v;
    }
    function version() 
    {
            echo $this->version;
    }

}
$obj = new Myclass('1.2');
echo $obj->version();
?>