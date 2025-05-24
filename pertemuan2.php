<?php
/*
================================================================================
                    PERTEMUAN 2: TIPE DATA, OPERATOR, DAN KONSTANTA
================================================================================
Topik yang dipelajari:
1. Tipe Data dalam PHP
2. Operator Aritmatika
3. Operator Perbandingan
4. Operator Logika
5. Operator Assignment
6. Type Casting dan Type Juggling
================================================================================
*/

echo "<h1>📊 PERTEMUAN 2: TIPE DATA DAN OPERATOR</h1>";
echo "<hr>";

// 1. TIPE DATA DALAM PHP
echo "<h2>🏷️ Tipe Data dalam PHP</h2>";

// A. STRING (Teks)
echo "<h3>📝 1. STRING</h3>";
$nama = "Budi Santoso";
$alamat = 'Jl. Merdeka No. 123';
$deskripsi = "Saya adalah seorang \"programmer\" yang handal";

echo "<p><strong>Nama:</strong> $nama</p>";
echo "<p><strong>Alamat:</strong> $alamat</p>";
echo "<p><strong>Deskripsi:</strong> $deskripsi</p>";
echo "<p><strong>Tipe data nama:</strong> " . gettype($nama) . "</p>";

// B. INTEGER (Bilangan Bulat)
echo "<h3>🔢 2. INTEGER</h3>";
$umur = 25;
$jumlah_siswa = 30;
$tahun_lahir = 1998;
$negatif = -10;

echo "<p><strong>Umur:</strong> $umur</p>";
echo "<p><strong>Jumlah Siswa:</strong> $jumlah_siswa</p>";
echo "<p><strong>Tahun Lahir:</strong> $tahun_lahir</p>";
echo "<p><strong>Bilangan Negatif:</strong> $negatif</p>";
echo "<p><strong>Tipe data umur:</strong> " . gettype($umur) . "</p>";

// C. FLOAT/DOUBLE (Bilangan Desimal)
echo "<h3>🔢 3. FLOAT/DOUBLE</h3>";
$tinggi = 175.5;
$berat = 68.7;
$harga = 15000.99;
$pi = 3.14159;

echo "<p><strong>Tinggi:</strong> $tinggi cm</p>";
echo "<p><strong>Berat:</strong> $berat kg</p>";
echo "<p><strong>Harga:</strong> Rp " . number_format($harga, 2, ',', '.') . "</p>";
echo "<p><strong>Pi:</strong> $pi</p>";
echo "<p><strong>Tipe data tinggi:</strong> " . gettype($tinggi) . "</p>";

// D. BOOLEAN (True/False)
echo "<h3>✅ 4. BOOLEAN</h3>";
$sudah_menikah = true;
$punya_sim = false;
$lulus_ujian = true;

echo "<p><strong>Sudah Menikah:</strong> " . ($sudah_menikah ? "Ya" : "Tidak") . "</p>";
echo "<p><strong>Punya SIM:</strong> " . ($punya_sim ? "Ya" : "Tidak") . "</p>";
echo "<p><strong>Lulus Ujian:</strong> " . ($lulus_ujian ? "Ya" : "Tidak") . "</p>";
echo "<p><strong>Tipe data sudah_menikah:</strong> " . gettype($sudah_menikah) . "</p>";

// E. ARRAY
echo "<h3>📋 5. ARRAY</h3>";
$hobi = array("Programming", "Gaming", "Reading");
$nilai = [85, 90, 78, 92, 88];
$data_siswa = [
    "nama" => "Ahmad",
    "umur" => 17,
    "kelas" => "XII RPL"
];

echo "<p><strong>Hobi:</strong> " . implode(", ", $hobi) . "</p>";
echo "<p><strong>Nilai:</strong> " . implode(", ", $nilai) . "</p>";
echo "<p><strong>Data Siswa:</strong> " . $data_siswa["nama"] . " (" . $data_siswa["umur"] . " tahun)</p>";
echo "<p><strong>Tipe data hobi:</strong> " . gettype($hobi) . "</p>";

// F. NULL
echo "<h3>❌ 6. NULL</h3>";
$data_kosong = null;
$belum_diisi = NULL;

echo "<p><strong>Data Kosong:</strong> " . ($data_kosong === null ? "NULL" : $data_kosong) . "</p>";
echo "<p><strong>Tipe data kosong:</strong> " . gettype($data_kosong) . "</p>";

// 2. OPERATOR ARITMATIKA
echo "<h2>➕ Operator Aritmatika</h2>";

$a = 10;
$b = 3;

echo "<h3>Contoh dengan \$a = $a dan \$b = $b:</h3>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #f2f2f2;'>";
echo "<th style='padding: 10px;'>Operator</th>";
echo "<th style='padding: 10px;'>Operasi</th>";
echo "<th style='padding: 10px;'>Hasil</th>";
echo "<th style='padding: 10px;'>Keterangan</th>";
echo "</tr>";

