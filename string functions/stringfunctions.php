<?php
$string="new word";
$cslash = addcslashes($string,"w"); # string slash include particular character front
echo("Add slash particular character"." ".$cslash)."<br>";
$slash = addslashes('What does "yolo" mean?');# add slash predefined operator front
echo("add slash predefined functions"."  ".$slash)."<br>";
$bin2hex = bin2hex($string); # conversion binary to hexa decimal 
echo("binary to hexa decimal conversions"."   ".$bin2hex)."<br>"; 

echo "remove particular word" ." ".chop($string,"word")."<br>"; # cut on the particular word

echo "return asc value"." ".chr(52) . "<br>"; #return asc value in decimal value

echo "string split by character using separator"."  ".chunk_split($string,1,"."). "<br>"; #string split a character 

echo " change different character"." ".count_chars($string,3)."<br>"; # change different character

$crc32 = crc32($string); # Encryption ways using crc32 formats
 echo "It is Crc32 encryption ";
printf("%u\n",$crc32);
echo "<br>";

echo"a string Split to character using separator";
print_r (explode(" ",$string)); #split string to character using separatorS
echo "<br>";


echo"hexdecimal to binary character conversion" ."  ".hex2bin("48656c6c6f20576f726c6421")."<br>"; # hexdecimal to binary character conversion


$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';

echo "Html entity to meaningful word"."  ".html_entity_decode($str)."<br>"; # html entity to meaningful word prints

echo "first character is lower_case"."  ".lcfirst("Hello Word")."<br>"; # first letter of word is lower case

echo "words compare missing character counts" ." ".levenshtein("Hello World","ello World"); # word comparing missing character count value print

echo"a character to string  using separator";



?>