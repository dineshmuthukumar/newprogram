<?php
$list = array(
'Tunisia' => 'Tunis',
'Germany' => 'Berlin',
'Italy' => 'Rom',
'Egypt' => 'Cairo'
);
$afterIndex = 2;
$newVal= array('Palestine' => 'Jerusalem');

$newList = array_merge(array_slice($list,0,$afterIndex+1), $newVal,array_slice($list,$afterIndex+1));

?>
