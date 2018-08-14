<?php
$string="A paragraph usually deals with a single idea. In general, you’ll have an introductory sentence expressing that idea, and several supporting sentences to round it off. Paragraphs are usually about 100 – 200 words long, but there are more exceptions to this rule-of-thumb than you’d expect.Commercial writing breaks all the rules. Whether or not you find it irritating, your task is to hold your readers’ attention and get them to read what you’ve written. The average person doesn’t like to see solid blocks of text. It looks like it’s going to be difficult to get through, and nobody likes to work harder than they have to.As you can see, I was able to stop identifying the speakers as soon as the conversation began to flow because John and Mary each had paragraphs to themselves. Neither of them said anything that was even close to 100 words, but it’s still easy to see who said what. Mary’s final paragraph was one word long.The truth is there is no definitive answer to this question. The number of words it will take to fill a page will depend on a number of factors including the type of font used, the font size, spacing elements, the margins used on the paper, the paragraph length, etc. For example, if the assignment says the writing should be in 10-point font, it’s going to take a greater number of words to fill a page than if the assignment requires a 12-point font.The truth is there is no definitive answer to this question. The number of words it will take to fill a page will depend on a number of factors including the type of font used, the font size, spacing elements, the margins used on the paper, the paragraph length, etc. For example, if the assignment says the writing should be in 10-point font, it’s going to take a greater number of words to fill a page than if the assignment requires a 12-point font.If you are given a writing assignment with a page number, the best thing to do is go directly to the person who made the assignment and ask for a word count. This will take away all the variations and help ensure your writing assignment meets expectations. If it’s for something informal and you simply need a general guideline, you can find it below. ";

$arr = explode(".", $string);// split to string to array using . operator

$length=count($arr); // length of array 

$j=0;


$line=2;

for($i=0;$i<$length;$i++)
{
	$b=array_slice($arr,$j,$line); // array slice in limit lines 

	$j=$j+$step; //div next 2 limit lines

     if($i%4==0)
     {

     	$b=array_slice($arr,$j,4); #continue previous array_slice wiith condition
     	$j=$j+5;
     }
        
         foreach ($b as $key => $value) 
         {
         	
         	$b[$key] = $value."<br>"; # append on break
          
         }

   $join = implode('.', $b);

   $remove=str_replace(".", "", $join); #string replace dot to while space

    echo nl2br( $remove."<br/>"."<br/>"); #new line creation

    echo "<br/>";
}
?>