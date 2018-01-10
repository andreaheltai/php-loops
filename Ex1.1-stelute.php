/*

Create a script to construct the following pattern, using nested for loop. 
* 
* * 
* * * 
* * * * 
* * * * * 

*/

<?php

$stars = 5;

for ($i=1; $i<=$stars; $i++) {
     for ($j=1; $j<=$i; $j++) {
         echo "*";
     }
     echo "<br>";
}

?>