echo "<tr><td style='padding: 10px;'>+</td><td style='padding: 10px;'>\$a + \$b</td><td style='padding: 10px;'>" . ($a + $b) . "</td><td style='padding: 10px;'>Penjumlahan</td></tr>";
echo "<tr><td style='padding: 10px;'>-</td><td style='padding: 10px;'>\$a - \$b</td><td style='padding: 10px;'>" . ($a - $b) . "</td><td style='padding: 10px;'>Pengurangan</td></tr>";
echo "<tr><td style='padding: 10px;'>*</td><td style='padding: 10px;'>\$a * \$b</td><td style='padding: 10px;'>" . ($a * $b) . "</td><td style='padding: 10px;'>Perkalian</td></tr>";
echo "<tr><td style='padding: 10px;'>/</td><td style='padding: 10px;'>\$a / \$b</td><td style='padding: 10px;'>" . ($a / $b) . "</td><td style='padding: 10px;'>Pembagian</td></tr>";
echo "<tr><td style='padding: 10px;'>%</td><td style='padding: 10px;'>\$a % \$b</td><td style='padding: 10px;'>" . ($a % $b) . "</td><td style='padding: 10px;'>Modulus (sisa bagi)</td></tr>";
echo "<tr><td style='padding: 10px;'>**</td><td style='padding: 10px;'>\$a ** \$b</td><td style='padding: 10px;'>" . ($a ** $b) . "</td><td style='padding: 10px;'>Pangkat</td></tr>";
echo "</table>";

// 3. OPERATOR PERBANDINGAN
echo "<h2>⚖️ Operator Perbandingan</h2>";

$x = 5;
$y = "5";
$z = 10;

echo "<h3>Contoh dengan \$x = $x (integer), \$y = \"$y\" (string), \$z = $z:</h3>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #f2f2f2;'>";
echo "<th style='padding: 10px;'>Operator</th>";
echo "<th style='padding: 10px;'>Operasi</th>";
echo "<th style='padding: 10px;'>Hasil</th>";
echo "<th style='padding: 10px;'>Keterangan</th>";
echo "</tr>";

echo "<tr><td style='padding: 10px;'>==</td><td style='padding: 10px;'>\$x == \$y</td><td style='padding: 10px;'>" . ($x == $y ? "true" : "false") . "</td><td style='padding: 10px;'>Sama dengan (nilai)</td></tr>";
echo "<tr><td style='padding: 10px;'>===</td><td style='padding: 10px;'>\$x === \$y</td><td style='padding: 10px;'>" . ($x === $y ? "true" : "false") . "</td><td style='padding: 10px;'>Identik (nilai dan tipe)</td></tr>";
echo "<tr><td style='padding: 10px;'>!=</td><td style='padding: 10px;'>\$x != \$z</td><td style='padding: 10px;'>" . ($x != $z ? "true" : "false") . "</td><td style='padding: 10px;'>Tidak sama dengan</td></tr>";
echo "<tr><td style='padding: 10px;'>!==</td><td style='padding: 10px;'>\$x !== \$y</td><td style='padding: 10px;'>" . ($x !== $y ? "true" : "false") . "</td><td style='padding: 10px;'>Tidak identik</td></tr>";
echo "<tr><td style='padding: 10px;'>&lt;</td><td style='padding: 10px;'>\$x &lt; \$z</td><td style='padding: 10px;'>" . ($x < $z ? "true" : "false") . "</td><td style='padding: 10px;'>Lebih kecil</td></tr>";
echo "<tr><td style='padding: 10px;'>&gt;</td><td style='padding: 10px;'>\$x &gt; \$z</td><td style='padding: 10px;'>" . ($x > $z ? "true" : "false") . "</td><td style='padding: 10px;'>Lebih besar</td></tr>";
echo "<tr><td style='padding: 10px;'>&lt;=</td><td style='padding: 10px;'>\$x &lt;= \$y</td><td style='padding: 10px;'>" . ($x <= $y ? "true" : "false") . "</td><td style='padding: 10px;'>Lebih kecil atau sama</td></tr>";
echo "<tr><td style='padding: 10px;'>&gt;=</td><td style='padding: 10px;'>\$x &gt;= \$y</td><td style='padding: 10px;'>" . ($x >= $y ? "true" : "false") . "</td><td style='padding: 10px;'>Lebih besar atau sama</td></tr>";
echo "</table>";

// 4. OPERATOR LOGIKA
echo "<h2>🧠 Operator Logika</h2>";

$benar = true;
$salah = false;

echo "<h3>Contoh dengan \$benar = true dan \$salah = false:</h3>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #f2f2f2;'>";
echo "<th style='padding: 10px;'>Operator</th>";
echo "<th style='padding: 10px;'>Operasi</th>";
echo "<th style='padding: 10px;'>Hasil</th>";
echo "<th style='padding: 10px;'>Keterangan</th>";
echo "</tr>";

