<?php
$helm = true;
$stnk = true;
$sim = false;

if ($helm == true && $stnk == false) {
    echo "Kami cek perlengkapan surat stnk & sim nya";
} else if ($helm == true && $stnk == true && $sim == false) {
    echo "Surat lengkap boleh kami cek sim nya?";
} else if ($helm == true && $stnk == true && $sim == true) {
    echo "Selamat berkendara hati-hati di jalan";
} else {
    echo "Anda kami tilang";
}
?>