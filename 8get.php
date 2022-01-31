<?php 
    class Method
    {
        public $name;
        protected $mobile;
        private $email;


        public function __get($val)
        {
            echo "Cannot access private property";
        }

    }
    $obj = new Method;
    $obj->email; 

    echo "<hr />";

    class Method2
    {
        private $data = array('name'=>"yogesh",'email'=>"yogesh@gmail.com");

        public function __get($key)
        {
            if(array_key_exists($key, $this->data))
            {
                return $this->data[$key];
            }
            else
            {
                return "invalid $key";
            }
        }

    }

    $obj2 = new Method2;
    echo $obj2->name;
    // echo $obj2->address;


?>