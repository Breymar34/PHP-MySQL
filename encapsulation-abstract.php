<?php
class Gg{
    private $x;
    private $y;

    public function getter($a,$b)
    {
        $this->x = $a;
        $this->y = $b;
        $this->setter();
    }

    private function setter()
    {
        echo $this->x + $this->y;
    }
}
$obj = new Gg();
$obj->getter(12,12);




