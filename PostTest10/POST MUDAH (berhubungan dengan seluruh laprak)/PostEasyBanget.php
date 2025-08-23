<?php
$file = "counter.txt";

// Jika file belum ada, buat dulu dengan nilai awal 1
if (!file_exists($file)) {
    file_put_contents($file, "1");
}

// Buka file untuk dibaca dan ditulis dari awal
$fp = fopen($file, "r+");
$hit = (int)fread($fp, filesize($file));

// Tambahkan 1 ke hitungan
$hit++;

// Tulis ulang ke file dari awal
rewind($fp);
fwrite($fp, $hit);
fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Counter Pengunjung</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 300px;
        }

        .counter-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: inline-block;
        }

        .counter-number {
            font-size: 40px;
            color: #007BFF;
            margin-top: 10px;
        }

        .label {
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="counter-box">
        <div class="label">Anda adalah pengunjung ke:</div>
        <div class="counter-number"><?php echo $hit; ?></div>
    </div>

</body>
</html>
