/*
Write a PHP script that creates a 10*10 table. First row will contain all numbers from 1 to 10, 2nd row will contain the elements in first row *2, 3rd row will contain elements in first row *3, and so on.

*/
<?php

 echo '<table border="1">';
 //Lines
 for ($i=1; $i<=10; $i++) {
      echo "<tr>";
      
      //Columns
      for ($j=1; $j<=10; $j++) {
           echo "<td>".$i*$j."</td>";
      }
      echo "<tr>";
 }
 
 echo "</table>";
 
?>
