<?php
    $valorm=$_POST["valorm"];
    $valorn=$_POST["valorn"];
    $arr = array();

    for ($x = 0; $x < $valorm; $x++) {
        array_push($arr, $valorn * ($x + 1) );
      }
    
    for ($y = 0; $y < $valorm; $y++) {
        echo $arr[$y];
        echo "<br>";
    }  
    

?>