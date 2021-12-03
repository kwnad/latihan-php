<?php
$siswa = [
    ['nama' => 'Risman Nurrizki', 'jk' => "Laki-laki", 'umur' => 16],
    ['nama' => 'Risnadia Azizah', 'jk' => 'Perempuan', 'umur' => 16],
    ['nama' => 'Rizal Firziawan', 'jk' => 'Laki-laki', 'umur' => 17],
    ['nama' => 'Rizky Yudha', 'jk' => 'Laki-laki', 'umur' => 17],
    ['nama' =>'Robby Fauzia', 'jk' => 'Laki-laki', 'umur' => 17]
];

foreach ($siswa as $value) {
    echo "Nama : " . $value['nama'] . "<br>";
    echo "Jenis Kelamin : " . $value['jk'] . "<br>";
    echo "Umur : " . $value['umur'] . " tahun" . "<br>";
    echo "<hr>";
}

?>