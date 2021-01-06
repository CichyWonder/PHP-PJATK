<?php
function f (&$i){

    $k=2;
    for($i; $i<$k; $i++) {
        echo $i;
        $k++;
    }
    $i=0; f($i); f($i);
}


?>
