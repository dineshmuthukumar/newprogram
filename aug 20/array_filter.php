
<?php



$Movie_collections=array(array("movie"=>"kala","price"=>"70","rate"=>"3"),array("movie"=>"bagubali","price"=>"100","rate"=>"4"),array("movie"=>"vikramvedha","price"=>"80","rate"=>"3"));
//$a1=array("a","b",2,3,4);
//print_r(array_filter($Movie_collections,"test_odd"));
$result = array_filter($Movie_collections, function ($item)  {
    if ($item['rate']>=3) {
        return true;
    }
    return false;
});
echo "<pre>";
print_r($result);
?>