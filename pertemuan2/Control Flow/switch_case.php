<?php
    $hari = "Senin";

    switch ($hari) {
        case "Senin":
            echo "Awal minggu!";
            break;
        case "Jumat";
            echo "Hampir weekend!";
            break;
        case "Minggu";
            echo "Hari libur!";
            break;
        default:
            echo "Hari biasa";
    }
?>