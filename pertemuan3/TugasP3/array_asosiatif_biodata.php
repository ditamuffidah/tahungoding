<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biodata Mahasiswa</title>

        <style>
            body {
                font-family: "Poppins", sans-serif;
                background: linear-gradient(135deg, #fff1f5, #f0f4ff);
                margin: 0;
                padding: 20px;
            }

            .container {
                max-width: 600px;
                margin: auto;
                background: #ffffffdd;
                backdrop-filter: blur(12px);
                padding: 25px;
                border-radius: 18px;
                box-shadow: 0 8px 18px rgba(0,0,0,0.1);
            }

            h2 {
                text-align: center;
                color: #2b3a55;
                margin-bottom: 20px;
            }

            .biodata-box {
                margin: 12px 0;
                padding: 14px 18px;
                background: #f8faff;
                border-radius: 12px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0px 4px 10px rgba(180,180,255,0.2);
                transition: .2s;
            }

            .biodata-box:hover {
                transform: translateY(-3px);
                background: #eef3ff;
            }

            .label {
                font-weight: 600;
                color: #4c4c6d;
            }

            .value {
                color: #2c3e50;
            }
        </style>
    </head>

    <body>

    <div class="container">
        <h2>Biodata Mahasiswa</h2>

        <?php  
            $biodata = [
                "Nama"       => "Dita Muffidah",
                "NIM"        => "250660121062",
                "Prodi"      => "Informatika",
                "Kelas"      => "IF-ID"
            ];

            foreach ($biodata as $key => $value) {
                echo "
                    <div class='biodata-box'>
                        <div class='label'>$key</div>
                        <div class='value'>$value</div>
                    </div>
                ";
            }
        ?>
    </div>

    </body>
</html>
