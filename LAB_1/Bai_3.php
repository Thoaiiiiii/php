<?php 
    $array = array_map(fn() => rand(1, 1000), range(1, 100));

    function isPerfectSquare($n) {
        $x = sqrt($n);
        return ($x - floor($x) == 0);
    }

    function isPrime($n) {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    $count_scp = 0;
    $count_snt = 0;
    foreach ($array as $value) {
        if(isPerfectSquare($value)) {
            $count_scp++;
        }
        if(isPrime($value)) {
            $count_snt++;
        }
    }

    echo "So luong so chinh phuong: $count_scp <br>";
    echo "So luong so nguyen to: $count_snt <br>";
?>