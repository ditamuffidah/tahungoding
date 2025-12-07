<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Produk</title>

        <style>
            body {
                font-family: "Poppins", sans-serif;
                background: linear-gradient(135deg, #e3f2fd, #ffffff);
                margin: 0;
                padding: 25px;
            }

            .container {
                max-width: 800px;
                margin: auto;
                background: #ffffffdd;
                backdrop-filter: blur(12px);
                padding: 25px;
                border-radius: 18px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            }

            h2 {
                text-align: center;
                color: #2c3e50;
                margin-bottom: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                border-radius: 12px;
                overflow: hidden;
                font-size: 1rem;
            }

            thead {
                background: #4c74ff;
                color: white;
            }

            th, td {
                padding: 14px 16px;
                text-align: left;
            }

            tbody tr:nth-child(even) {
                background: #f5f8ff;
            }

            tbody tr:hover {
                background: #eaf1ff;
                transition: .2s;
            }

            td {
                color: #2c3e50;
            }
        </style>
    </head>

    <body>

    <div class="container">
        <h2>Daftar Produk</h2>

        <?php  
            $produk = [
                ["Nama" => "Laptop",      "Harga" => "8.500.000",  "Stok" => 10],
                ["Nama" => "Mouse",       "Harga" => "150.000",    "Stok" => 45],
                ["Nama" => "Keyboard",    "Harga" => "350.000",    "Stok" => 33],
                ["Nama" => "Headset",     "Harga" => "420.000",    "Stok" => 20],
                ["Nama" => "Flashdisk",   "Harga" => "80.000",     "Stok" => 60]
            ];
        ?>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>

            <tbody>
                <?php  
                    $no = 1;
                    foreach ($produk as $p) {
                        echo "
                            <tr>
                                <td>$no</td>
                                <td>{$p['Nama']}</td>
                                <td>Rp {$p['Harga']}</td>
                                <td>{$p['Stok']} pcs</td>
                            </tr>
                        ";
                        $no++;
                    }
                ?>
            </tbody>
        </table>

    </div>

    </body>
</html>
