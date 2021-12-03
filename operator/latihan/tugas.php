<?php
$gajiKotor = 4500000;
$pajak = 0.025;
$bpjs = 200000;
$infak = 50000;
$uangTp = 10000;
$hari = 24;

$ptgPajak = $gajiKotor * $pajak;
$bonus = $uangTp * $hari;

$total = $gajiKotor - $infak - $ptgPajak - $bpjs + $bonus;

echo "Gaji Kotor : Rp. $gajiKotor";
echo "<br>";
echo "Pajak : 2.5% * Gaji Kotor <br>";
echo "= 2.5% * $gajiKotor <br>";
echo "= Rp. $ptgPajak";
echo "<br>";
echo "BPJS : Rp. $bpjs";
echo "<br>";
echo "Infak : Rp. $infak";
echo "<br>";
echo "Bonus Transport : Uang Transport * 24 Hari <br>";
echo "= $uangTp * $hari Hari <br>";
echo "= Rp. $bonus";
echo "<br>";
echo "Sisa Gaji : Gaji Kotor - BPJS - Pajak - Infak + Bonus <br>";
echo "= $gajiKotor - $bpjs - $ptgPajak - $infak + $bonus <br>";
echo "= Rp. $total";
echo "<br>";
?>