<<<<<<< HEAD
<?php

$array1 = array (1, 2, 3, 4, 5);
#foreach($array1 as &$i){
#    $i = $i * 3;
#    echo $i . "\n";
#}
for ($i=0; $i < count($array1); $i++) { 
    echo $array1[$i] . "\n";
=======
<?php

$array1 = array (1, 2, 3, 4, 5);
#foreach($array1 as &$i){
#    $i = $i * 3;
#    echo $i . "\n";
#}
for ($i=0; $i < count($array1); $i++) { 
    echo $array1[$i] . "\n";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
}