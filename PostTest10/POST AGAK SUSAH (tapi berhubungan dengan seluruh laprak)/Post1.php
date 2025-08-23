<?php
$file = "counter.txt";
$mode = $_GET['mode'] ?? 'r'; // default mode: r

function showContent($title, $content, $color = '#ccc', $bg = '#fff') {
    echo "<h3 align='center'>$title</h3>";
    echo "<pre style='border:1px solid $color; padding:10px; width:320px; margin:auto; background:$bg;'>$content</pre>";
}

if ($mode === 'r') {
    if (!file_exists($file)) file_put_contents($file, 1);

    $fl = fopen($file, "r+");
    $count = (int) fread($fl, filesize($file));
    fclose($fl);

    echo "<p align='center'>Anda pengunjung ke: <b>$count</b></p>";

    $count++;
    file_put_contents($file, $count);
}

elseif ($mode === 'w') {
    $old = file_exists($file) ? file_get_contents($file) : "(file belum ada)";
    showContent("Isi Sebelum Ditimpa (mode w)", $old);

    if (preg_match('/Hit ke-(\d+)/', $old, $match)) {
        $count = (int) $match[1] + 1;
    } else {
        $count = 1;
    }

    $new = "Hit ke-$count\nWaktu: " . date('Y-m-d H:i:s');
    file_put_contents($file, $new);

    showContent("Isi Setelah Ditimpa", $new, "#090", "#eaffea");
}

elseif ($mode === 'a') {
    $old = file_exists($file) ? file_get_contents($file) : "(file belum ada)";
    showContent("Isi Sebelum Ditambahkan (mode a)", $old);

    $lines = explode("\n", trim($old));
    $count = 1;

    foreach (array_reverse($lines) as $line) {
        if (preg_match('/Kunjungan ke-(\d+)/', $line, $m)) {
            $count = (int)$m[1] + 1;
            break;
        }
    }

    $append = "Kunjungan ke-$count pada " . date('Y-m-d H:i:s');
    file_put_contents($file, "$append\n", FILE_APPEND);

    showContent("Isi Setelah Ditambahkan", "$old\n$append", "#090", "#eaffea");
}

else {
    echo "<p align='center'>❗ Mode tidak dikenal. Gunakan ?mode=r, ?mode=w, atau ?mode=a</p>";
}
?>

<hr>
<div style="text-align:center;">
    <form method="get">
        <label>Pilih Mode: </label>
        <select name="mode">
            <option value="r">R (baca dan update angka)</option>
            <option value="w">W (tulis ulang/overwrite)</option>
            <option value="a">A (tambah baris baru)</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</div>
