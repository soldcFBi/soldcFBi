<?php
$a = ["hello","world","tech"];
$tanpaIsi = is_null($a);
$denganIsi = is_array($a);
$panjang_a = count($a);
$Enskripsi = md5("12345");
var_dump($tanpaIsi);
echo "<br>";
var_dump($denganIsi);
echo "<br>";
echo "Jumlah array A : {$panjang_a}<br>";
var_dump($Enskripsi);
echo "<hr>";

function UkuranRumah(float $panjang,float $lebar,float $tinggi){
    $luas = $panjang * $lebar * $tinggi;
    return $luas;
}
echo UkuranRumah(10,10,10)."<br>";
$hasil = UkuranRumah(12,12,12)."<br>";
var_dump(UkuranRumah(6,6,6))."<br>";

function LuasTanah(int $lebar,int $panjang) : float {
    return $lebar + $panjang;
}
echo LuasTanah(20,30);
echo "<br>";

$Barang = function($namaBarang,$namaOwner){
    return "{$namaBarang} {$namaOwner}";
};
echo $Barang("Lemari","wahyudi");
echo "<hr>";

// arrow
//$hello = fn() => "hello world\n";
//$yo = fn() => "hello\n";
//var_dump($hello));
//var_dump($yo));

function Account($login,$email){
    $login = $email($login);
    echo "Login to akun : $login \n";
}
Account("R@gmail.con",fn($login) => strtoupper ($login));
echo "<hr>";

$fullname = "pukki";
$favFood = "nasiq";
$hobby = "ngoding";

$selfIntro = fn () => "Perkenalkan nama saya $fullname, 
saya suka makan $favFood, hobi $hobby";

echo $selfIntro();
echo "<hr>";

function Employe(string $nama,$deploy){
    $fullname = $deploy($nama);
    echo "Nama : $fullname";
};

Employe("pukki",function(string $nama) : string {
    return strtoupper($nama);
});
$namaLengkap = function ($nama) : string {
    return strtoupper($nama);
};
Employe("andhika",$namaLengkap);

echo "<hr>";

$namaDepan = "hcakrnso";
$namaBlakang = "soxkskcd";
$namaLengkap = function () use ($namaDepan,$namaBlakang){
    echo "Nama depan : $namaDepan <br>";
    echo "Nama blakang : $namaBlakang";
};
$namaLengkap();
echo "<hr>";

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("pukki", "strtoupper");
sayHello("pukki","strtolower");
sayHello("pukki", function (string $name): string {
    return strtoupper($name);
});
sayHello("pukki", fn($name) => strtoupper($name));
?>
