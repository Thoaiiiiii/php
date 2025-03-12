<?php 
    $students = array(
        "SV001" => array(
            "name" => "Nguyễn Văn A",
            "dob" => "2000-05-15",
            "average_score" => 8.5
        ),
        "SV002" => array(
            "name" => "Trần Thị B",
            "dob" => "1999-08-22",
            "average_score" => 7.8
        ),
        "SV003" => array(
            "name" => "Lê Văn C",
            "dob" => "2001-02-17",
            "average_score" => 9.0
        ),
    );
    // 1. In thong tin sinh vien
    function printStudent($students){
        foreach($students as $id => $info){
            echo "MSSV: $id, Tên: {$info['name']}, Ngày sinh: {$info['dob']}, Điểm trung bình: {$info['average_score']} <br>";
        }
    }

    // 2. Them sinh vien moi
    function addStudent(&$students, $id, $name, $dob, $average_score) {
        if (isset($students[$id])) {
            return "Mã số sinh viên $id đã tồn tại!";
        }
        $students[$id] = array(
            "name" => $name,
            "dob" => $dob,
            "average_score" => $average_score
        );    
        return "Thêm sinh viên thành công: $id - $name, $dob, $average_score";
    }
    
    // 3. tinh diem trung binh
    function calAvgScore($students){
        $total_sum = array_sum(array_column($students, 'average_score'));
        return $total_sum / count($students);
    }
    // 4. in ra thong tin sv co diem trung binh cao nhat
    function findTopStudent($students){
        $max_score = max(array_column($students, 'average_score'));
        foreach($students as $id => $info){
            if($info['average_score'] == $max_score){
                return "SV có điểm cao nhất là: $id, Tên: {$info['name']}, Điểm trung bình: {$info['average_score']} <br>";
            }
        }
    }
    // 5. Sv co ngay sinh nho nhat (gan voi hien tai)
    function findYoungestStudent($students) {
        $youngest_student = null;
        $youngest_dob = null;
    
        foreach ($students as $id => $info) {
            if ($youngest_dob === null || strtotime($info['dob']) > strtotime($youngest_dob)) {
                $youngest_dob = $info['dob'];
                $youngest_student = $info;
                $youngest_student['id'] = $id;
            }
        }
    
        return "SV nhỏ tuổi nhất: {$youngest_student['id']} - {$youngest_student['name']}, Ngày sinh: {$youngest_student['dob']}";
    }
    // 6. Xep loai sv
    function classifyStudent($students){
        $grades = [];
        foreach($students as $id => $info){
            $score = $info['average_score'];
            if($score < 3.5){
                $grade = "Kém";
            }
            elseif($score < 5){
                $grade = "Yếu";
            }
            elseif ($score < 6.5){
                $grade = "TB";
            }
            elseif ($score < 8){
                $grade = "Khá";
            }
            else {
                $grade = "Giỏi";
            }
            $grades[$id] = $grade;
        }
        return $grades;
    }
    printStudent($students);
    echo addStudent($students, "SV004", "Phạm Thanh D", "2002-10-05", 6.2);
    echo "<br>";
    echo "Diem trung binh cua tat ca sinh vien la: " . calAvgScore($students) ."<br>";
    echo findTopStudent($students);
    echo findYoungestStudent($students);

    $classifi = classifyStudent($students);
    foreach($classifi as $id => $grade){
        echo "Sinh viên $id xếp loại: $grade <br>";
    }
?>