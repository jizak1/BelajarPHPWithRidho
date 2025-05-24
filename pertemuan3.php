<?php
/*
================================================================================
                    PERTEMUAN 3: STRUKTUR KONTROL (IF-ELSE, SWITCH)
================================================================================
Topik yang dipelajari:
1. Struktur Kontrol IF
2. IF-ELSE
3. IF-ELSEIF-ELSE
4. Nested IF
5. Ternary Operator
6. Switch Statement
7. Match Expression (PHP 8+)
================================================================================
*/

echo "<h1>🔀 PERTEMUAN 3: STRUKTUR KONTROL</h1>";
echo "<hr>";

// 1. STRUKTUR KONTROL IF SEDERHANA
echo "<h2>✅ 1. Struktur IF Sederhana</h2>";

$umur = 18;
$nama = "Ahmad";

echo "<p>Nama: $nama, Umur: $umur tahun</p>";

if ($umur >= 18) {
    echo "<p style='color: green;'>✅ $nama sudah dewasa dan boleh memiliki KTP!</p>";
}

if ($umur < 18) {
    echo "<p style='color: red;'>❌ $nama belum dewasa.</p>";
}

// Contoh lain
$nilai = 85;
echo "<p>Nilai ujian: $nilai</p>";

if ($nilai >= 75) {
    echo "<p style='color: green;'>🎉 Selamat! Anda LULUS ujian!</p>";
}

// 2. STRUKTUR IF-ELSE
echo "<h2>⚖️ 2. Struktur IF-ELSE</h2>";

$cuaca = "hujan";
echo "<p>Cuaca hari ini: $cuaca</p>";

if ($cuaca == "cerah") {
    echo "<p style='color: orange;'>☀️ Cuaca cerah, cocok untuk jalan-jalan!</p>";
} else {
    echo "<p style='color: blue;'>🌧️ Cuaca tidak cerah, lebih baik di rumah saja.</p>";
}

// Contoh dengan angka
$saldo = 500000;
$harga_barang = 750000;

echo "<p>Saldo: Rp " . number_format($saldo, 0, ',', '.') . "</p>";
echo "<p>Harga barang: Rp " . number_format($harga_barang, 0, ',', '.') . "</p>";

if ($saldo >= $harga_barang) {
    echo "<p style='color: green;'>💰 Saldo cukup! Anda bisa membeli barang ini.</p>";
} else {
    $kurang = $harga_barang - $saldo;
    echo "<p style='color: red;'>💸 Saldo tidak cukup! Anda kekurangan Rp " . number_format($kurang, 0, ',', '.') . "</p>";
}

// 3. STRUKTUR IF-ELSEIF-ELSE
echo "<h2>🎯 3. Struktur IF-ELSEIF-ELSE</h2>";

$nilai_siswa = 88;
echo "<p>Nilai siswa: $nilai_siswa</p>";

if ($nilai_siswa >= 90) {
    $grade = "A";
    $predikat = "Sangat Baik";
    $warna = "gold";
} elseif ($nilai_siswa >= 80) {
    $grade = "B";
    $predikat = "Baik";
    $warna = "green";
} elseif ($nilai_siswa >= 70) {
    $grade = "C";
    $predikat = "Cukup";
    $warna = "orange";
} elseif ($nilai_siswa >= 60) {
    $grade = "D";
    $predikat = "Kurang";
    $warna = "red";
} else {
    $grade = "E";
    $predikat = "Sangat Kurang";
    $warna = "darkred";
}

echo "<p style='color: $warna; font-weight: bold;'>📊 Grade: $grade ($predikat)</p>";

// Contoh lain: Kategori BMI
$berat = 70; // kg
$tinggi = 1.75; // meter
$bmi = $berat / ($tinggi * $tinggi);

echo "<h3>📏 Kalkulator BMI</h3>";
echo "<p>Berat: $berat kg, Tinggi: $tinggi m</p>";
echo "<p>BMI: " . number_format($bmi, 2) . "</p>";

if ($bmi < 18.5) {
    echo "<p style='color: blue;'>📉 Kategori: Kurus</p>";
} elseif ($bmi < 25) {
    echo "<p style='color: green;'>✅ Kategori: Normal</p>";
} elseif ($bmi < 30) {
    echo "<p style='color: orange;'>⚠️ Kategori: Gemuk</p>";
} else {
    echo "<p style='color: red;'>🚨 Kategori: Obesitas</p>";
}

