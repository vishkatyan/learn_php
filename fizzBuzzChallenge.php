<?php
for($a=1; $a<=100; $a++)
{
   if($a %3 ==0 && $a %5 ==0){
    echo "FIZZBUZZ. <br>";
   }
   elseif($a %3 ==0){
    echo "FIZZ. <br>";
   } elseif($a %5 ==0){
    echo "BUZZ. <br>";
   } else{
    echo "Not a multiple. <br>";
   }
}
?>
