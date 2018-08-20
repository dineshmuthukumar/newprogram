
<?php
function test_odd($var)
{
	foreach ($Movie_collections as $key => $value) {

	if($value["rate"]>=3)
	{
		
	echo "Movie is:"."  ".$value["movie"] . "  "."  Prices is:"." ".$value["price"]."   "."rate is;"."    ".$value["rate"] . "<br>";
    }
                                               }
}
return $Movie_collections;
}
$Movie_collections=array(array("movie"=>"kala","price"=>"70","rate"=>"3"),array("movie"=>"bagubali","price"=>"100","rate"=>"4"),array("movie"=>"vikramvedha","price"=>"80","rate"=>"3"));
//$a1=array("a","b",2,3,4);
print_r(array_filter($Movie_collections,"test_odd"));
?>