// 4. NESTED IF (IF BERSARANG)
echo "<h2>🔗 4. Nested IF (IF Bersarang)</h2>";

$jenis_kelamin = "L"; // L = Laki-laki, P = Perempuan
$umur_peserta = 25;
$tinggi_badan = 170; // cm

echo "<p>Jenis Kelamin: " . ($jenis_kelamin == "L" ? "Laki-laki" : "Perempuan") . "</p>";
echo "<p>Umur: $umur_peserta tahun</p>";
echo "<p>Tinggi Badan: $tinggi_badan cm</p>";

echo "<h3>🏃‍♂️ Seleksi Atlet Basket:</h3>";

if ($umur_peserta >= 17 && $umur_peserta <= 30) {
    echo "<p style='color: green;'>✅ Umur memenuhi syarat (17-30 tahun)</p>";
    
    if ($jenis_kelamin == "L") {
        if ($tinggi_badan >= 175) {
            echo "<p style='color: green;'>🏀 LOLOS! Tinggi badan laki-laki memenuhi syarat (≥175 cm)</p>";
        } else {
            echo "<p style='color: red;'>❌ TIDAK LOLOS! Tinggi badan laki-laki kurang (minimal 175 cm)</p>";
        }
    } else {
        if ($tinggi_badan >= 165) {
            echo "<p style='color: green;'>🏀 LOLOS! Tinggi badan perempuan memenuhi syarat (≥165 cm)</p>";
        } else {
            echo "<p style='color: red;'>❌ TIDAK LOLOS! Tinggi badan perempuan kurang (minimal 165 cm)</p>";
        }
    }
} else {
    echo "<p style='color: red;'>❌ TIDAK LOLOS! Umur tidak memenuhi syarat (harus 17-30 tahun)</p>";
}

// 5. TERNARY OPERATOR
echo "<h2>❓ 5. Ternary Operator (Operator Kondisi)</h2>";

$status_login = true;
$username = "admin";

// Ternary operator: kondisi ? nilai_jika_true : nilai_jika_false
$pesan_login = $status_login ? "Selamat datang, $username!" : "Silakan login terlebih dahulu";
echo "<p>Status: $pesan_login</p>";

// Contoh lain
$jam = 14;
$salam = ($jam < 12) ? "Selamat Pagi" : (($jam < 18) ? "Selamat Siang" : "Selamat Malam");
echo "<p>Jam: $jam:00 - $salam!</p>";

// Nested ternary
$nilai_ujian = 75;
$hasil = ($nilai_ujian >= 80) ? "Sangat Baik" : (($nilai_ujian >= 70) ? "Baik" : "Perlu Perbaikan");
echo "<p>Nilai: $nilai_ujian - Hasil: $hasil</p>";

// 6. SWITCH STATEMENT
echo "<h2>🔄 6. Switch Statement</h2>";

$hari = 3; // 1=Senin, 2=Selasa, dst.

echo "<p>Hari ke-$hari:</p>";

switch ($hari) {
    case 1:
        $nama_hari = "Senin";
        $aktivitas = "Rapat tim";
        break;
    case 2:
        $nama_hari = "Selasa";
        $aktivitas = "Coding project";
        break;
    case 3:
        $nama_hari = "Rabu";
        $aktivitas = "Review code";
        break;
    case 4:
        $nama_hari = "Kamis";
        $aktivitas = "Testing aplikasi";
        break;
    case 5:
        $nama_hari = "Jumat";
        $aktivitas = "Deployment";
        break;
    case 6:
        $nama_hari = "Sabtu";
        $aktivitas = "Istirahat";
        break;
    case 7:
        $nama_hari = "Minggu";
        $aktivitas = "Libur";
        break;
    default:
        $nama_hari = "Tidak valid";
        $aktivitas = "Tidak ada";
        break;
}

echo "<p style='color: blue;'>📅 Hari: $nama_hari</p>";
echo "<p style='color: green;'>📋 Aktivitas: $aktivitas</p>";

// Switch dengan string
$bulan = "Januari";

echo "<h3>🗓️ Informasi Bulan: $bulan</h3>";

