<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
echo "<pre>";
echo "array split to the  piece of array in same array ;"."<pre>";
print_r(array_chunk($cars,2)); # array split the piecs's in array

$a = array( "revathi",
  array(
    'id' => 5698,array("name"=>'reva'),
    'first_name' => 'dinesh',
    'last_name' => 'kumar',
  ),
  array(
    'id' => 4767,
    'first_name' => 'praba',
    'last_name' => 'karan',
  ),
  array(
    'id' => 3809,
    'first_name' => 'revathi',
    'last_name' => 'stalin',
  )
);

echo "specfic column display in"."<br>";
$last_names = array_column($a, 'last_name'); # array column using print index or key  
print_r($last_names);



$fname=array("dinesh","praba","revathi");
$age=array("20","20","20");
 
 echo "array Combine are Two array"."<br>";
$c=array_combine($fname,$age); // combine two array in one array
print_r($c)."<br>";

echo "array count values are display";
print_r(array_count_values($a)); //count values of array

$array1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$array2=array("e"=>"red","f"=>"green","g"=>"blue");

echo "combine two array differentie element display"."<br>";
$result=array_diff($a1,$a2); // combine array and differentie array value & key in 
print_r($result);



?>  