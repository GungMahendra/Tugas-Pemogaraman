<!-- daftar_mahasiswa.php -->
<?php
$mahasiswa = [
    "2201" => "Andi",
    "2202" => "Budi",
    "2203" => "Citra",
    "2204" => "Dewi",
    "2205" => "Eko"
];

echo "<h3>Daftar Mahasiswa:</h3>";
echo "<ul>";
foreach ($mahasiswa as $nim => $nama) {
    echo "<li>NIM: $nim - Nama: $nama</li>";
}
echo "</ul>";
?>
