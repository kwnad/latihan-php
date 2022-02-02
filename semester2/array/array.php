<?php

// array biasa
$a = [
    "Bakso", "Ayam Goreng", "Ikan Bakar"
];

echo "<h3>Array Biasa</h3>";
echo $a[0] . "<br>";
echo $a[1] . "<br>";
echo $a[2] . "<br>";
echo "<hr>";


// array asosiatif
$array = [
    "judul" => "Array Asosiatif",
    "nama" => "Risnadia Azizah",
    "kelas" => "XI RPL 3"
];

echo "<h3>" . $array["judul"] . "</h3>";
echo "Nama : " . $array["nama"] . "<br>";
echo "Kelas : " . $array["kelas"];
echo "<hr>";

// array multidimensi
$matrik = [
    ["A", "B", "C"],
    ["D", "E", "F"]
];

echo "<h3>Array Multidimensi</h3>";
echo $matrik[1][2];
?>