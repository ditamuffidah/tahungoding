<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Barang</title>

        <style>
            body {
                font-family: "Poppins", sans-serif;
                background: linear-gradient(135deg, #dfe9f3, #ffffff);
                margin: 0;
                padding: 20px;
            }

            .container {
                max-width: 500px;
                margin: auto;
                background: #ffffffcc;
                backdrop-filter: blur(10px);
                padding: 25px;
                border-radius: 18px;
                box-shadow: 0 8px 18px rgba(0,0,0,0.1);
            }

            h2 {
                text-align: center;
                color: #2c3e50;
                margin-bottom: 20px;
            }

            ul {
                list-style: none;
                padding: 0;
            }

            li {
                background: #f5f8ff;
                margin: 10px 0;
                padding: 12px 18px;
                border-radius: 12px;
                font-size: 1.05rem;
                display: flex;
                align-items: center;
                gap: 10px;
                box-shadow: 0px 3px 8px rgba(180, 180, 255, 0.2);
                transition: 0.2s;
            }

            li:hover {
                transform: translateX(5px);
                background: #e9f0ff;
            }

            .number {
                background: #4c74ff;
                color: white;
                width: 28px;
                height: 28px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                font-weight: bold;
                font-size: 0.9rem;
            }
        </style>
    </head>

    <body>

    <div class="container">
        <h2>Daftar Barang</h2>

        <ul>
            <?php
            $barang = ["Buku Tulis", "Pensil", "Pulpen", "Penghapus", "Penggaris"];
            $no = 1;

            foreach ($barang as $item) {
                echo "
                    <li>
                        <div class='number'>$no</div>
                        $item
                    </li>
                ";
                $no++;
            }
            ?>
        </ul>
    </div>

    </body>
</html>