echo "<tr><td style='padding: 10px;'>&&</td><td style='padding: 10px;'>\$benar && \$salah</td><td style='padding: 10px;'>" . ($benar && $salah ? "true" : "false") . "</td><td style='padding: 10px;'>AND (dan)</td></tr>";
echo "<tr><td style='padding: 10px;'>||</td><td style='padding: 10px;'>\$benar || \$salah</td><td style='padding: 10px;'>" . ($benar || $salah ? "true" : "false") . "</td><td style='padding: 10px;'>OR (atau)</td></tr>";
echo "<tr><td style='padding: 10px;'>!</td><td style='padding: 10px;'>!\$benar</td><td style='padding: 10px;'>" . (!$benar ? "true" : "false") . "</td><td style='padding: 10px;'>NOT (tidak)</td></tr>";
echo "<tr><td style='padding: 10px;'>and</td><td style='padding: 10px;'>\$benar and \$salah</td><td style='padding: 10px;'>" . ($benar and $salah ? "true" : "false") . "</td><td style='padding: 10px;'>AND (prioritas rendah)</td></tr>";
echo "<tr><td style='padding: 10px;'>or</td><td style='padding: 10px;'>\$benar or \$salah</td><td style='padding: 10px;'>" . ($benar or $salah ? "true" : "false") . "</td><td style='padding: 10px;'>OR (prioritas rendah)</td></tr>";
echo "</table>";

// 5. OPERATOR ASSIGNMENT
echo "<h2>📝 Operator Assignment</h2>";

$angka = 10;
echo "<p>Nilai awal: \$angka = $angka</p>";

$angka += 5;  // $angka = $angka + 5
echo "<p>Setelah \$angka += 5: $angka</p>";

$angka -= 3;  // $angka = $angka - 3
echo "<p>Setelah \$angka -= 3: $angka</p>";

$angka *= 2;  // $angka = $angka * 2
echo "<p>Setelah \$angka *= 2: $angka</p>";

$angka /= 4;  // $angka = $angka / 4
echo "<p>Setelah \$angka /= 4: $angka</p>";

$angka %= 3;  // $angka = $angka % 3
echo "<p>Setelah \$angka %= 3: $angka</p>";

// String concatenation assignment
$pesan = "Halo";
$pesan .= " Dunia!";
echo "<p>String concatenation: $pesan</p>";

// 6. TYPE CASTING
echo "<h2>🔄 Type Casting</h2>";

$string_angka = "123";
$float_angka = 45.67;
$boolean_true = true;

echo "<h3>Contoh Type Casting:</h3>";
echo "<p>Original: \$string_angka = \"$string_angka\" (" . gettype($string_angka) . ")</p>";
echo "<p>Cast to int: " . (int)$string_angka . " (" . gettype((int)$string_angka) . ")</p>";

echo "<p>Original: \$float_angka = $float_angka (" . gettype($float_angka) . ")</p>";
echo "<p>Cast to int: " . (int)$float_angka . " (" . gettype((int)$float_angka) . ")</p>";
echo "<p>Cast to string: \"" . (string)$float_angka . "\" (" . gettype((string)$float_angka) . ")</p>";

echo "<p>Original: \$boolean_true = " . ($boolean_true ? "true" : "false") . " (" . gettype($boolean_true) . ")</p>";
echo "<p>Cast to int: " . (int)$boolean_true . " (" . gettype((int)$boolean_true) . ")</p>";
echo "<p>Cast to string: \"" . (string)$boolean_true . "\" (" . gettype((string)$boolean_true) . ")</p>";

// 7. LATIHAN PRAKTIK
echo "<h2>💪 Latihan Praktik: Kalkulator Sederhana</h2>";

$bil1 = 15;
$bil2 = 4;

echo "<div style='border: 2px solid #007bff; padding: 20px; margin: 10px; border-radius: 10px; background-color: #f8f9fa;'>";
echo "<h3>🧮 Kalkulator dengan \$bil1 = $bil1 dan \$bil2 = $bil2</h3>";
echo "<p><strong>Penjumlahan:</strong> $bil1 + $bil2 = " . ($bil1 + $bil2) . "</p>";
echo "<p><strong>Pengurangan:</strong> $bil1 - $bil2 = " . ($bil1 - $bil2) . "</p>";
echo "<p><strong>Perkalian:</strong> $bil1 × $bil2 = " . ($bil1 * $bil2) . "</p>";
echo "<p><strong>Pembagian:</strong> $bil1 ÷ $bil2 = " . ($bil1 / $bil2) . "</p>";
echo "<p><strong>Modulus:</strong> $bil1 % $bil2 = " . ($bil1 % $bil2) . "</p>";
echo "<p><strong>Pangkat:</strong> $bil1 ^ $bil2 = " . ($bil1 ** $bil2) . "</p>";
echo "</div>";

echo "<hr>";
echo "<p style='text-align: center; color: #28a745; font-weight: bold;'>🎉 SELAMAT! Anda telah menyelesaikan Pertemuan 2 - Tipe Data dan Operator! 🎉</p>";

?>
