<?php
for($a = 1; $a<=100;$a++){
    $randNo = rand(1,2);
    if($randNo ==1){
        echo "Heads, I win .<br>";
    } else{
        echo "Tails, you win. <br>";
    } 
}
?>
