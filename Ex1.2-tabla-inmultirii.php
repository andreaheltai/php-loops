/*
Write a PHP script that creates a multiplication table of 5 columns and 6 rows using for loops. 
*/

<?php

 echo '<table border="1">';
 //Lines
 for ($i=1; $i<=6; $i++) {
      echo "<tr>";
      
      //Columns
      for ($j=1; $j<=5; $j++) {
           echo "<td>".$i." * ".$j." = ".$i*$j."</td>";
      }
      echo "<tr>";
 }
 
 echo "</table>";
 
?>
