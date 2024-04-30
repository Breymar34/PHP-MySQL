<?php
class Sample{
   public function __construct()
   { echo "Opening Remarks <br>"; }

   public function message()
   { echo "Magandang umaga sa lahat!<br>";}

   public function __destruct()
   {echo "Closing Remarks";}
}

$obj = new Sample();
$obj->message();