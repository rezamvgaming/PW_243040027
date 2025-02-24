<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d.php - Papan Catur</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid black;
        }
        td {
            width: 50px;
            height: 50px;
            border: 2px solid black;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($i = 5; $i > 0; $i--) { // Baris
            echo "<tr>";
            for ($j = 5; $j > 0; $j--) { // Kolom
                // Cek apakah kotak berwarna hitam atau putih berdasarkan posisi genap/ganjil
                $class = ($j + $i) % 2 == 0 ? "black" : "white";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>