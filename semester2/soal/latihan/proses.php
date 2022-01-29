<?php
if (isset($_POST['kirim'])) {
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];

    if ($pilih == 1) {
        echo "<h3>Segitiga Siku-siku</h3>";
        for ($i = 1; $i <= $angka; $i++) {
            for ($a = 1; $a <= $i; $a++) {
                echo "$a ";
            }
            echo "<br>";
        }
    } else if ($pilih == 2) {
        echo "<center>";
        echo "<h3>Segitiga Terbalik</h3>";
        for ($i = $angka; $i >= 1; $i--) {
            for ($a = $angka; $a > $i; $a--) {
                echo " ";
            }
            for ($b = 1; $b <= $i; $b++) {
                echo "$b ";
            }
            echo "<br>";
        }
    } else if ($pilih == 3) {
        echo "<h3>Segitiga Siku-siku Terbalik</h3>";
        for ($i = $angka; $i >= 1; --$i) {
            for ($j = $angka; $j >= $i; --$j) {
                echo "$j &nbsp";
            }
            echo '<br>';
        }
    }
}
?>