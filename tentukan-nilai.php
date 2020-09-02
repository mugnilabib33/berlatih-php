<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Git</title>
</head>
<body>
<!-- Soal 1 Tentukan Nilai-->
<?php 
echo "<h2>Soal 1 (Menentukan Nilai)</h2>";
    function tentukan_nilai($number)
    {
        //  kode disini
        if ($number >= 85){
            echo $number . " => Sangat baik";
        }
        elseif($number >= 75) {
            echo $number . " => Baik";
        }
        elseif($number >= 65){
            echo $number . " => Cukup";
        }
        else {
            echo $number . " => Kurang";
        }
        echo "<br>";
       
    }

    //TEST CASES
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang
?>


</body>
</html>