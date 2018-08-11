<?php
$array = array(array(
  '0'  => '0',
  '1'   => '1',
  '2'   => '2',
  '3' => '3'),array('a','b','c','d'),array('A','B','C','D')
);
$element=array('apple','banana','orange');
foreach ($array as $key => $value) {

	if($key[1]==1){
	    array_push($key, "hello World");
	    }

 echo "<pre>";
	print_r($array[$key]);
	if($array[$key]=)
	exit;//array_splice_after_key($array, 'one', $element);
$arr= array_splice($array[$key],0,1,$a2);
print_r($arr);
//	insert_into_array( $array, 0, $element[$key], true);
	//array_slice($array, 0, $element[i], true);
//print_r($array);
}

/*$res = array_slice($array[0], 0, 0, true) +array('apple');
    array_slice($array[0], 0, count($array[0]) , true) ;
$res1 = array_slice($array[1], 0, 1, true) +
        array("1"=>"banana") +
        array_slice($array[1], 0, count($array[1]) , true) ;
//print_r($res1);
$res2 = array_slice($array[2], 0, 2, true) +
    array("2"=>"orange") +
    array_slice($array[2], 0, count($array[2]) , true) ;
 $mergearray=array($res,$res1,$res2);
 echo "<pre>";
print_r($mergearray);*/

?>