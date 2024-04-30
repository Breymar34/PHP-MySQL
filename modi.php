<?php
class Sample{
   public function morning()
   {echo "magandang umaga!";}

   private function afternoon()
   {echo "magandang tanghali";}

   protected function evening()
   {echo "magandang gabi";}
}

class KuninMo extends Sample
{
   public function get() { $this->evening(); }
}
$obj = new Sample();
$obj->evening(); 