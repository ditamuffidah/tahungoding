<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Perhitungan Luas</title>

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

            label {
                display: block;
                margin-top: 15px;
                font-weight: bold;
            }

            input {
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
            <h2>Perhitungan Luas Persegi Panjang</h2>

            <form action="hasil_perhitungan.php" method="POST">
                <label>Panjang</label>
                <input type="number" name="panjang" required>

                <label>Lebar</label>
                <input type="number" name="lebar" required>

                <button type="submit">Hitung</button>
            </form>
        </div>
    </body>
</html>
