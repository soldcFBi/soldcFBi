<?php
for($i = 0; $i<10; $i++){
  echo "spam 1 <br>";
}

for($i = 0; $i<=10; $i++){
  echo "perulangan ke - {$i}<br>";
}

for($i = 5; $i<100; $i += 2){
  echo "spam : {$i}<br>";
}

for ($i = 10; $i > 0; $i--) {
    echo "Nilai i = {$i} <br>";
}

for($i = 5; $i<10; $i++){
  for($a = 2; $a>10; $a++){
    echo "* ";
  }
  echo "<br>";
}

$listGolDarah = ["A","B","C","D","E"];
for($G = 0; $G<count($listGolDarah); $G++){
  echo "List gol darah : {$listGolDarah[$G]}<br>";
}

for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 20
    }
}

$a = 0;

while($a <10){
  echo "spam 10x";
  $a++;
}
echo "<br>";

$i = 1;
while($i % 3 !== 0){
  echo "pp {$i}<br>";
  
  $i = rand(1,100);
}
echo "<br>";

$i = 1;

while ($i % 3 !== 0) {
    if ($i % 5 === 0) {
      $i = rand(1, 500);
      continue; 
    }

    echo "Nilai i = {$i} <br>";

    if ($i > 50 && $i < 60) {
        break;
    }
    $i = rand(1, 500);
}

while(false){
  echo "perulangan ke -1<br>";
}
do {
  echo "perulangan ke -2<br>";
} while (false);

$listYt = ["yt","yt biru","yt vanced"];
foreach($listYt as $ytt){
  echo "yt : {$ytt}<br>";
}

$daftarLibur = ["senin","selasa","rabu","kamis","jumat","sabtu"];
foreach($daftarLibur as $hari => $apasaja){
  echo "hari[{$hari}] : {$apasaja}<br>";
}

?>
