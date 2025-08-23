# DasarPWeb

Koleksi file dari mata kuliah Dasar-dasar Pemrograman Web. Repositori ini berisi serangkaian Laporan Praktikum (`Langprak`) dan `Post-Test` yang mencakup berbagai aspek dasar pengembangan web, mulai dari HTML, CSS, JavaScript, hingga PHP dan interaksi dengan file.

## Struktur Folder

Repositori ini dibagi menjadi beberapa folder, masing-masing sesuai dengan topik praktikum dan post-test yang dikerjakan.

### Laporan Praktikum (Langprak)

-   **Langprak1**: Pengenalan tag-tag dasar HTML.
    -   `laprak1.html`: Menampilkan penggunaan heading, paragraf dengan perataan teks, font, dan tag subscript.
-   **Langprak2**: Penggunaan tabel dalam HTML untuk menyajikan data.
    -   `laprak2.html`: Contoh tabel data mahasiswa yang berisi nama, jenis kelamin, foto, dan tautan ke profil media sosial.
-   **Langprak3**: Pembuatan formulir dengan berbagai elemen input.
    -   `laprak3.html`: Contoh formulir pendaftaran UKM yang menggunakan input teks, checkbox, radio button, dropdown (select), dan textarea.
-   **Langprak4**: Pengenalan dan implementasi CSS.
    -   `inline.html`: Contoh penerapan CSS langsung pada elemen (inline CSS).
    -   `internal.html`: Contoh penerapan CSS di dalam tag `<style>` pada header HTML (internal CSS).
    -   `eksternal.html` & `style.css`: Contoh penggunaan file CSS eksternal untuk mengatur gaya halaman.
    -   `selector.html`: Demonstrasi berbagai jenis selector CSS seperti element, ID, class, universal, dan grouping.
-   **Langprak5**: Desain web menggunakan Figma dan implementasinya.
    -   `Laprak.docx`: Dokumen yang berisi langkah-langkah pengenalan dan penggunaan software desain Figma.
    -   `KuisLaprak.docx`: Tugas untuk membuat desain web berdasarkan contoh yang diberikan.
-   **Langprak6&7**: Pengenalan JavaScript untuk interaktivitas web.
    -   `langkahpraktikum.html` & `header.js`: Implementasi formulir pemesanan tiket dengan kalkulasi biaya menggunakan JavaScript. Termasuk fungsi untuk mengubah warna latar belakang halaman.
-   **Langprak8&9**: Dasar-dasar PHP.
    -   `laprak1statis.php`: Menjelaskan sintaks dasar PHP, variabel, tipe data, percabangan (if, else, switch), dan perulangan (for, while, foreach).
    -   `laprak1dinamis.php`: Contoh formulir biodata yang diproses menggunakan metode POST pada PHP.
    -   `laprak2.php`: Demonstrasi fungsi-fungsi bawaan PHP untuk string (`explode`, `implode`, `strlen`) dan waktu (`date`).
-   **Langprak10**: Manipulasi File dengan PHP.
    -   `counter.php`: Skrip untuk membuat penghitung jumlah pengunjung sederhana dengan membaca dan menulis data ke file `counter.txt`.
    -   `mode_w.php` & `mode_a.php`: Menunjukkan perbedaan mode penulisan file, yaitu 'w' (write/overwrite) dan 'a' (append/menambahkan).
-   **Langprak11**: Upload File dan Guestbook.
    -   `fungsiUpload`: Contoh dasar formulir untuk mengunggah file dan skrip PHP untuk memprosesnya.
    -   `guestBook`: Aplikasi buku tamu sederhana di mana pengguna dapat mengisi data yang kemudian disimpan dalam `guestbook.txt` dan ditampilkan.
-   **Langprak12**: Hosting.
    -   Materi mengenai cara meng-hosting atau mempublikasikan proyek web agar dapat diakses secara online.

### Post-Test

-   **PostTest1**: Aplikasi tag-tag dasar HTML.
    -   `posttest1.html`: Halaman sederhana tentang pentingnya lingkungan bersih, menggunakan heading, gambar, list (ordered dan unordered), dan tag format teks lainnya.
-   **PostTest2**: Tabel kompleks.
    -   `posttest2.html`: Halaman yang menampilkan data mahasiswa dalam sebuah tabel dengan `rowspan` dan `colspan`.
-   **PostTest3**: Formulir pendaftaran.
    -   `posttest3.html`: Formulir pendaftaran lengkap dengan validasi `required` untuk input nama, email, jenis kelamin, dan instansi.
    -   `terimakasih.html`: Halaman konfirmasi setelah formulir berhasil dikirim.
-   **PostTest4**: Kartu Tanda Mahasiswa (KTM) dan jadwal.
    -   `index.html` & `jadwal.html`: Halaman yang menampilkan KTP mahasiswa dan halaman terpisah untuk jadwal kuliah yang saling terhubung.
    -   `style.css`: File CSS untuk mengatur tampilan KTM dan tabel jadwal.
-   **PostTest5**: Layout halaman web.
    -   `Postest5.html` & `style.css`: Implementasi layout web statis yang terdiri dari header, top bar, konten utama, sidebar, dan footer.
-   **PostTest6&7**: Formulir interaktif dengan JavaScript.
    -   `posttest.html`, `style.css`, `script.js`: Formulir biodata interaktif yang memiliki fitur:
        -   **Ubah Tema**: Mengganti tema dari terang (`light-theme`) ke gelap (`dark-theme`).
        -   **Validasi & Tampilan Data**: Memeriksa apakah semua form telah diisi sebelum menampilkan data yang telah di-submit tanpa me-refresh halaman.
-   **PostTest8&9**: Aplikasi PHP.
    -   `post.php`: Menggabungkan form HTML dengan PHP untuk memproses input dan menampilkan output dinamis berdasarkan data yang dikirim, serta menggunakan fungsi `date()` dan `strlen()`.
-   **PostTest10**: Aplikasi Lanjutan Manipulasi File.
    -   Implementasi berbagai jenis penghitung pengunjung: sebuah counter sederhana dengan gaya, counter yang terintegrasi dengan formulir, dan counter dengan pilihan mode operasi file (read, write, append).
-   **PostTest11**: Proyek Buku Tamu dengan Upload File.
    -   `tampilan.html`, `proses.php`, `lihat.php`, `style.css`: Sebuah aplikasi buku tamu yang lebih lengkap di mana pengguna tidak hanya dapat mengirimkan teks tetapi juga mengunggah file. Data dan nama file yang diunggah akan disimpan dan ditampilkan dengan tautan untuk melihat file tersebut.
