<?php
$array= array(array("movie"=>"kala","price"=>"70","rate"=>"3"),array("movie"=>"bagubali","price"=>"100","rate"=>"4"),array("movie"=>"vikramvedha","price"=>"80","rate"=>"3") );
echo "<pre>";
print_r($array);
foreach ($array as $key => $value) {
	echo $key . " : " . $value . "<br>";
}
?>