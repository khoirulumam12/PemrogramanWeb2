<!DOCTYPE html>
<html>
<head>
    <title>Latihan Bonus - Konsep Array Lengkap</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 3px solid #3498db;
            padding-bottom: 15px;
        }
        h2 {
            color: #2980b9;
            margin-top: 25px;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }
        .code-block {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
        .output {
            background-color: #e8f4f8;
            border-left: 4px solid #2980b9;
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🐘 Konsep Array dalam PHP</h1>
        
        <?php
        // 1. Array Numerik (Indexed Array)
        echo "<h2>1. Array Numerik (Indexed Array)</h2>";
        
        echo "<div class='code-block'>";
        echo "// Cara 1: Menggunakan array()<br>";
        echo "\$buah = array('Apel', 'Jeruk', 'Mangga', 'Pisang');<br><br>";
        echo "// Cara 2: Menggunakan bracket []<br>";
        echo "\$warna = ['Merah', 'Hijau', 'Biru', 'Kuning'];<br><br>";
        echo "// Cara 3: Assign satu per satu<br>";
        echo "\$hari[] = 'Senin';<br>";
        echo "\$hari[] = 'Selasa';<br>";
        echo "\$hari[] = 'Rabu';";
        echo "</div>";
        
        $buah = array('Apel', 'Jeruk', 'Mangga', 'Pisang');
        $warna = ['Merah', 'Hijau', 'Biru', 'Kuning'];
        $hari[] = 'Senin';
        $hari[] = 'Selasa';
        $hari[] = 'Rabu';
        
        echo "<div class='output'>";
        echo "<strong>Hasil:</strong><br>";
        echo "Buah: "; print_r($buah); echo "<br>";
        echo "Warna: "; print_r($warna); echo "<br>";
        echo "Hari: "; print_r($hari); echo "<br>";
        echo "</div>";
        
        // 2. Array Asosiatif
        echo "<h2>2. Array Asosiatif</h2>";
        
        echo "<div class='code-block'>";
        echo "\$mahasiswa = [<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;'nama' => 'KHOIRUL UMAM',<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;'nim' => '221011450297',<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;'jurusan' => 'Teknik Informatika',<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;'ipk' => 3.37<br>";
        echo "];";
        echo "</div>";
        
        $mahasiswa = [
            'nama' => 'KHOIRUL UMAM',
            'nim' => '221011450297',
            'jurusan' => 'Teknik Informatika',
            'ipk' => 3.37
        ];
        
        echo "<div class='output'>";
        echo "<table>";
        echo "<tr><th>Key</th><th>Value</th></tr>";
        foreach ($mahasiswa as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
        echo "</div>";
        
        // 3. Array Multidimensi
        echo "<h2>3. Array Multidimensi</h2>";
        
        echo "<div class='code-block'>";
        echo "\$karyawan = [<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;['KHOIRUL UMAM', 'IT', 5000000],<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;['Budi', 'HR', 4500000],<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;['Cici', 'Finance', 5500000]<br>";
        echo "];";
        echo "</div>";
        
        $karyawan = [
            ['KHOIRUL UMAM', 'IT', 5000000],
            ['Budi', 'HR', 4500000],
            ['Cici', 'Finance', 5500000]
        ];
        
        echo "<div class='output'>";
        echo "<table>";
        echo "<tr><th>Nama</th><th>Departemen</th><th>Gaji</th></tr>";
        foreach ($karyawan as $k) {
            echo "<tr>";
            echo "<td>{$k[0]}</td>";
            echo "<td>{$k[1]}</td>";
            echo "<td>Rp " . number_format($k[2], 0, ',', '.') . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        
        // 4. Fungsi-fungsi Array
        echo "<h2>4. Fungsi-fungsi Array</h2>";
        
        $angka = [5, 2, 8, 1, 9, 3];
        
        echo "<div class='output'>";
        echo "Array awal: "; print_r($angka); echo "<br><br>";
        
        echo "count() = " . count($angka) . " elemen<br>";
        echo "sizeof() = " . sizeof($angka) . " elemen<br>";
        echo "max() = " . max($angka) . "<br>";
        echo "min() = " . min($angka) . "<br>";
        echo "array_sum() = " . array_sum($angka) . "<br>";
        
        sort($angka);
        echo "sort(): "; print_r($angka); echo "<br>";
        
        rsort($angka);
        echo "rsort(): "; print_r($angka); echo "<br>";
        
        echo "in_array(8) = " . (in_array(8, $angka) ? 'true' : 'false') . "<br>";
        echo "array_search(8) = index ke-" . array_search(8, $angka) . "<br>";
        echo "</div>";
        
        // 5. Demonstrasi semua latihan
        echo "<h2>5. Ringkasan Semua Latihan</h2>";
        
        echo "<div class='output'>";
        
        // Latihan 1
        echo "<strong>Latihan 1 - count() dan sizeof():</strong><br>";
        $test1 = [1, 3, 5];
        echo "Array: "; print_r($test1); echo "<br>";
        echo "count() = " . count($test1) . ", sizeof() = " . sizeof($test1) . "<br><br>";
        
        // Latihan 2
        echo "<strong>Latihan 2 - foreach Array Numerik:</strong><br>";
        $test2 = ["one", "two", "three"];
        foreach ($test2 as $val) {
            echo "$val ";
        }
        echo "<br><br>";
        
        // Latihan 3
        echo "<strong>Latihan 3 - foreach Array Asosiatif:</strong><br>";
        $test3 = ["Lisa" => 28, "Jack" => 16, "Ryan" => 35];
        foreach ($test3 as $nama => $usia) {
            echo "$nama ($usia th) ";
        }
        echo "<br>";
        echo "</div>";
        ?>
        
        <h2>📚 Kesimpulan:</h2>
        <ul>
            <li><strong>Array</strong> adalah variabel yang dapat menyimpan banyak nilai</li>
            <li><strong>Array Numerik</strong> menggunakan angka sebagai index (0, 1, 2, ...)</li>
            <li><strong>Array Asosiatif</strong> menggunakan string sebagai key</li>
            <li><strong>Array Multidimensi</strong> adalah array dalam array</li>
            <li><code>count()</code> dan <code>sizeof()</code> menghitung jumlah elemen array</li>
            <li><code>foreach</code> adalah cara termudah untuk melakukan iterasi array</li>
        </ul>
    </div>
</body>
</html>