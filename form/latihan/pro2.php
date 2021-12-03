<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nilaiMtk = $_POST['nilaiMtk'];
    $nilaiIndo = $_POST['nilaiIndo'];
    $nilaiIng = $_POST['nilaiIng'];
    $nilaiK = $_POST['nilaiK'];

    $jumlah = $nilaiMtk + $nilaiIndo + $nilaiIng + $nilaiK;
    $rata = $jumlah / 4;

    if ($jumlah < 340) {
        $data = "tidak diterima";
    } else if ($jumlah > 340) {
        $data = "diterima";
    }

    if ($rata < 8.5) {
        $data2 = "tidak diterima";
    } else if ($rata > 8.5) {
        $data2 = "diterima";
    }

    if ($data == "diterima" && $data2 == "diterima") {
        $hasil = "Anda Diterima Masuk Perguruan Tinggi";
    } else if ($data == "tidak diterima" && $data2 == "tidak diterima") {
        $hasil = "Anda Tidak Diterima Masuk Perguruan Tinggi";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Masuk Perguruan Tinggi</h1></center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Nilai Matematika : <b><?php echo $nilaiMtk; ?></b><br>
    Nilai Bahasa Indonesia : <b><?php echo $nilaiIndo; ?></b><br>
    Nilai Bahasa Inggris : <b><?php echo $nilaiIng; ?></b><br>
    Nilai Kejuruan : <b><?php echo $nilaiK; ?></b><br>
    <hr>
    Jumlah Nilai : <b><?php echo $jumlah; ?></b><br>
    Rata-rata Nilai : <b><?php echo $rata; ?></b><br>
    <b><?php echo $hasil; ?></b>
</body>
</html>