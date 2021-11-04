<?php

$array1 = array (1, 2, 3, 4, 5);
#foreach($array1 as &$i){
#    $i = $i * 3;
#    echo $i . "\n";
#}
for ($i=0; $i < count($array1); $i++) { 
    echo $array1[$i] . "\n";
}