<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Mahasiswa</title>
    </head>
    <body>
        <h1>Tambah Data Mahasiswa</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="nim">NIM : </label>
                    <input type="text" name="nim" id="nim" required>
                </li>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email" required>
                </li>
                <li>
                    <label for="prodi">Program Studi : </label>
                    <input type="text" name="prodi" id="prodi" required>
                </li>
                <li>
                    <label for="gambar">Gambar : </label>
                    <input type="text" name="gambar" id="gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>