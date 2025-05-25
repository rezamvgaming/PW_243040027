<?php
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw_243040027');
// query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//  ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
// simpan ke variabel mahasiswa
$mahasiwa = $rows;
// var_dump($mahasiwa);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiwa as $mhs): ?>
            <tr>
                <td><?= $mhs['id'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
                <td>
                    <img src="img/<?= $mhs['gambar'] ?>" width="50">
                </td>
                <td>
                    <a href="">ubah</a> | <a href="">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>