switch ($bulan) {
    case "Januari":
    case "Februari":
    case "Desember":
        $musim = "Musim Hujan";
        $warna = "blue";
        break;
    case "Maret":
    case "April":
    case "Mei":
        $musim = "Musim Kemarau";
        $warna = "orange";
        break;
    case "Juni":
    case "Juli":
    case "Agustus":
        $musim = "Musim Kemarau Panjang";
        $warna = "red";
        break;
    case "September":
    case "Oktober":
    case "November":
        $musim = "Musim Peralihan";
        $warna = "green";
        break;
    default:
        $musim = "Bulan tidak valid";
        $warna = "black";
        break;
}

echo "<p style='color: $warna;'>🌤️ $musim</p>";

// 7. MATCH EXPRESSION (PHP 8+)
echo "<h2>🎯 7. Match Expression (PHP 8+)</h2>";

$kode_status = 200;

// Match expression (lebih strict dari switch)
$status_message = match($kode_status) {
    200 => "OK - Berhasil",
    201 => "Created - Data berhasil dibuat",
    400 => "Bad Request - Permintaan tidak valid",
    401 => "Unauthorized - Tidak memiliki akses",
    404 => "Not Found - Data tidak ditemukan",
    500 => "Internal Server Error - Kesalahan server",
    default => "Status tidak dikenal"
};

echo "<p>Kode Status: $kode_status</p>";
echo "<p style='color: green;'>📡 $status_message</p>";

// 8. LATIHAN PRAKTIK: SISTEM PENILAIAN LENGKAP
echo "<h2>💪 Latihan Praktik: Sistem Penilaian Siswa</h2>";

$nama_siswa = "Siti Nurhaliza";
$mata_pelajaran = "Pemrograman Web";
$nilai_tugas = 85;
$nilai_uts = 78;
$nilai_uas = 92;
$kehadiran = 95; // persen

// Hitung nilai akhir
$nilai_akhir = ($nilai_tugas * 0.3) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);

echo "<div style='border: 2px solid #007bff; padding: 20px; margin: 10px; border-radius: 10px; background-color: #f8f9fa;'>";
echo "<h3>📊 Laporan Nilai Siswa</h3>";
echo "<table style='width: 100%; border-collapse: collapse;'>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Nama:</td><td style='padding: 5px;'>$nama_siswa</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Mata Pelajaran:</td><td style='padding: 5px;'>$mata_pelajaran</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Nilai Tugas (30%):</td><td style='padding: 5px;'>$nilai_tugas</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Nilai UTS (30%):</td><td style='padding: 5px;'>$nilai_uts</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Nilai UAS (40%):</td><td style='padding: 5px;'>$nilai_uas</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Kehadiran:</td><td style='padding: 5px;'>$kehadiran%</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Nilai Akhir:</td><td style='padding: 5px;'>" . number_format($nilai_akhir, 2) . "</td></tr>";

// Tentukan grade dan status
if ($nilai_akhir >= 85 && $kehadiran >= 80) {
    $grade = "A";
    $status = "LULUS DENGAN PUJIAN";
    $warna = "gold";
} elseif ($nilai_akhir >= 75 && $kehadiran >= 75) {
    $grade = "B";
    $status = "LULUS";
    $warna = "green";
} elseif ($nilai_akhir >= 65 && $kehadiran >= 70) {
    $grade = "C";
    $status = "LULUS";
    $warna = "orange";
} elseif ($nilai_akhir >= 55 && $kehadiran >= 60) {
    $grade = "D";
    $status = "TIDAK LULUS";
    $warna = "red";
} else {
    $grade = "E";
    $status = "TIDAK LULUS";
    $warna = "darkred";
}

echo "<tr><td style='padding: 5px; font-weight: bold;'>Grade:</td><td style='padding: 5px; color: $warna; font-weight: bold;'>$grade</td></tr>";
echo "<tr><td style='padding: 5px; font-weight: bold;'>Status:</td><td style='padding: 5px; color: $warna; font-weight: bold;'>$status</td></tr>";
echo "</table>";
echo "</div>";

echo "<hr>";
echo "<p style='text-align: center; color: #28a745; font-weight: bold;'>🎉 SELAMAT! Anda telah menyelesaikan Pertemuan 3 - Struktur Kontrol! 🎉</p>";

?>
