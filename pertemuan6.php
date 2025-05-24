<?php
/*
================================================================================
                    PERTEMUAN 6: ARRAY DAN MANIPULASI ARRAY
================================================================================
Topik yang dipelajari:
1. Pengenalan Array
2. Array Indexed
3. Array Associative
4. Array Multidimensi
5. Fungsi-fungsi Array Built-in
6. Array Sorting
7. Array Filtering dan Mapping
8. Array Merging dan Slicing
================================================================================
*/

echo "<h1>📋 PERTEMUAN 6: ARRAY DAN MANIPULASI ARRAY</h1>";
echo "<hr>";

// 1. PENGENALAN ARRAY
echo "<h2>📚 1. Pengenalan Array</h2>";

echo "<p>Array adalah struktur data yang dapat menyimpan multiple nilai dalam satu variabel.</p>";

// Cara membuat array
$array1 = array("Apel", "Jeruk", "Mangga");
$array2 = ["Merah", "Hijau", "Biru"];
$array3 = [];

echo "<h3>Cara Membuat Array:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Cara 1 (array()):</strong> " . implode(", ", $array1) . "</p>";
echo "<p><strong>Cara 2 ([]):</strong> " . implode(", ", $array2) . "</p>";
echo "<p><strong>Array kosong:</strong> " . (empty($array3) ? "Array kosong" : implode(", ", $array3)) . "</p>";
echo "</div>";

// 2. ARRAY INDEXED
echo "<h2">🔢 2. Array Indexed</h2>";

$buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];
$angka = [10, 20, 30, 40, 50];

echo "<h3>Contoh Array Indexed:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Array Buah:</strong></p>";
for ($i = 0; $i < count($buah); $i++) {
    echo "<p>Index $i: {$buah[$i]}</p>";
}

echo "<hr>";
echo "<p><strong>Array Angka:</strong></p>";
foreach ($angka as $index => $nilai) {
    echo "<p>Index $index: $nilai</p>";
}
echo "</div>";

// Menambah elemen ke array
$buah[] = "Semangka"; // Menambah di akhir
array_push($buah, "Melon", "Durian"); // Menambah multiple elemen

echo "<h3>Setelah Menambah Elemen:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p>" . implode(", ", $buah) . "</p>";
echo "<p><strong>Total elemen:</strong> " . count($buah) . "</p>";
echo "</div>";

// 3. ARRAY ASSOCIATIVE
echo "<h2">🏷️ 3. Array Associative</h2>";

$mahasiswa = [
    "nama" => "Ahmad Rizki",
    "nim" => "2023001",
    "jurusan" => "Teknik Informatika",
    "semester" => 3,
    "ipk" => 3.75,
    "aktif" => true
];

$produk = [
    "id" => 101,
    "nama" => "Laptop Gaming",
    "harga" => 15000000,
    "kategori" => "Elektronik",
    "stok" => 5,
    "rating" => 4.8
];

echo "<h3>Contoh Array Associative:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";

echo "<p><strong>Data Mahasiswa:</strong></p>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
foreach ($mahasiswa as $key => $value) {
    $display_value = is_bool($value) ? ($value ? "Ya" : "Tidak") : $value;
    echo "<tr>";
    echo "<td style='padding: 8px; font-weight: bold; text-transform: capitalize;'>" . str_replace('_', ' ', $key) . "</td>";
    echo "<td style='padding: 8px;'>$display_value</td>";
    echo "</tr>";
}
echo "</table>";

