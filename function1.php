<?php
class great{
function one()
{
    $x=7;
    if($x==7)
        echo $x;
    
}
function two()
{
        $x=7;
        $y=8;
    if($x>$y)
    {
        echo "tuesday";
    
    }
    else
    {
        echo "monday";
        
    }
}
function three()
{
    $x=7;
    $y=8;
    $z=9;
    if($x>$y)
    {
        echo "monday";

    }
    elseif ($y>$x)
     {
        echo "tuesday";
    }
    else

    {
        echo "wednesday";

    }
}
}
$obj=new great(); 
$obj->one();
$obj->two();
$obj->three();
?>