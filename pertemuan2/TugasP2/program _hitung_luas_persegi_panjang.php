<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Persegi Panjang</title>

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #dfe9f3, #ffffff);
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            width: 90%;
            max-width: 450px;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
            animation: fadeIn 0.5s ease;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2d3436;
        }

        label {
            font-weight: 600;
            color: #2d3436;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 1px solid #b2bec3;
            outline: none;
            transition: 0.2s ease;
        }

        input:focus {
            border-color: #0984e3;
            box-shadow: 0 0 6px rgba(9,132,227,0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #0984e3;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.2s ease;
        }

        button:hover {
            background: #074ea6;
        }

        .result {
            background: #dfe6e9;
            padding: 15px;
            margin-top: 20px;
            border-radius: 12px;
            font-weight: 600;
            color: #2d3436;
            animation: fadeIn 0.5s ease;
        }

        .error {
            color: red;
            font-weight: 600;
            margin-top: 15px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Hitung Luas Persegi Panjang</h2>

    <form method="POST">
        <label>Panjang:</label>
        <input type="number" name="panjang" value="<?php echo isset($_POST['panjang']) ? $_POST['panjang'] : ''; ?>" required>

        <label>Lebar:</label>
        <input type="number" name="lebar" value="<?php echo isset($_POST['lebar']) ? $_POST['lebar'] : ''; ?>" required>

        <button type="submit">Hitung Luas</button>
    </form>

    <?php
        function hitungLuas($p, $l) {
            return $p * $l;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $panjang = $_POST["panjang"];
            $lebar   = $_POST["lebar"];

            if ($panjang > 0 && $lebar > 0) {
                $luas = hitungLuas($panjang, $lebar);

                echo "<div class='result'>
                        Hasil Perhitungan:<br><br>
                        Panjang = $panjang <br>
                        Lebar = $lebar <br>
                        <strong>Luas Persegi Panjang = $luas</strong>
                      </div>";
            } else {
                echo "<p class='error'>Panjang dan Lebar harus lebih dari 0!</p>";
            }
        }
    ?>

</div>

</body>
</html>
