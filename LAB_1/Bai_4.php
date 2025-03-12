<?php 
    $array = ["apple", "banana", "kiwi", "strawberry"];

    function sapXepDoDai(&$array){
        usort($array, fn($a, $b) => strlen($a) - strlen($b));
    }
    sapXepDoDai($array);
    echo "Mang sau khi sap xep theo do dai: ";
    print_r($array);
?>