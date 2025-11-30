<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Genap 1–20</title>

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 30px;
            width: 90%;
            max-width: 480px;
            border-radius: 18px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
            animation: fadeIn 0.4s ease;
        }

        h2 {
            color: #2d3436;
            margin-bottom: 10px;
        }

        p {
            color: #636e72;
            font-size: 15px;
        }

        .result-box {
            margin-top: 20px;
            padding: 15px;
            background: #dfe6e9;
            border-radius: 12px;
            font-weight: 600;
            color: #2d3436;
            letter-spacing: 1px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .card {
                padding: 20px;
                border-radius: 14px;
            }
        }
    </style>
</head>

<body>

<div class="card">
    <h2>Bilangan Genap 1 – 20</h2>
    <p>Program ini menampilkan bilangan genap dari 1 sampai 20.</p>

    <div class="result-box">
        <?php
            function cekGenap($angka) {
                return $angka % 2 == 0;
            }

            function tampilGenap($awal, $akhir) {
                for ($i = $awal; $i <= $akhir; $i++) {
                    if (cekGenap($i)) {
                        echo $i . " ";
                    }
                }
            }

            tampilGenap(1, 20);
        ?>
    </div>
</div>

</body>
</html>
