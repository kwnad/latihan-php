<?php
$jurusan = "TKRO";
$kelas = "11 TKRO";

if ($jurusan == "TKRO") {
    if ($kelas == "10 TKRO") {
        echo "Ini kelas 10 TKRO";
    } else if ($kelas == "11 TKRO") {
        echo "Ini kelas 11 TKRO";
    } else if ($kelas == "12 TKRO") {
        echo "Ini kelas 12 TKRO";
    } else {
        echo "Kelas Tidak Ada";
    }
} else if ($jurusan == "TBSM") {
    if ($kelas == "10 TBSM") {
        echo "Ini kelas 10 TBSM";
    } else if ($kelas == "11 TBSM") {
        echo "Ini kelas 11 TBSM";
    } else if ($kelas == "12 TBSM") {
        echo "Ini kelas 12 TBSM";
    } else {
        echo "Kelas Tidak Ada";
    }
} else if ($jurusan == "RPL") {
    if ($kelas == "10 RPL") {
        echo "Ini kelas 10 RPL";
    } else if ($kelas == "11 RPL") {
        echo "Ini kelas 11 RPL";
    } else if ($kelas == "12 RPL") {
        echo "Ini kelas 12 RPL";
    } else {
        echo "Kelas Tidak Ada";
    }
} else {
    echo "Jurusan Tidak Ada!";
}
?>