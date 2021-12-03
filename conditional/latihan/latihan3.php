<?php
$nama = "Ratna";
$status = "Sekretaris";
$keluarga = 1;
$lembur = 35;
$transport = 35000;

echo "Nama Pekerja : ". $nama . "<br>";
echo "Status : " . $status . "<br>";

if ($status == "Manager") {
    $gaji = 4500000;
    $uangLembur = 50000 * $lembur; 
    echo "Gaji Pokok : " . $gaji;
} else if ($status == "Sekretaris") {
    $gaji = 3500000;
    $uangLembur = 45000 * $lembur;
    echo "Gaji Pokok : " . $gaji;
} else if ($status == "Staff") {
    $gaji = 3000000;
    $uangLembur = 30000 * $lembur;
    echo "Gaji Pokok : " . $gaji;
} else if ($status == "Karyawan") {
    $gaji = 2800000;
    $uangLembur = 25000 * $lembur;
    echo "Gaji Pokok : " . $gaji;
}

echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : " . $bpjs . "<br>";
$pajak = 0.025 * $gaji;
echo "Pajak : " . $pajak . "<br>";

echo "<hr>";

$potongan = $bpjs + $pajak;
echo "Total Potongan : " . $potongan . "<br>";

echo "<hr>";

$tunjangan = 0.1 * $gaji;
echo "Tunjangan : " . $tunjangan . "<br>";
echo "Lembur : " . $uangLembur . "<br>";
$uangTransport = $transport * 24;
echo "Transportasi : " . $uangTransport . "<br>";

echo "<hr>";

$bonus = $tunjangan + $uangLembur + $uangTransport;
echo "Bonus : " . $bonus . "<br>";

echo "<hr>";

$gajiBersih = $gaji - $potongan + $bonus;
echo "Gaji Bersih : " . $gajiBersih . "<br>";
?>