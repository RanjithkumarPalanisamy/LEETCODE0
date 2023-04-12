<?php
$array=array(1,5,7,6,2);
$target=9;
$a=array();
for($i=0;$i<count($array)-1;$i++)
{
    for($j=1;$j<count($array);$j++)
    {
        if($array[$i]+$array[$j]==$target)
        {
             $a[1]=$j;
             $a[0]=$i;
        }
        
         
    }
}
print_r($a);