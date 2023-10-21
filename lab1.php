<?php

function  sortarr($arr){
sort($arr);
for($i=0;$i<count($arr);$i++){
    echo $arr[$i] . "<br>";
}

};
$arr=array(9,8,4,7);
sortarr($arr);
////////////////////////////////////////////////////////
function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 47;
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number";
   echo "<br>";
/////////////////////////////////////////////////////////////
function revv ($int1)
{
    echo strrev($int1);
}
$xy=3456;
revv($xy);


?>