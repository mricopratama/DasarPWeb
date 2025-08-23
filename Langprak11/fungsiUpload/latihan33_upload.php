<?php
    if (isset($_FILES['fupload']) && isset($_POST['deskripsi'])) {
        $lokasi_file = $_FILES['fupload']['tmp_name'];
        $nama_file = $_FILES['fupload']['name'];
        $deskripsi = $_POST['deskripsi'];
        $direktori = "gambar/$nama_file";

        if (move_uploaded_file($lokasi_file, $direktori)) {
            echo "Nama File : <b>$nama_file</b> berhasil di upload <br>";
            echo "Deskripsi File : <br>$deskripsi";

            $myDir = "gambar/";
            $dir = opendir($myDir);

            echo "Isi folder (klik link untuk download): <br>";

            while ($tmp = readdir($dir)) {
                // Skip directory entries . and ..
                if ($tmp == '.' || $tmp == '..') {
                    continue;
                }
                // Use the current file name ($tmp) for each link, not always $nama_file
                echo "<a href='$myDir$tmp' target='_blank'>$tmp</a><br>";
            }

            closedir($dir);
        } else {
            echo "File gagal diupload";
        }
    } else {
        echo "Silakan upload file melalui form.";
    }