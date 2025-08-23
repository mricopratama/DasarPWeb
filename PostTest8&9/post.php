<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
</head>
<body>

<form method="post">
    Nama: <input type="text" name="nama" required><br>
    Kelas: <input type="text" name="kelas" required><br>
    Identitas:<br>
    <input type="radio" name="gender" value="mahasiswa" required> Mahasiswa<br>
    <input type="radio" name="gender" value="mahasiswi"> Mahasiswi<br>
    <input type="radio" name="gender" value="sigma"> Sigma<br>
    <input type="radio" name="gender" value="jawa"> Jawa<br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $genderInput = $_POST['gender'];
    $phpRepeated = rtrim(str_repeat("PHP ", 3));
    $tanggal = date("d-m-Y");
    $jumlahHuruf = strlen($nama);

    switch ($genderInput) {
        case "mahasiswa":
            $label = "seorang mahasiswa";
            break;
        case "mahasiswi":
            $label = "seorang mahasiswi";
            break;
        case "sigma":
            $label = "seorang sigma";
            break;
        case "jawa":
            $label = "seorang jawa";
            break;
        default:
            $label = "seorang individu";
    }

    echo "<p>Saya adalah $label dengan nama $nama dari kelas $kelas sedang belajar \"$phpRepeated\" pada tanggal $tanggal dan jumlah huruf dari nama saya adalah $jumlahHuruf.</p>";
}
?>

</body>
</html>
