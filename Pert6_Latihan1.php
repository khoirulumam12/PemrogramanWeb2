<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1 - count() dan sizeof()</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f8ff;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .result {
            background-color: #e8f4fd;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
            border-left: 5px solid #3498db;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Latihan 1: Fungsi count() dan sizeof()</h2>
        
        <?php
        echo "<h3>Array dengan Index Numerik:</h3>";
        
        // Inisialisasi array dengan index numerik
        $a[0] = 1;
        $a[1] = 3;
        $a[2] = 5;
        
        // Menampilkan isi array
        echo "<div class='result'>";
        echo "<strong>Isi Array \$a:</strong><br>";
        echo "\$a[0] = " . $a[0] . "<br>";
        echo "\$a[1] = " . $a[1] . "<br>";
        echo "\$a[2] = " . $a[2] . "<br>";
        
        // Menggunakan fungsi count()
        $jumlah = count($a);
        echo "<br><strong>Hasil count(\$a) = $jumlah</strong><br>";
        echo "<em>// variabel \$jumlah akan bernilai 3</em>";
        echo "</div>";
        
        echo "<h3>Array dengan Index Asosiatif:</h3>";
        
        // Inisialisasi array dengan index asosiatif
        $b["buah"] = "semangka";
        $b["sayur"] = "wortel";
        $b["daging"] = "ayam";
        $b["utama"] = "nasi";
        
        // Menampilkan isi array
        echo "<div class='result'>";
        echo "<strong>Isi Array \$b:</strong><br>";
        echo "\$b['buah'] = " . $b["buah"] . "<br>";
        echo "\$b['sayur'] = " . $b["sayur"] . "<br>";
        echo "\$b['daging'] = " . $b["daging"] . "<br>";
        echo "\$b['utama'] = " . $b["utama"] . "<br>";
        
        // Menggunakan fungsi sizeof()
        $jumlah = sizeof($b);
        echo "<br><strong>Hasil sizeof(\$b) = $jumlah</strong><br>";
        echo "<em>// variabel \$jumlah akan bernilai 4</em>";
        echo "</div>";
        
        // Demonstrasi perbandingan count() dan sizeof()
        echo "<h3>Perbandingan count() dan sizeof():</h3>";
        echo "<div class='result'>";
        echo "count(\$a) = " . count($a) . "<br>";
        echo "sizeof(\$a) = " . sizeof($a) . "<br>";
        echo "count(\$b) = " . count($b) . "<br>";
        echo "sizeof(\$b) = " . sizeof($b) . "<br>";
        echo "<br><em>Kedua fungsi memberikan hasil yang sama!</em>";
        echo "</div>";
        ?>
        
        <h3>Penjelasan:</h3>
        <ul>
            <li><code>count()</code> dan <code>sizeof()</code> adalah fungsi yang sama (alias)</li>
            <li>Keduanya digunakan untuk menghitung jumlah elemen dalam array</li>
            <li>Array <code>\$a</code> memiliki 3 elemen → count = 3</li>
            <li>Array <code>\$b</code> memiliki 4 elemen → sizeof = 4</li>
        </ul>
    </div>
</body>
</html>