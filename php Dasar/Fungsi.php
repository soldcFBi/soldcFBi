<?php
function NamaBenda(){
  echo "Lemari<br>";
  echo "kipas<br>";
}
NamaBenda();

function SSH($ip){
  echo "masukan nama ip {$ip}<br>";
  echo "work";
}
SSH(127);

function JasaPekerja($nama,$gaji){
  echo "Nama : {$nama}<br>";
  echo "Total jumlah";
  
  if($gaji > 10){
    echo "Total Gaji : {$gaji}<br>";
  }
}
JasaPekerja("rifki",20);

function DaftarSiswa(string $siswa = "pukki",int $jumlahPelanggaran = 0){
  echo "Nama siswab : {$siswa}<br>";
  echo "jumlah pelanggaran : ";
  if($jumlahPelanggaran > 10){
    echo "jumlah {$jumlahPelanggaran}<br>";
  }
}
DaftarSiswa();

?>
