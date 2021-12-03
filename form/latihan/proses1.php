<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    if ($jk == "Laki-laki") {
        if ($tb < 170) {
            $data = "tidak memenuhi persyaratan";
        } else if ($tb > 170) {
            $data = "memenuhi persyaratan";
        }
    } else if ($jk == "Perempuan") {
        if ($tb < 160) {
            $data = "tidak memenuhi persyaratan";
        } else if ($tb > 160) {
            $data = "memenuhi persyaratan";
        }
    }

    if ($jk == "Laki-laki") {
        if ($bb > 90) {
            $data2 = "tidak memenuhi persyaratan";
        } else if ($bb < 90) {
            $data2 = "memenuhi persyaratan";
        }
    } else if ($jk == "Perempuan") {
        if ($tb > 75) {
            $data2 = "tidak memenuhi persyaratan";
        } else if ($tb < 75) {
            $data2 = "memenuhi persyaratan";
        }
    }

    if ($data == "memenuhi persyaratan" && $data2 == "memenuhi persyaratan") {
        $hasil = "Anda Diterima";
    } else if ($data == "tidak memenuhi persyaratan" && $data2 == "tidak memenuhi persyaratan") {
        $hasil = "Anda Tidak Diterima";
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
    <center><h1>Formulir Syarat Masuk TNI/Polri</h1></center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Tinggi Badan : <b><?php echo $tb . " = " . $data; ?></b><br>
    Berat Badan : <b><?php echo $bb . " = " . $data2; ?></b><br>
    Jenis Kelamin : <b><?php echo $jk; ?></b><br>
    <br>
    <b><?php echo $hasil; ?></b>
</body>
</html>