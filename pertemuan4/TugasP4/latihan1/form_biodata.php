<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Biodata Mahasiswa</title>

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

            label {
                display: block;
                margin-top: 15px;
                font-weight: bold;
                color: #34495e;
            }

            input, select {
                width: 100%;
                padding: 10px;
                margin-top: 6px;
                border-radius: 6px;
                border: 1px solid #ccc;
            }

            button {
                margin-top: 25px;
                width: 100%;
                padding: 12px;
                background: #2c3e50;
                color: white;
                border: none;
                border-radius: 6px;
                font-size: 1rem;
                cursor: pointer;
            }

            button:hover {
                background: #1f2d3a;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <h2>Form Biodata Mahasiswa</h2>

            <form action="hasil_biodata.php" method="POST">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required>

                <label>NIM</label>
                <input type="text" name="nim" required>

                <label>Jurusan</label>
                <input type="text" name="jurusan" required>

                <label>Umur</label>
                <input type="number" name="umur" required>

                <label>Semester</label>
                <select name="semester" required>
                    <option value="">-- Pilih Semester --</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select>

                <button type="submit">Simpan Data</button>
            </form>
        </div>

    </body>
</html>
