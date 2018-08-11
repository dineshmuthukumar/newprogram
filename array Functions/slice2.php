<?php
$array = array( array(
  '0',
  '1',
  '2',
  '3'),array('a','b','c','d')
);
$res = array_slice($array, 0, 0, true) +
    array("0"=>"my_value") +
    array_slice($array, 0, count($array), true) ;
    $res1 = array_slice($array[1], 0, 1, true) +
        array("1"=>"my_value") +
        array_slice($array[1], 1, count($array[1]), true) ;
print_r($res1);
?>