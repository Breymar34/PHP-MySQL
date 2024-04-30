<?php
class Sample{
    private $container;
    function __construct()
    {echo "Welcome to my OOP code!";}
    function __destruct()
    {echo "Bye!";}

    public function get($name)
    {$this->cointainer = $name; $this->set();}

    private function set()
    {echo $this->cointainer."<br>";}
}
class KuninMo extends Sample{
    function __destruct()
    {
        echo "Maraming Salamat!";
    }
}

$obj = new KuninMo();
$obj->get("Anna");
