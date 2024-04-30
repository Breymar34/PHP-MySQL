<?php
class Sample{
    function __construct()
    { echo "Welcome to CCS Week 2024<br/>"; }

    function __destruct()
    { echo "Thank you come again!";}

    public function message()
    { echo "The theme of the CCS week is PACMAN <br/>";}

    
}

$obj = new Sample();
$obj->message();