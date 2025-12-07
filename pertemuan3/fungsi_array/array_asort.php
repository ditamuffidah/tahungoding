<?php
    $nama = ["Citra", "Andi", "Budi"];
    $nilai = ["Andi" => 80, "Budi" => 90, "Citra" => 85];

    asort($nilai);
    echo "Setelah asort() (nilai naik): <br>";
    print_r($nilai);
    echo "<br><br>";
?>