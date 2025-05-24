<?php
/*
================================================================================
                    PERTEMUAN 4: PERULANGAN (LOOP)
================================================================================
Topik yang dipelajari:
1. For Loop
2. While Loop
3. Do-While Loop
4. Foreach Loop
5. Nested Loop (Loop Bersarang)
6. Break dan Continue
7. Loop dengan Array
================================================================================
*/

echo "<h1>🔄 PERTEMUAN 4: PERULANGAN (LOOP)</h1>";
echo "<hr>";

// 1. FOR LOOP
echo "<h2>🔢 1. For Loop</h2>";

echo "<h3>Contoh Dasar For Loop:</h3>";
echo "<p>Menampilkan angka 1 sampai 10:</p>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";

for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

echo "</div>";

// For loop dengan step berbeda
echo "<h3>For Loop dengan Step 2:</h3>";
echo "<p>Menampilkan bilangan genap 2 sampai 20:</p>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";

for ($i = 2; $i <= 20; $i += 2) {
    echo "$i ";
}

echo "</div>";

// For loop mundur
echo "<h3>For Loop Mundur:</h3>";
echo "<p>Countdown dari 10 ke 1:</p>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";

for ($i = 10; $i >= 1; $i--) {
    echo "$i ";
    if ($i == 1) echo "🚀 BLAST OFF!";
}

echo "</div>";

// 2. WHILE LOOP
echo "<h2>⏳ 2. While Loop</h2>";

echo "<h3>Contoh Dasar While Loop:</h3>";
echo "<p>Menampilkan angka 1 sampai 5:</p>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";

$counter = 1;
while ($counter <= 5) {
    echo "Iterasi ke-$counter<br>";
    $counter++;
}

echo "</div>";

// While loop dengan kondisi
echo "<h3>While Loop dengan Kondisi:</h3>";
echo "<p>Menghitung berapa kali harus menabung untuk mencapai target:</p>";

$tabungan = 100000;
$target = 500000;
$bulan = 0;
$menabung_per_bulan = 75000;

echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";
echo "<p><strong>Target:</strong> Rp " . number_format($target, 0, ',', '.') . "</p>";
echo "<p><strong>Tabungan awal:</strong> Rp " . number_format($tabungan, 0, ',', '.') . "</p>";
echo "<p><strong>Menabung per bulan:</strong> Rp " . number_format($menabung_per_bulan, 0, ',', '.') . "</p>";
echo "<hr>";

while ($tabungan < $target) {
    $bulan++;
    $tabungan += $menabung_per_bulan;
    echo "Bulan ke-$bulan: Rp " . number_format($tabungan, 0, ',', '.') . "<br>";
}

echo "<p style='color: green; font-weight: bold;'>🎉 Target tercapai dalam $bulan bulan!</p>";
echo "</div>";

// 3. DO-WHILE LOOP
echo "<h2>🔁 3. Do-While Loop</h2>";

echo "<h3>Perbedaan Do-While dengan While:</h3>";
echo "<p>Do-While akan dieksekusi minimal 1 kali, meskipun kondisi false:</p>";

$angka = 10;

echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";
echo "<p><strong>While Loop (kondisi false dari awal):</strong></p>";

$i = 1;
while ($i > 10) {
    echo "Ini tidak akan tampil<br>";
    $i++;
}
echo "While loop tidak dieksekusi karena kondisi false<br>";

echo "<p><strong>Do-While Loop (kondisi false dari awal):</strong></p>";

$j = 1;
do {
    echo "Ini akan tampil sekali meskipun kondisi false<br>";
    $j++;
} while ($j > 10);

echo "</div>";

// Contoh praktis do-while
echo "<h3>Contoh Praktis Do-While - Menu Sederhana:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";

$pilihan = 0;
$menu_counter = 0;

do {
    $menu_counter++;
    echo "<strong>Tampilan Menu ke-$menu_counter:</strong><br>";
    echo "1. Lihat Data<br>";
    echo "2. Tambah Data<br>";
    echo "3. Edit Data<br>";
    echo "4. Hapus Data<br>";
    echo "5. Keluar<br>";
    
    // Simulasi pilihan user (dalam praktik nyata, ini dari input user)
    $pilihan = ($menu_counter < 3) ? rand(1, 4) : 5;
    echo "User memilih: $pilihan<br>";
    
    if ($pilihan != 5) {
        echo "Menjalankan menu $pilihan...<br>";
    }
    echo "<hr>";
    
} while ($pilihan != 5);

