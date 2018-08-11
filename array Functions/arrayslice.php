<?php
$array = array(
  'zero',array('a','b','c'),
  'one'   => '1',
  'two'   => '2',
  'three' => '3',
);
$arr=array('apple');
$arr1=array('a');
$res =array_slice($array[1], 0, 0, true) +
    $arr+$arr1+
    array_slice($array[1], 0, count($array) - 1, true) ;
    echo "<pre>";
print_r($res)."<br>";
echo "<pre>";
print_r($array);
$array2= array(0=>1,0=>2);
print_r($array2);
?>

