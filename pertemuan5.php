<?php
/*
================================================================================
                    PERTEMUAN 5: FUNCTION DAN SCOPE VARIABEL
================================================================================
Topik yang dipelajari:
1. Pengenalan Function
2. Function dengan Parameter
3. Function dengan Return Value
4. Default Parameter
5. Variable Arguments
6. Scope Variabel (Local, Global, Static)
7. Anonymous Function (Closure)
8. Arrow Function (PHP 7.4+)
================================================================================
*/

echo "<h1>⚙️ PERTEMUAN 5: FUNCTION DAN SCOPE VARIABEL</h1>";
echo "<hr>";

// 1. PENGENALAN FUNCTION
echo "<h2>🔧 1. Pengenalan Function</h2>";

// Function sederhana tanpa parameter
function sapa() {
    echo "<p style='color: blue;'>👋 Halo! Selamat datang di pembelajaran PHP!</p>";
}

// Function dengan parameter
function sapa_nama($nama) {
    echo "<p style='color: green;'>👋 Halo, $nama! Selamat belajar PHP!</p>";
}

echo "<h3>Contoh Function Sederhana:</h3>";
sapa();
sapa_nama("Ahmad");
sapa_nama("Siti");

// 2. FUNCTION DENGAN PARAMETER
echo "<h2>📝 2. Function dengan Parameter</h2>";

// Function dengan satu parameter
function hitung_luas_persegi($sisi) {
    $luas = $sisi * $sisi;
    echo "<p>Luas persegi dengan sisi $sisi cm = $luas cm²</p>";
}

// Function dengan multiple parameter
function hitung_luas_persegi_panjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    echo "<p>Luas persegi panjang ($panjang × $lebar) = $luas cm²</p>";
}

echo "<h3>Contoh Function dengan Parameter:</h3>";
hitung_luas_persegi(5);
hitung_luas_persegi_panjang(8, 6);

// 3. FUNCTION DENGAN RETURN VALUE
echo "<h2">↩️ 3. Function dengan Return Value</h2>";

// Function yang mengembalikan nilai
function tambah($a, $b) {
    return $a + $b;
}

function kurang($a, $b) {
    return $a - $b;
}

function kali($a, $b) {
    return $a * $b;
}

function bagi($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Error: Pembagian dengan nol!";
    }
}

echo "<h3>Contoh Function dengan Return:</h3>";
$bil1 = 15;
$bil2 = 3;

echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Bilangan 1:</strong> $bil1</p>";
echo "<p><strong>Bilangan 2:</strong> $bil2</p>";
echo "<hr>";
echo "<p><strong>Penjumlahan:</strong> " . tambah($bil1, $bil2) . "</p>";
echo "<p><strong>Pengurangan:</strong> " . kurang($bil1, $bil2) . "</p>";
echo "<p><strong>Perkalian:</strong> " . kali($bil1, $bil2) . "</p>";
echo "<p><strong>Pembagian:</strong> " . bagi($bil1, $bil2) . "</p>";
echo "</div>";

// Function yang mengembalikan array
function hitung_statistik($angka_array) {
    $jumlah = array_sum($angka_array);
    $rata_rata = $jumlah / count($angka_array);
    $maksimum = max($angka_array);
    $minimum = min($angka_array);
    
    return [
        'jumlah' => $jumlah,
        'rata_rata' => $rata_rata,
        'maksimum' => $maksimum,
        'minimum' => $minimum,
        'count' => count($angka_array)
    ];
}

echo "<h3>Function yang Mengembalikan Array:</h3>";
$nilai = [85, 92, 78, 96, 88, 75, 90];
$statistik = hitung_statistik($nilai);

echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Data Nilai:</strong> " . implode(", ", $nilai) . "</p>";
echo "<p><strong>Jumlah Data:</strong> {$statistik['count']}</p>";
echo "<p><strong>Total Nilai:</strong> {$statistik['jumlah']}</p>";
echo "<p><strong>Rata-rata:</strong> " . number_format($statistik['rata_rata'], 2) . "</p>";
echo "<p><strong>Nilai Tertinggi:</strong> {$statistik['maksimum']}</p>";
echo "<p><strong>Nilai Terendah:</strong> {$statistik['minimum']}</p>";
echo "</div>";

// 4. DEFAULT PARAMETER
echo "<h2">🎯 4. Default Parameter</h2>";

// Function dengan default parameter
function salam($nama = "Teman", $waktu = "Pagi") {
    return "Selamat $waktu, $nama!";
}

function hitung_diskon($harga, $diskon = 10) {
    $potongan = $harga * ($diskon / 100);
    $harga_final = $harga - $potongan;
    
    return [
        'harga_awal' => $harga,
        'diskon_persen' => $diskon,
        'potongan' => $potongan,
        'harga_final' => $harga_final
    ];
}

echo "<h3>Contoh Default Parameter:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p>" . salam() . "</p>";
echo "<p>" . salam("Ahmad") . "</p>";
echo "<p>" . salam("Siti", "Siang") . "</p>";

