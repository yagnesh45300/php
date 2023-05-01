<?php
$s="yagnesh kalsariya ";
$c=0;
for($i=0;$i<18;$i++)
{
    if($s[$i]!=' ')
    {
        $c++;
    }
    while($s[$i]!=' ')
    {
        $i++;
    }
}
echo "word are : ".$i;
echo "<br>";
echo "charcter are : ".$c;
?>