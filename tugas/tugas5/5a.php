<?php

$mahasiswa = [
    [
        "nama" => "Reza Fauzan Zain",
        "nim" => "23040027",
        "email" => "rezamvgaming@gmail.com.",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Banyu Bianca",
        "nim" => "23040085",
        "email" => "banyukecil@gmal.com",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "Teguh Albab",
        "nim" => "23040007",
        "email" => "teguhbeat@gmal.com",
        "jurusan" => "Teknik Pangan"
    ],
    [
        "nama" => "Nopan Dwi Aditya",
        "nim" => "23040014",
        "email" => "subangpride@gmal.com",
        "jurusan" => "Teknik Sipil"
    ],
    [
        "nama" => "Daris Ahmad Fauzan",
        "nim" => "23040028",
        "email" => "darisanakcimaung@gmal.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Aqmal Ghifaliyan",
        "nim" => "23040011",
        "email" => "aqmalsepeda@gmal.com",
        "jurusan" => "Teknik Electro"
    ],
    [
        "nama" => "Taufik HIdayat",
        "nim" => "23040093",
        "email" => "opik31@gmal.com",
        "jurusan" => "Sistem Informasi"
    ],
    [
        "nama" => "Zaqi Nuh Abdulah",
        "nim" => "23040094",
        "email" => "jekkanakbaik@gmal.com",
        "jurusan" => "Manajemen Bisnis"
    ],
    [
        "nama" => "Muhamad Malpin",
        "nim" => "23040095",
        "email" => "malpin250cc@gmal.com",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "Niken Arsha",
        "nim" => "23040097",
        "email" => "nikencantik@gmal.com",
        "jurusan" => "Fakultas Hukum"
    ]

];
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

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>Nim : <?php echo $mhs["nim"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>