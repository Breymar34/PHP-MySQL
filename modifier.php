<?php
class GreetingsTagalog{
    private function morning()
    {echo "Magandang Umaga!";}

    public function afternoon()
    {echo "Magandang Tangahali!";}

    protected function evening()
    {echo "Magandang Gabi!";}

}

class GreetingsEnglish extends GreetingsTagalog{
    public function get() { $this->evening(); }
}

$obj = new GreetingsEnglish();
$obj->get();



