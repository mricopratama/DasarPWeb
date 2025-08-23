<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Contoh PHP dengan HTML</title>
</head>
<body>

    <pre>
<?php
// Tipe Data dan Variabel
$nama = "Hilmi";               // string
$umur = 20;                    // integer
$tinggi = 170.5;               // float
$isMahasiswa = true;           // boolean
$hobi = ["ngoding", "ngopi"];  // array

echo "Nama: $nama\n";
echo "Umur: $umur tahun\n";
echo "Tinggi: $tinggi cm\n";
echo "Mahasiswa: " . 
    ($isMahasiswa ? "Ya" : "Tidak") . "\n\n";

// Percabangan (if, else, elseif)
if ($umur < 13) {
    echo "Anak-anak\n";
} elseif ($umur < 20) {
    echo "Remaja\n";
} else {
    echo "Dewasa\n";
}

// Percabangan switch
$jurusan = "Informatika";

switch ($jurusan) {
    case "Kedokteran":
        echo "Kamu ambil jurusan Kedokteran\n";
        break;
    case "Informatika":
        echo "Kamu ambil jurusan Informatika\n";
        break;
    default:
        echo "Jurusan tidak diketahui\n";
        break;
}

// Perulangan for
echo "\nPerulangan for:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Angka: $i\n";
}

// Perulangan while
echo "\nPerulangan while:\n";
$counter = 1;
while ($counter <= 3) {
    echo "Counter ke-$counter\n";
    $counter++;
}

// Perulangan foreach
echo "\nPerulangan foreach (Hobi):\n";
foreach ($hobi as $aktivitas) {
    echo "- $aktivitas\n";
}
?>
    </pre>
</body>
</html>
