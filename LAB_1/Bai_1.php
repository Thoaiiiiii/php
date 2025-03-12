<?php 
    $mang = array(4, 8, 15, 16, 23);
    function sum_array($mang){
        return array_sum($mang);
    }
    echo "Tổng của mảng là: ".sum_array($mang);

    function trungBinh($mang){
        return array_sum($mang) / count($mang);
    }

    echo "<br>Trung bình của mảng là: ".trungBinh($mang);
?>