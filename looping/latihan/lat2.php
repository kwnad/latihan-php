<?php
$d = 3;
$c = 0;

echo "latihan 2 <br>";
echo "<br>";

for ($a = 1; $a <= 10; $a++) {
    for ($b = 3 + $c; $b <= $d; $b++) {
        echo "$b ";

    }
    $c += 2;
    $d += 3;

    echo "<br>";
}

?>