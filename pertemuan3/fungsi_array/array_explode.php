<?php
    $nama = ["Citra", "Andi", "Budi"];
    $kalimat = "Senin, Selasa, Rabu";
    $hari = explode(",", $kalimat);

    echo "Hasil explode: <br>";
    print_r($hari);
    echo "<br><br>";
?>