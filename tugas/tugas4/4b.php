<?php
// Membuat array dengan 6 elemen string nama perangkat keras komputer
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

// Menampilkan daftar awal perangkat keras komputer
echo "<h3>Macam-macam perangkat keras komputer</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ol>";

// Menampilkan daftar perangkat keras komputer setelah ditambahkan elemen baru
echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    // Memberi garis bawah merah pada elemen tambahan
    if ($item == "Card Reader" || $item == "Modem") {
        echo "<li><u style='color:red;'>$item</u></li>";
    } else {
        echo "<li>$item</li>";
    }
}
echo "</ol>";
