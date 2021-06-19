<?php
class person{
    public $f_name;
    public $l_name;
    private $age;
    protected $address;

    static $number = 0;

    public function __construct($f_name)
    {
        $this->first_name=$f_name;
        self::$number++;
        echo "Run construct function";
        
    }
    public function setAge($age){
         $this->age=$age;
    }
    public function getAge(){
        return $this->age;
    }
    public static function getNumber(){
        return self::$number;
    }
}    
