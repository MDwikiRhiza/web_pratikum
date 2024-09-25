<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DATA SAYA</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
            <?php
            // Data mahasiswa bisa diambil dari database, tetapi untuk contoh ini kita menggunakan array.
            $mahasiswa = [
                ['nama' => 'M Dwiki Rhiza', 'npm' => '22313011', 'kelas' => 'TI 22 A'],
                
            ];

            // Loop untuk menampilkan data mahasiswa dalam tabel
            foreach ($mahasiswa as $mhs) {
                echo "<tr>";
                echo "<td>{$mhs['nama']}</td>";
                echo "<td>{$mhs['npm']}</td>";
                echo "<td>{$mhs['kelas']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>