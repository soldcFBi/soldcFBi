<?php
$nilai = 70;
if ($nilai > 60){
  echo "lulus <br>";
} else {
  echo "tidak lulus<br>";
}

$kkm = 85;
echo "Nilai KK {$kkm}<br>";
if($kkm > 70 && $kkm < 20){
  echo "predikat A";
} elseif ($kkm > 60){
  echo "predikat B";
} elseif ($kkm > 50){
  echo "predikat C";
} elseif ($kkm = 10){
  echo "predikat D";
} else {
  echo "Tidak dapat predikat";
}
echo "<br>";

$link = "http://belajar/otodidak/com.id";
switch($link){
  case "http://belajar/otodidak/com.id":
    echo "Loading";
    break;
  case "http://Ml.topup/com":
    echo "halaman tidak tersedia";
    break;
  case "http://pubg.topup/com.id":
    echo "halaman tidak tersedia";
    break;
  default:
    echo "error 404";
}
echo "<br>";
// kalau breka nya gw ilangin ntar bakal hasilnya case terus

$nilai = 50;
$hasil = $nilai > 70 ? "selamat anda lulus " : "anda tidak lulus";
echo "Hasil : {$hasil}<br>";
?>
