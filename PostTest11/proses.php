<?php
    echo "<head>";
    echo "<title>Simpan Buku</title>";
    echo "<link rel='stylesheet' href='style-proses.css'>";
    echo "</head>";
    $fp = fopen("guestbook.txt","a+");
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $uploadedFile = $_FILES['fupload']['name'];
    $deskripsi = $_POST['deskripsi'];

    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file   = $_FILES['fupload']['name'];
    $direktori   = "./file_upload/$nama_file";
    move_uploaded_file($lokasi_file, $direktori);
    
    fputs($fp, "$nama|$alamat|$email|$status|$uploadedFile|$deskripsi\n");
    fclose($fp);
    
    echo "<h2>Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu</h2><br>";
    echo "<a href=tampilan.html> Unggah Buku </a><br>";
    echo "<a href=lihat.php> Lihat Buku Tersimpan </a><br>";