<?php
echo "TIPE DATA DAN VARIABEL";
echo "hello world";
$a = 100;
$b = 200;
$c = 100 + (300 * 250);
$d = $a + $b + $c;
echo "a = {$a} <br>";
echo "b = {$b} <br>";
echo "c = {$c} <br>";
echo "hasil : {$d} <br>";
var_dump($d);
$kkmMtk = 7.5;
$kkmBinggris = 7.5;
$kkmBindo = 8.0;
$ratarata = ($kkmMtk + $kkmBinggris + $kkmBindo);
echo "kkm MTK : {$kkmMtk} <br>";
echo "$kkm Bhs nggris : {$kkmBinggris} <br>";
echo "Rata Rata : {$ratarata} <br>";
var_dump($ratarata);

$namaDepan = "bcd";
$namaBlakang = "efg";
$namaLengkap = "{$namaDepan} {$namaBlakang}";
$namaLengkap2 = $namaDepan.''.$namaBlakang;
echo "Nama Depan : {$namaDepan} <br>";
echo "Nama Blakang : {$namaBlakang} <br>";
echo "Nama Lengkap : {$namaLengkap}.'$namaBlakang'. <br>";
echo $namaLengkap2;
$NamaSiswa = ["Ab","bc","sp","sq"];
echo "Nama siswa : $NamaSiswa[0]";
echo "Nama siswa : $NamaSiswa[2]";
var_dump($NamaSiswa
$luLaki = true;
$luCewe = false;
var_dump($luLaki);
echo "<br>"
var_dump($luCewe);
?>
