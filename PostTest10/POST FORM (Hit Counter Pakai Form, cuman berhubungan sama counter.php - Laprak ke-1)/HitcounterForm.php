<!-- 
 Note: POSTTEST yang ini tinggal copas kode dari counter.php sebelumnya 
 yang udah dijelasin di laprak, terus ditambahin FORM HTML dan PHP baru buat Post Method-nya (output). 
 -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>

<center><h1>FORM SEDERHANA DAN HIT COUNTER</h1></center>

<form method="post" action="">
    <table align="center" cellpadding="5">
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>NIM:</td>
            <td><input type="text" name="nim" required></td>
        </tr>
        <tr>
            <td>Prodi:</td>
            <td><input type="text" name="prodi" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td>
                <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><textarea name="alamat" rows="3" cols="30" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Kirim"></td>
        </tr>
    </table>
</form>

<!-- UNTUK MENAMPILKAN OUTPUT DATA YANG TELAH DIINPUT -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div align='center'>";
    echo "<h3>Data yang Anda Masukkan:</h3>";
    echo "Nama: " . htmlspecialchars($_POST["nama"]) . "<br>";
    echo "NIM: " . htmlspecialchars($_POST["nim"]) . "<br>";
    echo "Prodi: " . htmlspecialchars($_POST["prodi"]) . "<br>";
    echo "Jenis Kelamin: " . htmlspecialchars($_POST["jk"]) . "<br>";
    echo "Alamat: " . htmlspecialchars($_POST["alamat"]) . "<br>";
    echo "</div><br>";
}
?>

<!-- Kode Yang Sama Dengan counter.php (laprak 1) -->
<?php
    $filecounter = "counter.txt";
    $fl = fopen($filecounter, "r+");

    $hit = fread($fl, filesize($filecounter));

    echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
    echo("<td width=250 valign=middle align=center>");
    echo("<font face=verdana size=2 color=#FF0000><b>");
    echo("Anda pengunjung yang ke:");
    echo($hit);
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");

    fclose($fl);

    $fl = fopen($filecounter, "w+");
    $hit = $hit + 1;
    fwrite($fl, $hit, strlen($hit));
    fclose($fl);
?>
</body>
</html>


