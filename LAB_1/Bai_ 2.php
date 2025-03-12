<?php
    $array = array(7, 2, 5, 9, 3);
    function array_max($array){
        return max($array);
    }
    echo "Gia tri lon nhat cua mang la: ".array_max($array);

    function array_min($array){
        return min($array);
    }
    echo "<br>Gia tri nho nhat cua mang la: ".array_min($array);
?>