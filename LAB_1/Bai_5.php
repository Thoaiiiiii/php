<?php
    $array = ["Nguyen Van An", "Tran Thi Ngoc!", "Tran @Thi Lan", "Nguyen2 Thi Hoa1238", "#Bui Anh Tuan"];
    function locChuoi($array){
        return array_filter($array, fn($string) => preg_match('/[^a-zA-Z0-9\s]/', $string));
    }

    function dinhDang($string){
        return ucwords(strtolower($string));
    }

    $mangloc = locChuoi($array);
    $res = array_map('dinhDang', $mangloc);
    echo "Cac chuoi sau khi loc va dinh dang la: \n";
    print_r($res);
?>