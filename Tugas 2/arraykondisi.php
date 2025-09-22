<!-- mahasiswa_nilai.php -->
<?php
$mahasiswa = [
    ["nim" => "2201", "nama" => "Andi", "umur" => 20, "prodi" => "Informatika", "nilai" => 85],
    ["nim" => "2202", "nama" => "Budi", "umur" => 21, "prodi" => "Sistem Informasi", "nilai" => 65],
    ["nim" => "2203", "nama" => "Citra", "umur" => 19, "prodi" => "Teknik Komputer", "nilai" => 72],
    ["nim" => "2204", "nama" => "Dewi", "umur" => 22, "prodi" => "Informatika", "nilai" => 55],
    ["nim" => "2205", "nama" => "Eko", "umur" => 20, "prodi" => "Manajemen Informatika", "nilai" => 90],
    ["nim" => "2206", "nama" => "Fajar", "umur" => 21, "prodi" => "Informatika", "nilai" => 40],
    ["nim" => "2207", "nama" => "Gina", "umur" => 18, "prodi" => "Sistem Informasi", "nilai" => 78],
    ["nim" => "2208", "nama" => "Hari", "umur" => 19, "prodi" => "Teknik Komputer", "nilai" => 88],
    ["nim" => "2209", "nama" => "Indah", "umur" => 20, "prodi" => "Informatika", "nilai" => 95],
    ["nim" => "2210", "nama" => "Joko", "umur" => 21, "prodi" => "Sistem Informasi", "nilai" => 60],
];

echo "<h3>Data Mahasiswa + Status Kelulusan</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>NIM</th><th>Nama</th><th>Umur</th><th>Program Studi</th><th>Nilai</th><th>Status</th></tr>";

foreach ($mahasiswa as $mhs) {
    $status = ($mhs['nilai'] >= 70) ? "Lulus" : "Tidak Lulus";
    echo "<tr>
            <td>{$mhs['nim']}</td>
            <td>{$mhs['nama']}</td>
            <td align='center'>{$mhs['umur']}</td>
            <td>{$mhs['prodi']}</td>
            <td align='center'>{$mhs['nilai']}</td>
            <td align='center'>$status</td>
          </tr>";
}

echo "</table>";
?>
