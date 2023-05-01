<!DOCTYPEhtml> 
 <html> 
  
 <head> 
 <title>MultiplicationTable</title> 
 </head> 
  
 <body> 
 <?php 
$number=47; 
 echo"<p>Multiplicationtablefor:</p>"; 
  
 for($i=1;$i<=10;$i++){ 
 $product=$number*$i; 
 echo"$number*$i=$product"; 
 echo"<br>"; 
 } 
 ?> 
 </body> 
  
 </html>