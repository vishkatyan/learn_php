<?php
function mul($a, $b=5){
    $mult = $a*$b;
    echo $mult."<br>";
}
mul(5, 10);
mul(5);  // will take the value of $b=5
?>
