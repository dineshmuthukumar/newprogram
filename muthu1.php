<?php
function numpat($n)
{
    $num = 1;
 
    // outer loop to handle
    // number of rows
    // n in this case
    for ($i = 0; $i < $n; $i++)
    {
 
        // inner loop to handle
        // number of columns
        // values changing acc. 
        // to outer loop
        for ($j = 0; $j <= $i; $j++ )
        {
             
            // printing number
            echo $num.PHP.EOL;
        }
         
            // incrementing number
            // at each column
            $num = $num + 1;
 
        // ending line after
        // each row
        echo "\n";
    }
}
$n = 5;
numpat($n);
?>
