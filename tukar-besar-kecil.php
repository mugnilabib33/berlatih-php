<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar besar kecil</title>
</head>
<body>
<?php
echo "<h2>Tukar Besar Kecil</h2>";
function tukar_besar_kecil($string){
//kode di sini
$cetak = "";
for ($i=0; $i < strlen($string); $i++) { 
    # code...
    if(ctype_lower($string[$i])){
        $cetak .= strtoupper($string[$i]);
    } else {
        $cetak .= strtolower($string[$i]);
    }
}
return $cetak . "<br>";
}

// TEST CASES
echo "<p>Hasil tukar_besar_kecil dari kata ('Hello World')<br> adalah => ";
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<p>Hasil tukar_besar_kecil dari kata ('I aM aLAY')<br> adalah => ";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<p>Hasil tukar_besar_kecil dari kata ('My Name is Bond!!')<br> adalah => ";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<p>Hasil tukar_besar_kecil dari kata ('IT sHOULD bE me')<br> adalah => ";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<p>Hasil tukar_besar_kecil dari kata ('001-A-3-5TrdYW')<br> adalah => ";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
</body>
</html>