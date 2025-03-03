<?php
function urutanAngka($angka)
{
    $num = 1; // Angka yang akan ditampilkan pertama kali

    for ($i = 1; $i <= $angka; $i++) { // Loop untuk jumlah baris
        for ($j = 1; $j <= $i; $j++) { // Loop untuk mencetak angka di setiap baris
            echo $num . " ";
            $num++; // Menambah angka setiap kali ditampilkan
        }
        echo "<br>"; // Pindah ke baris baru
    }
}

// Pemanggilan function dengan parameter 5
urutanAngka(5);
