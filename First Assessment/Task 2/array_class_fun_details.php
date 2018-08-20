<?php
//$rate=$_POST['rate'];
class Movie
{
	
public function Movie_collections() # declare function in  class
{
	$Moviecollections=array(array("movie"=>"kala","price"=>"70","rate"=>"3"),array("movie"=>"bagubali","price"=>"100","rate"=>"4"),array("movie"=>"vikramvedha","price"=>"80","rate"=>"3")); # declaration array
echo "Details"."<br>";
foreach ($Moviecollections as $key => $value) {

	if($value["rate"]>=3) # rate greater than and equal condition
	{
		
	echo "Movie is:"."  ".$value["movie"] . "  "."  Prices is:"." ".$value["price"]."   "."rate is;"."    ".$value["rate"] . "<br>";
    }
                                               }
}
}
$movie=new movie(); # object creation
$movie->Movie_collections(); # call the function
?> 
