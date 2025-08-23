<?php
$filecounter = "counter.txt";

// Baca isi lama terlebih dahulu
$isiLama = "(file belum ada atau kosong)";
if (file_exists($filecounter) && filesize($filecounter) > 0) {
    $isiLama = file_get_contents($filecounter);
}

// Hitungan berdasarkan baris
$lines = explode("\n", trim($isiLama));
$hit = count(array_filter($lines)) + 1;

// Tampilkan isi lama
echo "<h3 align='center'>Isi File Sebelum Ditambahkan (mode 'a'):</h3>";
echo "<pre style='border:1px solid #ccc; padding:10px; width:320px; margin:auto;'>$isiLama</pre>";
echo "<br>";

// Tambahkan baris baru ke file
echo "<br>";
$baru = "Kunjungan ke-$hit pada " . date("Y-m-d H:i:s");
$fl = fopen($filecounter, "a"); // Tambah, tidak hapus isi
fwrite($fl, "$baru\n");
fclose($fl);

// Tampilkan hasil setelah ditambahkan
$isiBaru = $isiLama . "\n" . $baru;

echo "<h3 align='center'>Isi File Setelah Ditambahkan (mode 'a'):</h3>";
echo "<pre style='border:1px solid #090; padding:10px; width:320px; margin:auto; background:#eaffea;'>$isiBaru</pre>";
?>
