<!DOCTYPE html>
<html>

<head>
    <title>Latihan</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin: 1px;
            text-align: center;
            vertical-align: middle;
            line-height: 30px;
            border: 1px solid #000;
        }

        .warna {
            background-color: #00BFFF;
        }
    </style>
</head>

<body>

    <form method="POST" action="">
        <label>Masukkan Angka: </label>
        <input type="number" name="angka" required>
        <input type="submit" value="Tampilkan">
    </form>
    <br>

    <?php
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];

        for ($i = $angka; $i >= 1; $i--) {
            // Spacer kosong untuk meratakan ke kanan
            for ($spasi = $angka - $i; $spasi > 0; $spasi--) {
                echo "<div class='box' style='border: none; background: none;'></div>";
            }

            for ($j = 1; $j <= $i; $j++) {
                $class = ($i % 2 == 0) ? "box warna" : "box";
                echo "<div class='$class'>$i</div>";
            }
            echo "<br>";
        }
    }

    if (isset($_GET['angka'])) {
        $angka = intval($_GET['angka']);

        echo "<div style='font-family: Arial;'>";

        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<span style='display: inline-block; width: 30px; height: 30px;
                          text-align: center; line-height: 30px;
                          margin: px; background-color: #3498db; color: black;
                          border: 1px solidrgb(0, 6, 10);'>$i</span>";
            }
            echo "<br>";
        }

        echo "</div>";
    } else {
        echo "Parameter 'angka' belum diberikan di URL. Contoh: ?angka=10";
    }

    ?>

</body>

</html>