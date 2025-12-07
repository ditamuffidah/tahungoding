<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sorting Nama Mahasiswa</title>

<style>
    body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #eef2ff, #ffffff);
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 650px;
        margin: auto;
        background: #ffffffdd;
        backdrop-filter: blur(12px);
        padding: 25px;
        border-radius: 18px;
        box-shadow: 0 8px 18px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 15px;
    }

    .section-title {
        margin-top: 25px;
        font-weight: 600;
        font-size: 1.1rem;
        color: #3b4b68;
    }

    ul {
        list-style: none;
        padding: 0;
        margin-top: 10px;
    }

    li {
        background: #f5f8ff;
        margin: 8px 0;
        padding: 12px 18px;
        border-radius: 12px;
        font-size: 1rem;
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
    <h2>Sorting Nama Mahasiswa</h2>

    <?php 
        $mahasiswa = ["Rizky", "Dinda", "Bagas", "Citra", "Andi", "Salsa", "Putra"];
    ?>

    <div class="section-title">Sebelum Di-sort:</div>
    <ul>
        <?php 
        $no = 1;
        foreach ($mahasiswa as $nama) {
            echo "
                <li>
                    <div class='number'>$no</div>
                    $nama
                </li>
            ";
            $no++;
        }
        ?>
    </ul>

    <?php  
        sort($mahasiswa);
    ?>

    <div class="section-title">Sesudah Di-sort (A - Z):</div>
    <ul>
        <?php 
        $no = 1;
        foreach ($mahasiswa as $nama) {
            echo "
                <li>
                    <div class='number'>$no</div>
                    $nama
                </li>
            ";
            $no++;
        }
        ?>
    </ul>

</div>

</body>
</html>
