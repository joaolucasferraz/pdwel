<?php
    $valorm=$_GET["valorm"];
    $valorn=$_GET["valorn"];

    function mdc($x,$y){
        $a = max($x,$y);
        $b = min($x,$y);
            
        if($a%$b == 0){
            return $b;
        }else{
            return mdc($b,($a%$b));
        }
    }
        
    function mmc($x,$y){
        return (($x*$y)/(mdc($x,$y)));
    }   
    
    echo "O MDC de " . $valorm . " e " . $valorn . " = " . mdc($valorm, $valorn) . "<br>";
    echo "O MMC de " . $valorm . " e " . $valorn . " = " . mmc($valorm, $valorn);
?>