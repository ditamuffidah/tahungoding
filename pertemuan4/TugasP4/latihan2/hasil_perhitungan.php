<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Perhitungan</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background: #f4f6f8;
                padding: 30px;
            }

            .container {
                max-width: 450px;
                margin: auto;
                background: #ffffff;
                padding: 25px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            }

            h2 {
                text-align: center;
                color: #2c3e50;
                margin-bottom: 20px;
            }

            .box {
                background: #f0f2f5;
                padding: 12px;
                border-radius: 6px;
                margin: 10px 0;
            }

            .label {
                font-weight: bold;
            }

            .desc {
                margin-top: 15px;
                font-size: 0.95rem;
                color: #333;
                line-height: 1.5;
            }

            a {
                display: block;
                text-align: center;
                margin-top: 20px;
                text-decoration: none;
                font-weight: bold;
                color: #2c3e50;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Hasil Perhitungan</h2>

            <?php
                $data_ada = isset($_POST['panjang']) && isset($_POST['lebar']);

                if ($data_ada) {
                    $panjang = $_POST['panjang'];
                    $lebar   = $_POST['lebar'];
                    $luas = $panjang * $lebar;
                }
            ?>

            <?php if ($data_ada): ?>
                <div class="box"><span class="label">Panjang:</span> <?= $panjang ?></div>
                <div class="box"><span class="label">Lebar:</span> <?= $lebar ?></div>
                <div class="box"><span class="label">Hasil:</span> <?= $luas ?></div>

                <div class="desc">
                    <strong>Deskripsi:</strong><br>
                    Perhitungan ini digunakan untuk menghitung <b>luas persegi panjang</b>.
                    Rumus yang digunakan adalah <b>Panjang × Lebar</b>.
                    Hasil perhitungan menunjukkan luas suatu bidang berdasarkan nilai
                    panjang dan lebar yang dimasukkan oleh pengguna.
                </div>
            <?php else: ?>
                <div class="desc" style="text-align:center;">
                    <strong>⚠ Data belum tersedia</strong><br>
                    Silakan kembali ke halaman form dan isi nilai panjang dan lebar terlebih dahulu.
                </div>
            <?php endif; ?>

            <a href="form_perhitungan.php">← Kembali ke Form</a>
        </div>
    </body>
</html>