echo "<hr>";
echo "<p><strong>Data Produk:</strong></p>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
foreach ($produk as $key => $value) {
    $display_value = ($key == 'harga') ? "Rp " . number_format($value, 0, ',', '.') : $value;
    echo "<tr>";
    echo "<td style='padding: 8px; font-weight: bold; text-transform: capitalize;'>$key</td>";
    echo "<td style='padding: 8px;'>$display_value</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

// 4. ARRAY MULTIDIMENSI
echo "<h2">📊 4. Array Multidimensi</h2>";

$siswa_kelas = [
    [
        "nama" => "Ahmad",
        "umur" => 17,
        "nilai" => [
            "matematika" => 85,
            "fisika" => 78,
            "kimia" => 82
        ]
    ],
    [
        "nama" => "Siti",
        "umur" => 16,
        "nilai" => [
            "matematika" => 92,
            "fisika" => 88,
            "kimia" => 90
        ]
    ],
    [
        "nama" => "Budi",
        "umur" => 17,
        "nilai" => [
            "matematika" => 76,
            "fisika" => 80,
            "kimia" => 75
        ]
    ]
];

echo "<h3>Contoh Array Multidimensi:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #007bff; color: white;'>";
echo "<th style='padding: 10px;'>Nama</th>";
echo "<th style='padding: 10px;'>Umur</th>";
echo "<th style='padding: 10px;'>Matematika</th>";
echo "<th style='padding: 10px;'>Fisika</th>";
echo "<th style='padding: 10px;'>Kimia</th>";
echo "<th style='padding: 10px;'>Rata-rata</th>";
echo "</tr>";

foreach ($siswa_kelas as $siswa) {
    $rata_rata = array_sum($siswa['nilai']) / count($siswa['nilai']);
    echo "<tr>";
    echo "<td style='padding: 10px; font-weight: bold;'>{$siswa['nama']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$siswa['umur']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$siswa['nilai']['matematika']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$siswa['nilai']['fisika']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$siswa['nilai']['kimia']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>" . number_format($rata_rata, 1) . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

// 5. FUNGSI-FUNGSI ARRAY BUILT-IN
echo "<h2">🛠️ 5. Fungsi-fungsi Array Built-in</h2>";

$numbers = [5, 2, 8, 1, 9, 3];
$fruits = ["apel", "jeruk", "mangga", "pisang"];

echo "<h3>Array Awal:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Numbers:</strong> " . implode(", ", $numbers) . "</p>";
echo "<p><strong>Fruits:</strong> " . implode(", ", $fruits) . "</p>";
echo "</div>";

echo "<h3>Fungsi Array Dasar:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>count(\$numbers):</strong> " . count($numbers) . "</p>";
echo "<p><strong>array_sum(\$numbers):</strong> " . array_sum($numbers) . "</p>";
echo "<p><strong>max(\$numbers):</strong> " . max($numbers) . "</p>";
echo "<p><strong>min(\$numbers):</strong> " . min($numbers) . "</p>";
echo "<p><strong>array_product(\$numbers):</strong> " . array_product($numbers) . "</p>";
echo "<p><strong>in_array('mangga', \$fruits):</strong> " . (in_array('mangga', $fruits) ? "true" : "false") . "</p>";
echo "<p><strong>array_search('jeruk', \$fruits):</strong> " . array_search('jeruk', $fruits) . "</p>";
echo "</div>";

// Array manipulation
echo "<h3>Manipulasi Array:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";

// array_push dan array_pop
$temp_fruits = $fruits;
array_push($temp_fruits, "semangka");
echo "<p><strong>Setelah array_push('semangka'):</strong> " . implode(", ", $temp_fruits) . "</p>";

$last_fruit = array_pop($temp_fruits);
echo "<p><strong>array_pop() mengembalikan:</strong> $last_fruit</p>";
echo "<p><strong>Array setelah pop:</strong> " . implode(", ", $temp_fruits) . "</p>";

// array_shift dan array_unshift
$first_fruit = array_shift($temp_fruits);
echo "<p><strong>array_shift() mengembalikan:</strong> $first_fruit</p>";
echo "<p><strong>Array setelah shift:</strong> " . implode(", ", $temp_fruits) . "</p>";

array_unshift($temp_fruits, "durian");
echo "<p><strong>Setelah array_unshift('durian'):</strong> " . implode(", ", $temp_fruits) . "</p>";
echo "</div>";

// 6. ARRAY SORTING
echo "<h2">📈 6. Array Sorting</h2>";

$angka_acak = [64, 34, 25, 12, 22, 11, 90];
$nama_acak = ["Charlie", "Alice", "Bob", "David"];

echo "<h3>Sebelum Sorting:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Angka:</strong> " . implode(", ", $angka_acak) . "</p>";
echo "<p><strong>Nama:</strong> " . implode(", ", $nama_acak) . "</p>";
echo "</div>";

echo "<h3>Berbagai Jenis Sorting:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";

// Sort ascending
$temp1 = $angka_acak;
sort($temp1);
echo "<p><strong>sort() - Ascending:</strong> " . implode(", ", $temp1) . "</p>";

// Sort descending
$temp2 = $angka_acak;
rsort($temp2);
echo "<p><strong>rsort() - Descending:</strong> " . implode(", ", $temp2) . "</p>";

// Sort nama
$temp3 = $nama_acak;
sort($temp3);
echo "<p><strong>sort() nama:</strong> " . implode(", ", $temp3) . "</p>";

// Associative array sorting
$nilai_siswa = [
    "Ahmad" => 85,
    "Siti" => 92,
    "Budi" => 78,
    "Dewi" => 88
];

echo "<p><strong>Array Associative Asli:</strong></p>";
foreach ($nilai_siswa as $nama => $nilai) {
    echo "$nama: $nilai<br>";
}

// Sort by value
$temp4 = $nilai_siswa;
asort($temp4);
echo "<p><strong>asort() - Sort by value:</strong></p>";
foreach ($temp4 as $nama => $nilai) {
    echo "$nama: $nilai<br>";
}

// Sort by key
$temp5 = $nilai_siswa;
ksort($temp5);
echo "<p><strong>ksort() - Sort by key:</strong></p>";
foreach ($temp5 as $nama => $nilai) {
    echo "$nama: $nilai<br>";
}
echo "</div>";

// 7. ARRAY FILTERING DAN MAPPING
echo "<h2">🔍 7. Array Filtering dan Mapping</h2>";

$angka_filter = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<h3>Array Filtering:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Array asli:</strong> " . implode(", ", $angka_filter) . "</p>";

// Filter angka genap
$genap = array_filter($angka_filter, function($n) {
    return $n % 2 == 0;
});
echo "<p><strong>Angka genap:</strong> " . implode(", ", $genap) . "</p>";

// Filter angka > 5
$lebih_dari_lima = array_filter($angka_filter, function($n) {
    return $n > 5;
});
echo "<p><strong>Angka > 5:</strong> " . implode(", ", $lebih_dari_lima) . "</p>";
echo "</div>";

echo "<h3>Array Mapping:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";

// Map - kuadrat
$kuadrat = array_map(function($n) {
    return $n * $n;
}, $angka_filter);
echo "<p><strong>Kuadrat:</strong> " . implode(", ", $kuadrat) . "</p>";

// Map - format currency
$harga = [15000, 25000, 35000, 45000];
$harga_format = array_map(function($h) {
    return "Rp " . number_format($h, 0, ',', '.');
}, $harga);
echo "<p><strong>Harga asli:</strong> " . implode(", ", $harga) . "</p>";
echo "<p><strong>Harga format:</strong> " . implode(", ", $harga_format) . "</p>";
echo "</div>";

// 8. ARRAY MERGING DAN SLICING
echo "<h2">🔗 8. Array Merging dan Slicing</h2>";

$array_a = ["a", "b", "c"];
$array_b = ["d", "e", "f"];
$array_c = [1, 2, 3];

echo "<h3>Array Merging:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
echo "<p><strong>Array A:</strong> " . implode(", ", $array_a) . "</p>";
echo "<p><strong>Array B:</strong> " . implode(", ", $array_b) . "</p>";
echo "<p><strong>Array C:</strong> " . implode(", ", $array_c) . "</p>";

$merged = array_merge($array_a, $array_b);
echo "<p><strong>array_merge(A, B):</strong> " . implode(", ", $merged) . "</p>";

$merged_all = array_merge($array_a, $array_b, $array_c);
echo "<p><strong>array_merge(A, B, C):</strong> " . implode(", ", $merged_all) . "</p>";
echo "</div>";

echo "<h3>Array Slicing:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
$long_array = ["a", "b", "c", "d", "e", "f", "g", "h"];
echo "<p><strong>Array asli:</strong> " . implode(", ", $long_array) . "</p>";

$slice1 = array_slice($long_array, 2, 3);
echo "<p><strong>array_slice(array, 2, 3):</strong> " . implode(", ", $slice1) . "</p>";

$slice2 = array_slice($long_array, -3);
echo "<p><strong>array_slice(array, -3):</strong> " . implode(", ", $slice2) . "</p>";

$slice3 = array_slice($long_array, 1, -2);
echo "<p><strong>array_slice(array, 1, -2):</strong> " . implode(", ", $slice3) . "</p>";
echo "</div>";

// 9. LATIHAN PRAKTIK: SISTEM INVENTORI TOKO
echo "<h2">💪 Latihan Praktik: Sistem Inventori Toko</h2>";

$inventori = [
    [
        "id" => 1,
        "nama" => "Laptop Gaming",
        "kategori" => "Elektronik",
        "harga" => 15000000,
        "stok" => 5,
        "rating" => 4.8
    ],
    [
        "id" => 2,
        "nama" => "Mouse Gaming",
        "kategori" => "Elektronik",
        "harga" => 500000,
        "stok" => 25,
        "rating" => 4.5
    ],
    [
        "id" => 3,
        "nama" => "Keyboard Mechanical",
        "kategori" => "Elektronik",
        "harga" => 1200000,
        "stok" => 15,
        "rating" => 4.7
    ],
    [
        "id" => 4,
        "nama" => "Monitor 4K",
        "kategori" => "Elektronik",
        "harga" => 3500000,
        "stok" => 8,
        "rating" => 4.9
    ],
    [
        "id" => 5,
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 800000,
        "stok" => 20,
        "rating" => 4.3
    ]
];

echo "<div style='border: 2px solid #007bff; padding: 20px; margin: 10px; border-radius: 10px; background-color: #f8f9fa;'>";
echo "<h3>🏪 Sistem Inventori Toko Elektronik</h3>";

// Tampilkan semua produk
echo "<h4>📦 Daftar Semua Produk:</h4>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #007bff; color: white;'>";
echo "<th style='padding: 8px;'>ID</th>";
echo "<th style='padding: 8px;'>Nama Produk</th>";
echo "<th style='padding: 8px;'>Kategori</th>";
echo "<th style='padding: 8px;'>Harga</th>";
echo "<th style='padding: 8px;'>Stok</th>";
echo "<th style='padding: 8px;'>Rating</th>";
echo "</tr>";

foreach ($inventori as $produk) {
    echo "<tr>";
    echo "<td style='padding: 8px; text-align: center;'>{$produk['id']}</td>";
    echo "<td style='padding: 8px;'>{$produk['nama']}</td>";
    echo "<td style='padding: 8px;'>{$produk['kategori']}</td>";
    echo "<td style='padding: 8px;'>Rp " . number_format($produk['harga'], 0, ',', '.') . "</td>";
    echo "<td style='padding: 8px; text-align: center;'>{$produk['stok']}</td>";
    echo "<td style='padding: 8px; text-align: center;'>{$produk['rating']}</td>";
    echo "</tr>";
}
echo "</table>";

// Filter produk dengan stok rendah
$stok_rendah = array_filter($inventori, function($produk) {
    return $produk['stok'] < 10;
});

echo "<h4>⚠️ Produk dengan Stok Rendah (< 10):</h4>";
if (!empty($stok_rendah)) {
    foreach ($stok_rendah as $produk) {
        echo "<p style='color: red;'>• {$produk['nama']} - Stok: {$produk['stok']}</p>";
    }
} else {
    echo "<p style='color: green;'>✅ Semua produk memiliki stok yang cukup!</p>";
}

// Produk termahal dan termurah
$harga_produk = array_column($inventori, 'harga');
$harga_tertinggi = max($harga_produk);
$harga_terendah = min($harga_produk);

$produk_termahal = array_filter($inventori, function($produk) use ($harga_tertinggi) {
    return $produk['harga'] == $harga_tertinggi;
});

$produk_termurah = array_filter($inventori, function($produk) use ($harga_terendah) {
    return $produk['harga'] == $harga_terendah;
});

echo "<h4>💰 Analisis Harga:</h4>";
echo "<p><strong>Produk Termahal:</strong> " . reset($produk_termahal)['nama'] . " - Rp " . number_format($harga_tertinggi, 0, ',', '.') . "</p>";
echo "<p><strong>Produk Termurah:</strong> " . reset($produk_termurah)['nama'] . " - Rp " . number_format($harga_terendah, 0, ',', '.') . "</p>";

// Total nilai inventori
$total_nilai = array_sum(array_map(function($produk) {
    return $produk['harga'] * $produk['stok'];
}, $inventori));

echo "<p><strong>Total Nilai Inventori:</strong> Rp " . number_format($total_nilai, 0, ',', '.') . "</p>";

// Rating rata-rata
$rating_rata = array_sum(array_column($inventori, 'rating')) / count($inventori);
echo "<p><strong>Rating Rata-rata Produk:</strong> " . number_format($rating_rata, 2) . " ⭐</p>";

echo "</div>";

echo "<hr>";
echo "<p style='text-align: center; color: #28a745; font-weight: bold;'>🎉 SELAMAT! Anda telah menyelesaikan Pertemuan 6 - Array dan Manipulasi Array! 🎉</p>";

?>
