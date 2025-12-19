<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Biodata Mahasiswa</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background: #f4f6f8;
                padding: 30px;
            }

            .container {
                max-width: 500px;
                margin: auto;
                background: #ffffff;
                padding: 25px;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            }

            h2 {
                text-align: center;
                color: #2c3e50;
                margin-bottom: 20px;
            }

            .data {
                margin: 10px 0;
                padding: 10px;
                background: #f0f2f5;
                border-radius: 6px;
            }

            .label {
                font-weight: bold;
                color: #34495e;
            }

            a {
                display: block;
                text-align: center;
                margin-top: 20px;
                color: #2c3e50;
                text-decoration: none;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Hasil Biodata Mahasiswa</h2>

            <?php
                $data_ada = 
                    isset($_POST['nama']) &&
                    isset($_POST['nim']) &&
                    isset($_POST['jurusan']) &&
                    isset($_POST['umur']) &&
                    isset($_POST['semester']);

                if ($data_ada) {
                    $nama     = $_POST['nama'];
                    $nim      = $_POST['nim'];
                    $jurusan  = $_POST['jurusan'];
                    $umur     = $_POST['umur'];
                    $semester = $_POST['semester'];
                }
            ?>

            <?php if ($data_ada): ?>
                <div class="data"><span class="label">Nama:</span> <?= $nama ?></div>
                <div class="data"><span class="label">NIM:</span> <?= $nim ?></div>
                <div class="data"><span class="label">Jurusan:</span> <?= $jurusan ?></div>
                <div class="data"><span class="label">Umur:</span> <?= $umur ?> tahun</div>
                <div class="data"><span class="label">Semester:</span> <?= $semester ?></div>
            <?php else: ?>
                <div class="data" style="text-align:center;">
                    <strong>⚠ Data belum tersedia</strong><br>
                    Silakan isi form biodata terlebih dahulu.
                </div>
            <?php endif; ?>

            <a href="form_biodata.php">← Kembali ke Form</a>
        </div>

    </body>
</html>
