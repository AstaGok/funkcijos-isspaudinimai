<?php
$masyvas=array(55,555,525,8196,2156);
print_r($masyvas);

count($masyvas);

function printArrayNice($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    
}

printArrayNice($masyvas);

function stripUseLessData($data) {
    trim($data);
    stripLashes($data);
    htmlspecialchars($data);
    return $data;
}

function addTwoNumber($a,$b){
    $sum = $a + $b;
    return $sum;
}
echo addTwoNumber(3, 5);