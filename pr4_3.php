<?php 
 $n=10;//numberoftermstogenerate 
 $i=0; 
 $j=1; 
  
 echo"FIBONACCISERIESUPTOTERM10:-"; 
  echo"";
 while($n>0){ 
 echo$i.""; 
  echo"\n";
 $sum=$i+$j; 
 $i=$j; 
 $j=$sum; 
  
 $n--; 
 } 
 ?>