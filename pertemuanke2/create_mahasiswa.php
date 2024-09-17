<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function show() {
            alert('Data berhasil tersimpan');
            window.location.href = '<?php echo $_SERVER['PHP_SELF']; ?>';
        }
    </script>
</head>
<body>
    <?php 
    // Include koneksi database
    include_once 'koneksi.php'; // Pastikan nama file dan pathnya benar

    if (isset($_POST['beraksi']) && $_POST['beraksi'] == 'save') {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];

        $sql = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";

        $hasil = $koneksi->query($sql);
        // Eksekusi query
        if ($hasil) {
            // Alihkan ke JavaScript untuk menampilkan alert dan redirect
            echo "<script>show();</script>";
        } else {
            echo 'Gagal menyimpan data';
        }
    }
    ?>

    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Ambil data dari database untuk ditampilkan dalam tabel
            $no = 1; 
            $result = $koneksi->query("SELECT * FROM mahasiswa") or die($koneksi->error);
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td> 
                <td><?php echo($row['nama']); ?></td>
                <td><?php echo($row['nim']); ?></td>
                <td><?php echo($row['jurusan']); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <br><br>
    <div>
        <a href="mahasiswa.php"><-Back</a>
    </div>

    <form name="form_mahasiswa" method="post">
        <label for="">Mahasiswa: </label>
        <input type="text" name="nama" required><br>
        <label for="">NIM: </label>
        <input type="text" name="nim" required><br>
        <label for="">Jurusan: </label>
        <input type="text" name="jurusan" required><br>
        <button type="submit" name="beraksi" value="save">Save</button>
    </form>
</body>
</html>
