<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3 - foreach Array Asosiatif</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #1a1a2e;
            color: #eee;
        }
        .container {
            background-color: #16213e;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            max-width: 700px;
            margin: 0 auto;
            border: 1px solid #0f3460;
        }
        h2 {
            color: #e94560;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        h3 {
            color: #00b4d8;
            border-bottom: 1px solid #0f3460;
            padding-bottom: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #1a1a2e;
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background-color: #e94560;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #0f3460;
        }
        tr:hover {
            background-color: #0f3460;
        }
        .kartu {
            display: inline-block;
            background: linear-gradient(135deg, #e94560, #0f3460);
            padding: 15px 25px;
            border-radius: 10px;
            margin: 10px;
            color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .badge {
            background-color: #00b4d8;
            color: #1a1a2e;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .usia-muda {
            color: #2ecc71;
        }
        .usia-dewasa {
            color: #f39c12;
        }
        .usia-tua {
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>👥 Latihan 3: Data Karyawan dengan Array Asosiatif</h2>
        
        <?php
        // Inisialisasi array asosiatif data usia karyawan
        $UsiaKaryawan["KHOIRUL UMAM"] = "22";
        $UsiaKaryawan["Jack"] = "23";
        $UsiaKaryawan["Ryan"] = "35";
        $UsiaKaryawan["Rachel"] = "46";
        $UsiaKaryawan["Grace"] = "34";
        
        echo "<h3>📋 Daftar Karyawan (foreach):</h3>";
        
        // Tampilan dalam bentuk tabel
        echo "<table>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Nama Karyawan</th>";
        echo "<th>Usia</th>";
        echo "<th>Kategori</th>";
        echo "</tr>";
        
        $no = 1;
        foreach ($UsiaKaryawan as $Nama => $umur) {
            // Tentukan kategori usia
            $kategori = "";
            $classKategori = "";
            
            if ($umur < 20) {
                $kategori = "Remaja";
                $classKategori = "usia-muda";
            } elseif ($umur < 30) {
                $kategori = "Dewasa Muda";
                $classKategori = "usia-dewasa";
            } elseif ($umur < 40) {
                $kategori = "Dewasa";
                $classKategori = "usia-dewasa";
            } else {
                $kategori = "Senior";
                $classKategori = "usia-tua";
            }
            
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td><strong>$Nama</strong></td>";
            echo "<td>$umur tahun</td>";
            echo "<td class='$classKategori'>$kategori</td>";
            echo "</tr>";
            
            $no++;
        }
        echo "</table>";
        
        // Tampilan alternatif dengan kartu
        echo "<h3>🃏 Tampilan Kartu:</h3>";
        echo "<div style='display: flex; flex-wrap: wrap; justify-content: center;'>";
        
        foreach ($UsiaKaryawan as $Nama => $umur) {
            echo "<div class='kartu'>";
            echo "<h4 style='margin:0 0 10px 0;'>$Nama</h4>";
            echo "<div style='font-size: 24px; font-weight: bold;'>$umur</div>";
            echo "<div style='font-size: 14px;'>tahun</div>";
            echo "</div>";
        }
        
        echo "</div>";
        ?>
        
        <h3>📊 Statistik Karyawan:</h3>
        <?php
        // Menghitung statistik
        $totalUsia = 0;
        $jumlahKaryawan = count($UsiaKaryawan);
        
        foreach ($UsiaKaryawan as $umur) {
            $totalUsia += $umur;
        }
        
        $rataRata = $totalUsia / $jumlahKaryawan;
        $usiaMax = max($UsiaKaryawan);
        $usiaMin = min($UsiaKaryawan);
        
        // Mencari karyawan dengan usia tertentu
        $karyawanTermuda = array_search($usiaMin, $UsiaKaryawan);
        $karyawanTertua = array_search($usiaMax, $UsiaKaryawan);
        
        echo "<table>";
        echo "<tr><td>Jumlah Karyawan</td><td><strong>$jumlahKaryawan</strong> orang</td></tr>";
        echo "<tr><td>Total Usia</td><td><strong>$totalUsia</strong> tahun</td></tr>";
        echo "<tr><td>Rata-rata Usia</td><td><strong>" . number_format($rataRata, 1) . "</strong> tahun</td></tr>";
        echo "<tr><td>Karyawan Termuda</td><td><strong>$karyawanTermuda</strong> ($usiaMin tahun)</td></tr>";
        echo "<tr><td>Karyawan Tertua</td><td><strong>$karyawanTertua</strong> ($usiaMax tahun)</td></tr>";
        echo "</table>";
        ?>
        
        <h3>💡 Penjelasan Array Asosiatif:</h3>
        <ul>
            <li>Array asosiatif menggunakan <strong>nama/key</strong> sebagai index, bukan angka</li>
            <li>Sintaks: <code>$array["key"] = "value";</code></li>
            <li>Untuk mengakses: <code>echo $array["key"];</code></li>
            <li><code>foreach($array as $key => $value)</code> digunakan untuk mengambil key dan value sekaligus</li>
            <li>Contoh di atas: key adalah nama karyawan, value adalah usia</li>
        </ul>
        
        <h3>📝 Cara Lain Inisialisasi Array Asosiatif:</h3>
        <?php
        echo "<div style='background-color: #0f3460; padding: 15px; border-radius: 8px;'>";
        echo "<code style='color: #fbd38d;'>";
        echo "\$UsiaKaryawan = array(<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;\"Lisa\" => \"28\",<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;\"Jack\" => \"16\",<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;\"Ryan\" => \"35\",<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;\"Rachel\" => \"46\",<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;\"Grace\" => \"34\"<br>";
        echo ");";
        echo "</code>";
        echo "</div>";
        ?>
    </div>
</body>
</html>