<?php
$filecounter = "counter.txt";

// Baca isi lama terlebih dahulu (jika ada)
$isiLama = "(file belum ada atau kosong)";
if (file_exists($filecounter) && filesize($filecounter) > 0) {
    $fl = fopen($filecounter, "r");
    $isiLama = fread($fl, filesize($filecounter));
    fclose($fl);
}

// Tampilkan isi file sebelum ditimpa
echo "<h3 align='center'>Isi File Sebelum Ditimpa:</h3>";
echo "<pre style='border:1px solid #ccc; padding:10px; width:320px; margin:auto;'>$isiLama</pre>";

// Ambil angka hit terakhir dari string menggunakan regex
if (preg_match('/Hit ke-(\d+)/', $isiLama, $matches)) {
    $hit = intval($matches[1]) + 1;
} else {
    $hit = 1; // Jika file belum ada atau belum mengandung angka hit
}

// Format isi baru yang akan ditulis
$isiBaru = "Hit ke-$hit\nWaktu update: " . date("Y-m-d H:i:s") . "\nDitulis ulang dengan mode 'w' (overwrite)";

// Tulis ulang isi file menggunakan mode 'w' (overwrite)
$fl = fopen($filecounter, "w");
fwrite($fl, $isiBaru);
fclose($fl);

// Tampilkan isi baru setelah ditulis ulang
echo "<h3 align='center'>Isi File Setelah Ditimpa (mode 'w'):</h3>";
echo "<pre style='border:1px solid #090; padding:10px; width:320px; margin:auto; background:#eaffea;'>$isiBaru</pre>";
?>
