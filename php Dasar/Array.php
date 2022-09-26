<?php
$items = [
    "coin",
    "armor",
    "sword"
];
echo "items 1 = ".$items[0]."<br>";
echo "items 2 = ".$items[1]."<br>";
echo "items 3 = ".$items[2]."<br>";
echo "<hr>";
echo "<h3><b>all items</b></h3>";
foreach ($items as $list){
    echo "list items : ".$list."<br>";
}
echo "<hr>";
$player = [
    "Nama" => "user guest",
    "jenis" => "mage",
    "base" => "api"
];
echo "<i>Nama player</i>  : {$player['Nama']}<br>";
echo "<i>Jenis player<i> : {$player['jenis']}<br>";
echo "<i>Base player</i>  : {$player['base']}<br>";
echo "<hr>";

$host = [
    [1,2,3,4,5],
    [6,7,8,9,10],
    [11,13,14,15]
];
echo "server terpilih : ".$host[0][2]."<br>";
echo "<hr>";

$local = [
    "local 1",
    "local 2",
    [1329,7482],
    [4249,6614],
    true,
    false
];
echo "Server Local : ".$local[0][2]."<br>";
echo "<hr>";

$buah = ["apel","jeruk","anggur","mangga","kelapa"];
array_push($buah, "melon","keres");
foreach ($buah as $tambahan){
    echo "Tambahan buah : ".$tambahan."<br>";
}
echo "<hr>";
array_pop($buah);
foreach ($buah as $basi){
    echo "buah yang tersedia : ".$basi."<br>";
}
$warnaTerang = ['Kuning', 'Hijau', 'Pink'];
$warnaGelap = ['Hitam', 'Abu-abu', 'Cokelat'];

# gabungkan dua array tersebut menjadi 1
$gabunganWarna = array_merge($warnaTerang, $warnaGelap);

# fungsi array_merge bisa menerima lebih dari 2 array
$semuaWarna = array_merge(
  $warnaTerang,
  $warnaGelap,
  ['Magenta', 'Cyan', 'Hijau Kelabu']
);
?>