echo "<p style='color: green;'>Program selesai!</p>";
echo "</div>";

// 4. FOREACH LOOP
echo "<h2>📋 4. Foreach Loop</h2>";

echo "<h3>Foreach dengan Array Indexed:</h3>";
$buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";
echo "<p><strong>Daftar Buah:</strong></p>";
echo "<ul>";

foreach ($buah as $index => $nama_buah) {
    echo "<li>Buah ke-" . ($index + 1) . ": $nama_buah</li>";
}

echo "</ul>";
echo "</div>";

echo "<h3>Foreach dengan Array Associative:</h3>";
$mahasiswa = [
    "nama" => "Ahmad Rizki",
    "nim" => "2023001",
    "jurusan" => "Teknik Informatika",
    "semester" => 3,
    "ipk" => 3.75
];

echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";
echo "<p><strong>Data Mahasiswa:</strong></p>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";

foreach ($mahasiswa as $key => $value) {
    echo "<tr>";
    echo "<td style='padding: 8px; font-weight: bold; text-transform: capitalize;'>" . str_replace('_', ' ', $key) . "</td>";
    echo "<td style='padding: 8px;'>$value</td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";

// 5. NESTED LOOP (LOOP BERSARANG)
echo "<h2>🔗 5. Nested Loop (Loop Bersarang)</h2>";

echo "<h3>Tabel Perkalian:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

// Header tabel
echo "<tr style='background-color: #007bff; color: white;'>";
echo "<th style='padding: 8px;'>×</th>";
for ($i = 1; $i <= 5; $i++) {
    echo "<th style='padding: 8px;'>$i</th>";
}
echo "</tr>";

// Isi tabel
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    echo "<th style='padding: 8px; background-color: #007bff; color: white;'>$i</th>";
    for ($j = 1; $j <= 5; $j++) {
        $hasil = $i * $j;
        echo "<td style='padding: 8px;'>$hasil</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "</div>";

echo "<h3>Pola Bintang:</h3>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px; font-family: monospace;'>";

// Pola segitiga
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "⭐";
    }
    echo "<br>";
}

echo "<br>";

// Pola segitiga terbalik
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "🔸";
    }
    echo "<br>";
}

echo "</div>";

// 6. BREAK DAN CONTINUE
echo "<h2>⏹️ 6. Break dan Continue</h2>";

echo "<h3>Penggunaan BREAK:</h3>";
echo "<p>Break digunakan untuk menghentikan loop:</p>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";

echo "<p><strong>Mencari angka 7 dalam loop:</strong></p>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) {
        echo "<span style='color: red; font-weight: bold;'>Angka $i ditemukan! Loop dihentikan.</span><br>";
        break;
    }
    echo "Angka: $i<br>";
}

echo "</div>";

echo "<h3>Penggunaan CONTINUE:</h3>";
echo "<p>Continue digunakan untuk melewati iterasi saat ini:</p>";
echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";

echo "<p><strong>Menampilkan angka 1-10 kecuali angka genap:</strong></p>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Lewati angka genap
    }
    echo "Angka ganjil: $i<br>";
}

echo "</div>";

// 7. LOOP DENGAN ARRAY MULTIDIMENSI
echo "<h2>📊 7. Loop dengan Array Multidimensi</h2>";

$siswa_kelas = [
    [
        "nama" => "Ahmad",
        "matematika" => 85,
        "bahasa_indonesia" => 78,
        "bahasa_inggris" => 82
    ],
    [
        "nama" => "Siti",
        "matematika" => 92,
        "bahasa_indonesia" => 88,
        "bahasa_inggris" => 90
    ],
    [
        "nama" => "Budi",
        "matematika" => 76,
        "bahasa_indonesia" => 80,
        "bahasa_inggris" => 75
    ]
];

echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 5px;'>";
echo "<h3>📋 Daftar Nilai Siswa:</h3>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #007bff; color: white;'>";
echo "<th style='padding: 10px;'>Nama</th>";
echo "<th style='padding: 10px;'>Matematika</th>";
echo "<th style='padding: 10px;'>B. Indonesia</th>";
echo "<th style='padding: 10px;'>B. Inggris</th>";
echo "<th style='padding: 10px;'>Rata-rata</th>";
echo "<th style='padding: 10px;'>Status</th>";
echo "</tr>";

