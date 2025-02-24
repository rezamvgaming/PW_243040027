<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c.php</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
            border: 1px solid black;
            background-color: royalblue;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($i = 10; $i >= 1; $i--) { // Loop mundur dari 10 ke 1
            echo "<tr>";
            for ($j = 1; $j <= $i; $j++) { // Loop maju dari 1 ke i
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>