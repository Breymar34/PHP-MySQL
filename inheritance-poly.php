<?php
class Morning{
  public function greet()
  {
    echo "Magandang umaga!";
  }
}
//sample ng inheritance gamit yung keyword extends
class Afternoon extends Morning{
  //sample ng poly na override yung greet na method
   public function greet()
   {
    echo "Maganda tanghali!";
   }
}

class Evening extends Afternoon{
    public function greet()
    {
     echo "Maganda gabi!";
    }
 }
 

$obj = new Evening();
$obj->greet();