foreach ($siswa_kelas as $siswa) {
    $rata_rata = ($siswa["matematika"] + $siswa["bahasa_indonesia"] + $siswa["bahasa_inggris"]) / 3;
    $status = ($rata_rata >= 75) ? "LULUS" : "TIDAK LULUS";
    $warna_status = ($rata_rata >= 75) ? "green" : "red";
    
    echo "<tr>";
    echo "<td style='padding: 10px; font-weight: bold;'>{$siswa['nama']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$siswa['matematika']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$siswa['bahasa_indonesia']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>{$siswa['bahasa_inggris']}</td>";
    echo "<td style='padding: 10px; text-align: center;'>" . number_format($rata_rata, 1) . "</td>";
    echo "<td style='padding: 10px; text-align: center; color: $warna_status; font-weight: bold;'>$status</td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";

// 8. LATIHAN PRAKTIK: SISTEM KASIR SEDERHANA
echo "<h2>💪 Latihan Praktik: Sistem Kasir Sederhana</h2>";

$produk = [
    ["nama" => "Laptop", "harga" => 15000000, "stok" => 5],
    ["nama" => "Mouse", "harga" => 150000, "stok" => 20],
    ["nama" => "Keyboard", "harga" => 500000, "stok" => 15],
    ["nama" => "Monitor", "harga" => 2500000, "stok" => 8]
];

$keranjang = [
    ["nama" => "Laptop", "jumlah" => 1],
    ["nama" => "Mouse", "jumlah" => 2],
    ["nama" => "Keyboard", "jumlah" => 1]
];

echo "<div style='border: 2px solid #007bff; padding: 20px; margin: 10px; border-radius: 10px; background-color: #f8f9fa;'>";
echo "<h3>🛒 Sistem Kasir Toko Komputer</h3>";

// Tampilkan daftar produk
echo "<h4>📦 Daftar Produk:</h4>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #007bff; color: white;'>";
echo "<th style='padding: 8px;'>Produk</th>";
echo "<th style='padding: 8px;'>Harga</th>";
echo "<th style='padding: 8px;'>Stok</th>";
echo "</tr>";

foreach ($produk as $item) {
    echo "<tr>";
    echo "<td style='padding: 8px;'>{$item['nama']}</td>";
    echo "<td style='padding: 8px;'>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>";
    echo "<td style='padding: 8px; text-align: center;'>{$item['stok']}</td>";
    echo "</tr>";
}
echo "</table>";

// Proses keranjang belanja
echo "<h4>🛍️ Keranjang Belanja:</h4>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #28a745; color: white;'>";
echo "<th style='padding: 8px;'>Produk</th>";
echo "<th style='padding: 8px;'>Harga Satuan</th>";
echo "<th style='padding: 8px;'>Jumlah</th>";
echo "<th style='padding: 8px;'>Subtotal</th>";
echo "</tr>";

$total_belanja = 0;

foreach ($keranjang as $item_keranjang) {
    // Cari harga produk
    foreach ($produk as $item_produk) {
        if ($item_produk['nama'] == $item_keranjang['nama']) {
            $harga_satuan = $item_produk['harga'];
            $subtotal = $harga_satuan * $item_keranjang['jumlah'];
            $total_belanja += $subtotal;
            
            echo "<tr>";
            echo "<td style='padding: 8px;'>{$item_keranjang['nama']}</td>";
            echo "<td style='padding: 8px;'>Rp " . number_format($harga_satuan, 0, ',', '.') . "</td>";
            echo "<td style='padding: 8px; text-align: center;'>{$item_keranjang['jumlah']}</td>";
            echo "<td style='padding: 8px;'>Rp " . number_format($subtotal, 0, ',', '.') . "</td>";
            echo "</tr>";
            break;
        }
    }
}

echo "<tr style='background-color: #ffc107; font-weight: bold;'>";
echo "<td colspan='3' style='padding: 8px; text-align: right;'>TOTAL:</td>";
echo "<td style='padding: 8px;'>Rp " . number_format($total_belanja, 0, ',', '.') . "</td>";
echo "</tr>";
echo "</table>";

// Hitung kembalian
$uang_bayar = 20000000;
$kembalian = $uang_bayar - $total_belanja;

echo "<p><strong>💰 Uang Bayar:</strong> Rp " . number_format($uang_bayar, 0, ',', '.') . "</p>";
echo "<p><strong>💵 Kembalian:</strong> Rp " . number_format($kembalian, 0, ',', '.') . "</p>";

echo "</div>";

echo "<hr>";
echo "<p style='text-align: center; color: #28a745; font-weight: bold;'>🎉 SELAMAT! Anda telah menyelesaikan Pertemuan 4 - Perulangan (Loop)! 🎉</p>";

?>