echo "<hr>";
$hasil_diskon1 = hitung_diskon(100000); // Diskon default 10%
$hasil_diskon2 = hitung_diskon(100000, 25); // Diskon 25%

echo "<p><strong>Diskon Default (10%):</strong></p>";
echo "<p>Harga: Rp " . number_format($hasil_diskon1['harga_awal'], 0, ',', '.') . "</p>";
echo "<p>Potongan: Rp " . number_format($hasil_diskon1['potongan'], 0, ',', '.') . "</p>";
echo "<p>Harga Final: Rp " . number_format($hasil_diskon1['harga_final'], 0, ',', '.') . "</p>";

echo "<p><strong>Diskon 25%:</strong></p>";
echo "<p>Harga: Rp " . number_format($hasil_diskon2['harga_awal'], 0, ',', '.') . "</p>";
echo "<p>Potongan: Rp " . number_format($hasil_diskon2['potongan'], 0, ',', '.') . "</p>";
echo "<p>Harga Final: Rp " . number_format($hasil_diskon2['harga_final'], 0, ',', '.') . "</p>";
echo "</div>";

// 5. VARIABLE ARGUMENTS
echo "<h2">📊 5. Variable Arguments</h2>";

// Function dengan variable arguments (PHP 5.6+)
function jumlahkan(...$angka) {
    $total = 0;
    foreach ($angka as $nilai) {
        $total += $nilai;
    }
    return $total;
}

function rata_rata(...$angka) {
    if (count($angka) == 0) return 0;
    return array_sum($angka) / count($angka);
}

echo "<h3>Contoh Variable Arguments:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Jumlahkan(5, 10, 15):</strong> " . jumlahkan(5, 10, 15) . "</p>";
echo "<p><strong>Jumlahkan(1, 2, 3, 4, 5):</strong> " . jumlahkan(1, 2, 3, 4, 5) . "</p>";
echo "<p><strong>Rata-rata(80, 85, 90, 95):</strong> " . rata_rata(80, 85, 90, 95) . "</p>";
echo "</div>";

// 6. SCOPE VARIABEL
echo "<h2">🌐 6. Scope Variabel</h2>";

// Global variable
$variabel_global = "Saya variabel global";

function test_scope() {
    // Local variable
    $variabel_lokal = "Saya variabel lokal";
    
    // Mengakses global variable
    global $variabel_global;
    
    echo "<p><strong>Dalam function:</strong></p>";
    echo "<p>Variabel lokal: $variabel_lokal</p>";
    echo "<p>Variabel global: $variabel_global</p>";
}

echo "<h3>Local vs Global Scope:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Di luar function:</strong></p>";
echo "<p>Variabel global: $variabel_global</p>";

test_scope();
echo "</div>";

// Static variable
function counter() {
    static $count = 0;
    $count++;
    echo "<p>Counter: $count</p>";
}

echo "<h3>Static Variable:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p>Memanggil function counter() beberapa kali:</p>";
counter(); // Output: 1
counter(); // Output: 2
counter(); // Output: 3
echo "</div>";

// 7. ANONYMOUS FUNCTION (CLOSURE)
echo "<h2">🎭 7. Anonymous Function (Closure)</h2>";

// Anonymous function sederhana
$salam_closure = function($nama) {
    return "Halo, $nama! Ini dari closure.";
};

// Anonymous function dengan use
$prefix = "Mr.";
$salam_formal = function($nama) use ($prefix) {
    return "Halo, $prefix $nama!";
};

echo "<h3>Contoh Anonymous Function:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p>" . $salam_closure("Ahmad") . "</p>";
echo "<p>" . $salam_formal("Budi") . "</p>";
echo "</div>";

// Anonymous function untuk array processing
$angka = [1, 2, 3, 4, 5];

$kuadrat = array_map(function($x) {
    return $x * $x;
}, $angka);

$genap = array_filter($angka, function($x) {
    return $x % 2 == 0;
});

echo "<h3>Anonymous Function dengan Array:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Array asli:</strong> " . implode(", ", $angka) . "</p>";
echo "<p><strong>Kuadrat:</strong> " . implode(", ", $kuadrat) . "</p>";
echo "<p><strong>Angka genap:</strong> " . implode(", ", $genap) . "</p>";
echo "</div>";

// 8. ARROW FUNCTION (PHP 7.4+)
echo "<h2">🏹 8. Arrow Function (PHP 7.4+)</h2>";

// Arrow function (jika PHP 7.4+)
if (version_compare(PHP_VERSION, '7.4.0') >= 0) {
    $angka_arrow = [1, 2, 3, 4, 5];
    
    $kali_dua = array_map(fn($x) => $x * 2, $angka_arrow);
    $lebih_dari_tiga = array_filter($angka_arrow, fn($x) => $x > 3);
    
    echo "<h3>Contoh Arrow Function:</h3>";
    echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
    echo "<p><strong>Array asli:</strong> " . implode(", ", $angka_arrow) . "</p>";
    echo "<p><strong>Kali 2:</strong> " . implode(", ", $kali_dua) . "</p>";
    echo "<p><strong>Lebih dari 3:</strong> " . implode(", ", $lebih_dari_tiga) . "</p>";
    echo "</div>";
} else {
    echo "<h3>Arrow Function:</h3>";
    echo "<div style='background-color: #fff3cd; padding: 15px; border-radius: 5px; border: 1px solid #ffeaa7;'>";
    echo "<p>⚠️ Arrow Function memerlukan PHP 7.4 atau lebih tinggi.</p>";
    echo "<p>Versi PHP Anda: " . PHP_VERSION . "</p>";
    echo "</div>";
}

