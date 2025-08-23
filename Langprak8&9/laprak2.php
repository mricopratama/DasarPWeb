<!DOCTYPE html>
<html>
<head>
    <title>Contoh Fungsi PHP</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Contoh Fungsi-Fungsi String dan Waktu di PHP</h1>
    <?php
    // Fungsi echo
    echo "<h3>1. Fungsi echo:</h3>";
    echo "Halo, ini adalah teks yang ditampilkan dengan echo.<br><br>";

    // Fungsi explode
    $kalimat = "Halo,nama,saya,Hilmi";
    $arrayKata = explode(",", $kalimat);
    echo "<h3>2. Fungsi explode:</h3>";
    echo "<pre>";
    print_r($arrayKata);
    echo "</pre><br>";

    // Fungsi implode
    $gabung = implode(" ", $arrayKata);
    echo "<h3>3. Fungsi implode:</h3>";
    echo $gabung . "<br><br>";

    // Fungsi strlen
    $panjang = strlen($gabung);
    echo "<h3>4. Fungsi strlen:</h3>";
    echo "Jumlah karakter: $panjang<br><br>";

    // Fungsi strpos
    $posisi = strpos($gabung, "Hilmi");
    echo "<h3>5. Fungsi strpos:</h3>";
    echo $posisi !== false ? "Kata 'Hilmi' ditemukan di posisi: $posisi<br><br>" : "Kata tidak ditemukan.<br><br>";

    // Fungsi str_repeat
    $ulangi = str_repeat("PHP ", 3);
    echo "<h3>6. Fungsi str_repeat:</h3>";
    echo $ulangi . "<br><br>";

    // Fungsi strtolower
    $hurufKecil = strtolower($gabung);
    echo "<h3>7. Fungsi strtolower:</h3>";
    echo $hurufKecil . "<br><br>";

    // Fungsi strtoupper
    $hurufBesar = strtoupper($gabung);
    echo "<h3>8. Fungsi strtoupper:</h3>";
    echo $hurufBesar . "<br><br>";

    // Fungsi date
    $tanggal = date("l, d F Y - H:i:s");
    $tanggal = date("d-m-Y");
    echo "<h3>9. Fungsi date:</h3>";
    echo "Sekarang: $tanggal<br><br>";

    // Fungsi mail (hanya berfungsi jika server sudah dikonfigurasi)
    echo "<h3>10. Fungsi mail:</h3>";
    $to = "example@example.com";
    $subject = "Tes Email dari PHP";
    $message = "Ini adalah contoh email yang dikirim dari skrip PHP.";
    $headers = "From: admin@contoh.com";

    // Simulasi pengiriman (tidak akan berhasil di localhost)
    $terkirim = mail($to, $subject, $message, $headers);
    echo $terkirim ? "Email berhasil dikirim.<br>" : "Email gagal dikirim (kemungkinan karena berjalan di localhost).<br>";
    ?>
</body>
</html>
