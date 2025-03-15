<?php 
    $string_array = ["Nguyen Van An", "Tran Thi Ngoc!", "Tran @Thi Lan", "Nguyen2 Thi Hoa1238", "#Bui Anh Tuan"];
    function locChuoiChuaKyTuDacBiet($string_array){
        $res = [];
        foreach($string_array as $string){
            if(preg_match("/[^a-zA-Z\s]/", $string)){
                $stringChuanHoa = chuanHoaChuoi($string);
                $res[] = $stringChuanHoa;
            }
        }
        return $res;
    }

    function chuanHoaChuoi($string){
        $string = preg_replace("/[^a-zA-Z\s]/", "", $string);
        
        return ucwords(strtolower($string));
    }
    $res = locChuoiChuaKyTuDacBiet($string_array);  
    print_r($res);
?>