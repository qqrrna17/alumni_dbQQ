<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nama_lengkap = $_POST['nama'];
    $angkatan = $_POST['angkatan'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO alumni (nama, angkatan, jurusan)
              VALUES ('$nama_lengkap', '$angkatan', '$jurusan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data berhasil disimpan!');
                window.location='dashboard_admin.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Alumni</title>
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
    <div class="main-container">
        <div class="form-card">
            <h2>Tambah Data Alumni</h2>
            <form method="POST" action="">
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="angkatan" placeholder="Angkatan" required>

    <select name="jurusan" required>
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
        <option value="Animasi">Animasi</option>
        <option value="Teknik Jaringan Akses Telekomunikasi">Teknik Jaringan Akses Telekomunikasi</option>
    </select>


                <div class="button-group">
                    <button type="submit" name="tambah" class="btn-simpan">Simpan</button>
                    <a href="dashboard_admin.php" class="btn-batal">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>