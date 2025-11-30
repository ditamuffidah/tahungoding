<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Dua Angka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            background: #007bff;
            padding: 10px;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .hasil {
            margin-top: 20px;
            background: #e9ffe8;
            padding: 15px;
            border-radius: 5px;
            border-left: 5px solid #28a745;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Penjumlahan Dua Angka</h2>

    <form method="POST">
        <label>Angka Pertama:</label>
        <input type="number" name="angka1" value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : ''; ?>" required>

        <label>Angka Kedua:</label>
        <input type="number" name="angka2" value="<?php echo isset($_POST['angka2']) ? $_POST['angka2'] : ''; ?>" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 + $angka2;

        echo "<div class='hasil'>Hasil penjumlahan dari <b>$angka1 + $angka2</b> = <b>$hasil</b></div>";
    }
    ?>
</div>

</body>
</html>
