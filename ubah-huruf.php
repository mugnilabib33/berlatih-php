<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf</title>
</head>
<body>
<!--Soal 2 Ubah Huruf-->
<?php 
echo "<h2>Soal 2 (Ubah Huruf)</h2>";
function ubah_huruf($string){
    //kode di sini
    $huruf = "abcdefghijklmnopqrstuvwxyz";
    $cetak = "";
    for ($i=0; $i < strlen($string); $i++) 
    { 
        $letak = strrpos($huruf , $string[$i]);
        $cetak .= substr($huruf , $letak + 1 , 1);
    }
    return $cetak;
}
    
    // TEST CASES
    echo "<p>Hasil ubah huruf dari kata ('wow')<br> adalah => ";
    echo ubah_huruf("wow"); echo "<br>";// xpx
    echo "<p>Hasil ubah huruf dari kata ('developer')<br> adalah => ";
    echo ubah_huruf('developer'); echo "<br>";// efwfmpqfs
    echo "<p>Hasil ubah huruf dari kata ('laravel')<br> adalah => ";
    echo ubah_huruf('laravel'); echo "<br>";// mbsbwfm
    echo "<p>Hasil ubah huruf dari kata ('keren')<br> adalah => ";
    echo ubah_huruf('keren'); echo "<br>";// lfsfo
    echo "<p>Hasil ubah huruf dari kata ('semangat')<br> adalah => ";
    echo ubah_huruf('semangat'); echo "<br>";// tfnbohbu
    

?>
</body>
</html>