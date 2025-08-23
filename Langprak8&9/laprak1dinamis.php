<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Basic</title>
</head>
<body>
    <h2>Form Biodata</h2>

    <!-- Form input, data dikirim dengan metode POST -->
    <form method="post">
        <!-- Input nama -->
        Nama: <input type="text" name="nama"><br><br>

        <!-- Input umur -->
        Umur: <input type="number" name="umur"><br><br>

        <!-- Input tinggi badan -->
        Tinggi Badan (cm): <input type="text" name="tinggi"><br><br>

        <!-- Pilihan status mahasiswa dengan radio button -->
        Status Mahasiswa:<br>
        <input type="radio" name="isMahasiswa" value="1" id="mahasiswa_ya" checked>
        <label for="mahasiswa_ya">Ya</label><br>
        <input type="radio" name="isMahasiswa" value="0" id="mahasiswa_tidak">
        <label for="mahasiswa_tidak">Tidak</label><br><br>

        <!-- Input hobi dalam bentuk teks -->
        Hobi (pisahkan dengan koma):<br>
        <input type="text" name="hobi"><br><br>

        <!-- Pilihan jurusan dengan radio button -->
        Jurusan:<br>
        <input type="radio" name="jurusan" value="Informatika" id="jurusan_informatika" checked>
        <label for="jurusan_informatika">Informatika</label><br>

        <input type="radio" name="jurusan" value="Kedokteran" id="jurusan_kedokteran">
        <label for="jurusan_kedokteran">Kedokteran</label><br>

        <input type="radio" name="jurusan" value="Lainnya" id="jurusan_lainnya">
        <label for="jurusan_lainnya">Lainnya</label><br><br>

        <!-- Tombol kirim -->
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Mengecek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Menyimpan input dari form ke dalam variabel
        $nama = $_POST["nama"];
        $umur = (int)$_POST["umur"];
        $tinggi = (float)$_POST["tinggi"];
        
        // Mengubah nilai isMahasiswa menjadi teks "Ya" atau "Tidak"
        $isMahasiswa = $_POST["isMahasiswa"] == "1" ? "Ya" : "Tidak";

        // Hobi ditampilkan langsung (tanpa diproses jadi array)
        $hobi = $_POST["hobi"];

        // Menyimpan pilihan jurusan
        $jurusan = $_POST["jurusan"];

        // Menampilkan hasil input
        echo "<hr><h3>Hasil Input:</h3>";
        echo "Nama: $nama<br>";
        echo "Umur: $umur tahun<br>";
        echo "Tinggi: $tinggi cm<br>";
        echo "Mahasiswa: $isMahasiswa<br>";

        // Menentukan kategori berdasarkan umur
        if ($umur < 13) {
            echo "Kategori: Anak-anak<br>";
        } elseif ($umur < 20) {
            echo "Kategori: Remaja<br>";
        } else {
            echo "Kategori: Dewasa<br>";
        }

        // Menampilkan jurusan
        echo "Jurusan: $jurusan<br>";

        // Menampilkan hobi secara langsung
        echo "<br>Hobi: $hobi<br>";
    }
    ?>
</body>
</html>
