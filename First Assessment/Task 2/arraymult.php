<?php
//$rate=$_POST['rate'];
$Movie_collections=array(array("movie"=>"kala","price"=>"70","rate"=>"3"),array("movie"=>"bagubali","price"=>"100","rate"=>"4"),array("movie"=>"vikramvedha","price"=>"80","rate"=>"3"));
//echo "<pre>";
//print_r($array);
echo "Details"."<br>";
foreach ($Movie_collections as $key => $value) {

	if($value["rate"]>=3)
	{
		
	echo "Movie is:"."  ".$value["movie"] . "  "."  Prices is:"." ".$value["price"]."   "."rate is;"."    ".$value["rate"] . "<br>";
    }
                                               }
}

?>
