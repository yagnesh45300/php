<html> 
 <head> 
 </head> 
 <body> 
 <?php 
 if(isset($_REQUEST['submit'])) 
 { 
 $j=$_POST['car']; 
 } 
  
 if($j=="safari" || $j=="nexon" || $j=="tigor" || $j=="tiago") 
 { 
 $op="TATA"; 
 } 
  
 elseif($j=="XUV700"||$j=="XUV300"||$j=="bolerp") 
 { 
 $op="MAHINDRA"; 
 } 
  
 elseif($j=="I20"||$j=="verna"||$j=="venue"||$j=="creta") 
 { 
 $op="HYUNDAI"; 
 } 
  
 elseif($j=="swift"||$j=="alto"||$j=="baleno"||$j=="brezza") 
 { 
 $op="SUZUKI"; 
 } 
  
 else 
 { 
 $op="othercars.."; 
 } 
 ?> 
 <formmethod="POST"action="pr4-1.php"> 
 <table> 
 <tr> 
 <td>ENTERCARNAME:</td> 
 <td><inputtype="text"name="car"placeholder="ENTERCARNAME"></td> 
 </tr> 
 <tr> 
 <td><inputtype="submit"name="submit"></td> 
 </tr> 
 <tr> 
 <td><?phpecho$op; ?></td> 
 </tr> 
 </table> 
 </form> 
 </body> 
 </html>