// 9. LATIHAN PRAKTIK: SISTEM MANAJEMEN NILAI
echo "<h2">💪 Latihan Praktik: Sistem Manajemen Nilai</h2>";

// Function untuk menghitung grade
function hitung_grade($nilai) {
    if ($nilai >= 90) return 'A';
    elseif ($nilai >= 80) return 'B';
    elseif ($nilai >= 70) return 'C';
    elseif ($nilai >= 60) return 'D';
    else return 'E';
}

// Function untuk menghitung status kelulusan
function status_lulus($nilai, $kehadiran = 75) {
    $grade = hitung_grade($nilai);
    if ($nilai >= 60 && $kehadiran >= 75) {
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}

// Function untuk laporan lengkap siswa
function laporan_siswa($nama, $nilai_array, $kehadiran = 80) {
    $total_nilai = array_sum($nilai_array);
    $rata_rata = $total_nilai / count($nilai_array);
    $grade = hitung_grade($rata_rata);
    $status = status_lulus($rata_rata, $kehadiran);
    
    return [
        'nama' => $nama,
        'nilai' => $nilai_array,
        'rata_rata' => $rata_rata,
        'grade' => $grade,
        'kehadiran' => $kehadiran,
        'status' => $status
    ];
}

// Data siswa
$data_siswa = [
    ['nama' => 'Ahmad Rizki', 'nilai' => [85, 90, 78, 92], 'kehadiran' => 95],
    ['nama' => 'Siti Nurhaliza', 'nilai' => [92, 88, 95, 90], 'kehadiran' => 88],
    ['nama' => 'Budi Santoso', 'nilai' => [75, 70, 68, 72], 'kehadiran' => 70],
    ['nama' => 'Dewi Sartika', 'nilai' => [88, 85, 90, 87], 'kehadiran' => 92]
];

echo "<div style='border: 2px solid #007bff; padding: 20px; margin: 10px; border-radius: 10px; background-color: #f8f9fa;'>";
echo "<h3>📊 Sistem Manajemen Nilai Siswa</h3>";

echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #007bff; color: white;'>";
echo "<th style='padding: 10px;'>Nama Siswa</th>";
echo "<th style='padding: 10px;'>Nilai</th>";
echo "<th style='padding: 10px;'>Rata-rata</th>";
echo "<th style='padding: 10px;'>Grade</th>";
echo "<th style='padding: 10px;'>Kehadiran</th>";
echo "<th style='padding: 10px;'>Status</th>";
echo "</tr>";

foreach ($data_siswa as $siswa) {
    $laporan = laporan_siswa($siswa['nama'], $siswa['nilai'], $siswa['kehadiran']);
    $warna_status = ($laporan['status'] == 'LULUS') ? 'green' : 'red';
    
    echo "<tr>";
    echo "<td style='padding: 10px; font-weight: bold;'>{$laporan['nama']}</td>";
    echo "<td style='padding: 10px;'>" . implode(", ", $laporan['nilai']) . "</td>";
    echo "<td style='padding: 10px; text-align: center;'>" . number_format($laporan['rata_rata'], 1) . "</td>";
    echo "<td style='padding: 10px; text-align: center; font-weight: bold;'>{$laporan['grade']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$laporan['kehadiran']}%</td>";
    echo "<td style='padding: 10px; text-align: center; color: $warna_status; font-weight: bold;'>{$laporan['status']}</td>";
    echo "</tr>";
}

echo "</table>";

// Statistik kelas
$semua_nilai = [];
foreach ($data_siswa as $siswa) {
    $semua_nilai = array_merge($semua_nilai, $siswa['nilai']);
}

$statistik_kelas = hitung_statistik($semua_nilai);

echo "<h4>📈 Statistik Kelas:</h4>";
echo "<p><strong>Total Data Nilai:</strong> {$statistik_kelas['count']}</p>";
echo "<p><strong>Rata-rata Kelas:</strong> " . number_format($statistik_kelas['rata_rata'], 2) . "</p>";
echo "<p><strong>Nilai Tertinggi:</strong> {$statistik_kelas['maksimum']}</p>";
echo "<p><strong>Nilai Terendah:</strong> {$statistik_kelas['minimum']}</p>";

echo "</div>";

echo "<hr>";
echo "<p style='text-align: center; color: #28a745; font-weight: bold;'>🎉 SELAMAT! Anda telah menyelesaikan Pertemuan 5 - Function dan Scope Variabel! 🎉</p>";

?>
