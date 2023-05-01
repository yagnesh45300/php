<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(1,2,3),array(4,5,6),array(7,8,9));
$r=count($a);
$c=count($b[0]);
echo " 3*3 METRICS ARE : ";
echo "<br>";
for($i=0;$i<$r;$i++)
{
    for($j=0;$j<$c;$j++)
    {
        $ans=$a[$i][$j]*$b[$i][$j];
        echo ($ans." ");
    }
    echo "<br>";
}
return 0;
?>