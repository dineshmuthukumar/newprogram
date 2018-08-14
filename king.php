<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Addition
{
    function added($a,$b)
    {
        $this->x=$a;
        $this->y=$b;
        $b=$this->x+$this->y;
        echo $b;
    }
}
$add=new Addition();
$add->added(10,05);
?>