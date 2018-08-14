<?php
$array = array(array(
  '0'  => '0',
  '1'   => '1',
  '2'   => '2',
  '3' => '3'),array('a','b','c','d'),array('A','B','C','D')
);
$element=array('apple','banana','orange');
echo"<pre>";
print_r($array);

$result1 = array_slice($array[0], 0, 0, true) +array('apple');
 $result11  = array_slice($array[0], 0, count($array[0]) , true) ;
 $result12=array_merge($result1,$result11);
$result2 = array_slice($array[1], 0, 1, true) +
        array("1"=>"banana");
$result21  = array_slice($array[1], 1, count($array[1]) , true) ;
$result22 =array_merge($result2,$result21);
$result3= array_slice($array[2], 0, 2, true) +
    array("2"=>"orange");
   $result31= array_slice($array[2], 2, count($array[2]) , true) ;
   $result32=array_merge($result3,$result31);
 $mergearray=array($result12,$result22,$result32);
 echo "<pre>";
print_r($mergearray);

?>