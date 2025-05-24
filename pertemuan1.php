<?php
/*
================================================================================
                        PERTEMUAN 1: PENGENALAN PHP DASAR
================================================================================
Topik yang dipelajari:
1. Pengenalan PHP
2. Sintaks dasar PHP
3. Variabel dan cara penggunaannya
4. Echo dan Print
5. Komentar dalam PHP
================================================================================
*/

// 1. PENGENALAN PHP
echo "<h1>🚀 SELAMAT DATANG DI PEMBELAJARAN PHP!</h1>";
echo "<hr>";

/*
PHP (PHP: Hypertext Preprocessor) adalah bahasa pemrograman server-side
yang sangat populer untuk pengembangan web dinamis.
*/

// 2. SINTAKS DASAR PHP
echo "<h2>📝 Sintaks Dasar PHP</h2>";
echo "<p>Setiap kode PHP dimulai dengan &lt;?php dan diakhiri dengan ?&gt;</p>";

// 3. VARIABEL DALAM PHP
echo "<h2>📦 Variabel dalam PHP</h2>";

// Variabel dalam PHP dimulai dengan tanda $
$nama = "Budi Santoso";
$umur = 25;
$tinggi = 175.5;
$sudah_menikah = false;

echo "<h3>Contoh Variabel:</h3>";
echo "<ul>";
echo "<li><strong>Nama:</strong> $nama (String)</li>";
echo "<li><strong>Umur:</strong> $umur tahun (Integer)</li>";
echo "<li><strong>Tinggi:</strong> $tinggi cm (Float)</li>";
echo "<li><strong>Status Menikah:</strong> " . ($sudah_menikah ? "Ya" : "Tidak") . " (Boolean)</li>";
echo "</ul>";

// 4. ATURAN PENAMAAN VARIABEL
echo "<h3>📋 Aturan Penamaan Variabel:</h3>";
echo "<ol>";
echo "<li>Dimulai dengan tanda $ (dollar)</li>";
echo "<li>Setelah $ harus dimulai dengan huruf atau underscore (_)</li>";
echo "<li>Tidak boleh dimulai dengan angka</li>";
echo "<li>Case sensitive (membedakan huruf besar dan kecil)</li>";
echo "<li>Tidak boleh menggunakan spasi</li>";
echo "</ol>";

// Contoh variabel yang benar dan salah
echo "<h3>✅ Contoh Variabel yang BENAR:</h3>";
$nama_lengkap = "John Doe";
$_alamat = "Jakarta";
$umur2023 = 30;
$dataUser = "Admin";

echo "<ul>";
echo "<li>\$nama_lengkap = '$nama_lengkap'</li>";
echo "<li>\$_alamat = '$_alamat'</li>";
echo "<li>\$umur2023 = $umur2023</li>";
echo "<li>\$dataUser = '$dataUser'</li>";
echo "</ul>";

echo "<h3>❌ Contoh Variabel yang SALAH:</h3>";
echo "<ul>";
echo "<li>\$2nama (dimulai dengan angka)</li>";
echo "<li>\$nama lengkap (menggunakan spasi)</li>";
echo "<li>\$nama-user (menggunakan tanda hubung)</li>";
echo "</ul>";

// 5. PERBEDAAN ECHO DAN PRINT
echo "<h2>🖨️ Echo vs Print</h2>";

echo "<h3>Menggunakan ECHO:</h3>";
echo "Ini menggunakan echo<br>";
echo "Echo bisa menampilkan multiple parameter: ", "Hello", " ", "World!<br>";

echo "<h3>Menggunakan PRINT:</h3>";
print "Ini menggunakan print<br>";
// print "Hello", "World"; // SALAH! Print hanya bisa 1 parameter

// 6. CONCATENATION (PENGGABUNGAN STRING)
echo "<h2>🔗 Penggabungan String (Concatenation)</h2>";

$depan = "Budi";
$belakang = "Santoso";

// Menggunakan operator titik (.)
$nama_lengkap = $depan . " " . $belakang;
echo "<p>Nama lengkap: $nama_lengkap</p>";

// Concatenation dengan assignment
$pesan = "Halo, ";
$pesan .= "nama saya ";
$pesan .= $nama_lengkap;
echo "<p>$pesan</p>";

// 7. VARIABEL DALAM STRING
echo "<h2>📝 Variabel dalam String</h2>";

$produk = "Laptop";
$harga = 15000000;

// Double quotes - variabel akan diparse
echo "<p>Produk: $produk, Harga: Rp " . number_format($harga, 0, ',', '.') . "</p>";

// Single quotes - variabel tidak akan diparse
echo '<p>Produk: $produk, Harga: $harga</p>';

// 8. KONSTANTA
echo "<h2>🔒 Konstanta</h2>";

// Mendefinisikan konstanta
define("NAMA_WEBSITE", "Belajar PHP");
define("VERSI", "1.0");
define("TAHUN", 2024);

echo "<p>Website: " . NAMA_WEBSITE . "</p>";
echo "<p>Versi: " . VERSI . "</p>";
echo "<p>Tahun: " . TAHUN . "</p>";

// Konstanta dengan const (PHP 5.3+)
const DATABASE_HOST = "localhost";
const DATABASE_NAME = "belajar_php";

echo "<p>Database Host: " . DATABASE_HOST . "</p>";
echo "<p>Database Name: " . DATABASE_NAME . "</p>";

// 9. INFORMASI PHP
echo "<h2>ℹ️ Informasi PHP</h2>";
echo "<p>Versi PHP: " . phpversion() . "</p>";
echo "<p>Sistem Operasi: " . PHP_OS . "</p>";

// 10. LATIHAN PRAKTIK
echo "<h2>💪 Latihan Praktik</h2>";

// Membuat profil sederhana
$nama_siswa = "Ahmad Rizki";
$kelas = "XII RPL";
$sekolah = "SMK Negeri 1 Jakarta";
$hobi = "Programming";
$cita_cita = "Full Stack Developer";

echo "<div style='border: 2px solid #007bff; padding: 20px; margin: 10px; border-radius: 10px; background-color: #f8f9fa;'>";
echo "<h3>👤 Profil Siswa</h3>";
echo "<table style='width: 100%; border-collapse: collapse;'>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Nama:</td><td style='padding: 5px;'>$nama_siswa</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Kelas:</td><td style='padding: 5px;'>$kelas</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Sekolah:</td><td style='padding: 5px;'>$sekolah</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Hobi:</td><td style='padding: 5px;'>$hobi</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Cita-cita:</td><td style='padding: 5px;'>$cita_cita</td></tr>";
echo "</table>";
echo "</div>";

// 11. TIPS DAN BEST PRACTICES
echo "<h2>💡 Tips dan Best Practices</h2>";
echo "<ol>";
echo "<li>Selalu gunakan nama variabel yang deskriptif</li>";
echo "<li>Gunakan snake_case atau camelCase secara konsisten</li>";
echo "<li>Tambahkan komentar untuk kode yang kompleks</li>";
echo "<li>Gunakan konstanta untuk nilai yang tidak berubah</li>";
echo "<li>Selalu tutup tag PHP jika ada HTML setelahnya</li>";
echo "</ol>";

echo "<hr>";
echo "<p style='text-align: center; color: #28a745; font-weight: bold;'>🎉 SELAMAT! Anda telah menyelesaikan Pertemuan 1 - Pengenalan PHP Dasar! 🎉</p>";

?>
