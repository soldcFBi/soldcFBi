<?php
$a = 10;
$b = 50;
echo "{$a} + {$b} : ".($a + $b)."<br>";
echo "{$a} - {$b} : ".($a - $b)."<br>";
echo "{$a} * {$b} : ".($a * $b)."<br>";
echo "{$a} / {$b} : ".($a / $b)."<br>";
echo "{$a} % {$b} : ".($a % $b)."<br>";
echo "{$a} ** {$b} : ".($a ** $b)."<br>";
echo "-a".(-$a)."<br>";
echo "-a".(+$b)."<br>";
echo "+a : {+$a} <br>";

$namaDepan = "REZA";
$namaBlakang = "{$namaDepan} ANDHIKA";
echo "Nama lengkap : ".($namaBlakang)."<br>";
$NilaiBindo = 90;
$NilaiSejarah = 85;
$ratarata = 10 + ($NilaiBindo + 20) * $NilaiSejarah;
echo "Nilai B indo : {$NilaiBindo}<br>";
echo "Nilai Sejarah : {$NilaiSejarah}<br>";
echo "Rata Rata : ".($NilaiSejarah + $NilaiBindo)."<br>";
echo "Total Final {$ratarata}<br>";
echo var_dump($ratarata);
$a = 5;
$a += 50;
echo var_dump($a)."<br>";
$b = 50;
$b -= 5;
echo var_dump($b)."<br>";
$c = 10;
$c *= 10;
echo var_dump($c)."<br>";
$d = 10;
$d /= 10;
echo var_dump($d)."<br>";
$nilai = 90;
$rata = $nilai > 55;
echo "{$nilai} > 20";
var_dump($rata)."<br>";
var_dump(10 < 20);
echo "<br>";
echo var_dump("bcd" == "c");
// !=
// =>
// =<
var_dump(10 == "10");
echo "<br>";
var_dump(10 === "10");
echo "<br>";
var_dump(10 != "10");
echo "<br>";
var_dump(10 !== "10");
echo "<br>";
var_dump(10 <> "10");
echo "<br>";
var_dump(10 == 10);
var_dump(10 === 10);
// dan seterusnya
$aa = true;
$bb = false;
$cc = true && false;
$dd = true and false;
$ee = false || false;
$ff = true && true || false and true;
$gg = "a" === "a" && ((3 > 5) or 3 + 5 >= 7);
$hh = !false;
$ii = !true;
var_dump($aa)."<br>";
var_dump($bb)."<br>";
var_dump($cc)."<br>";
var_dump($dd)."<br>";
var_dump($ee)."<br>";
var_dump($ff)."<br>";
var_dump($gg)."<br>";
var_dump($hh)."<br>";
var_dump($ii)."<br>";
$M = 10;
echo "M = {$M}<br>";
$M++;
echo "M++ = {$M}<br>";
$M++;
$S = $M++;
echo "S = {$S}<br>";
$a--;
echo "a = {$a} <br>";
$a--;
echo "a = {$a} <br>";
$b = $a--;
echo "b = {$b} <br>";
echo "a = {$a} <br>";
$a = 5;
--$a;
$b = --$a;
echo "b = {$b}<br>"
$c = --$b;
echo "{$c};"
?>
