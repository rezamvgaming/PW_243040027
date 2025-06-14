<?php
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
