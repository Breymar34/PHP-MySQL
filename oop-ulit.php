<?php
class Greet{ //name ng class
    private $name; //modifier  - naka private para sa encapsulation
    function __construct() //contruct or default before exec
    {echo "Hello! How are you ? <br/>";}
    function __destruct() // destruct or default after
    {echo "Thank you!";}

    public function get($pangalan) //method naka public
    {$this->name = $pangalan; $this->set();}

    private function set() //method naka private para sa abstraction
    {echo $this->name."<br/>";}
}

class Say extends Greet{
    function __destruct()  //polymorphism overriding
    {echo "Maraming salamat!";}
} //inhertance

$obj = new Say(); //instantiation
$obj->get("Anna");

