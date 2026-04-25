<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2 - foreach Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            color: #4a5568;
            text-align: center;
            margin-bottom: 20px;
        }
        .array-box {
            background-color: #f7fafc;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            border: 1px solid #e2e8f0;
        }
        .output-item {
            padding: 8px 15px;
            margin: 5px 0;
            background-color: #ebf8ff;
            border-radius: 20px;
            border-left: 4px solid #3182ce;
        }
        .output-item:nth-child(even) {
            background-color: #fef5e7;
            border-left-color: #f39c12;
        }
        code {
            background-color: #2d3748;
            color: #fbd38d;
            padding: 2px 8px;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🐘 Latihan 2: Perulangan foreach</h2>
        
        <?php
        echo "<h3>Array dengan Index Numerik:</h3>";
        
        // Inisialisasi array
        $x = array("one", "two", "three");
        
        // Menampilkan struktur array
        echo "<div class='array-box'>";
        echo "<strong>Isi Array \$x:</strong><br>";
        echo "<code>\$x = array('one', 'two', 'three');</code><br><br>";
        echo "Jumlah elemen: " . count($x) . " buah<br>";
        echo "</div>";
        
        echo "<h3>Hasil Perulangan foreach:</h3>";
        echo "<div class='array-box'>";
        
        // Perulangan foreach untuk menampilkan setiap nilai
        foreach ($x as $value) {
            echo "<div class='output-item'>";
            echo "✨ Nilai: <strong>$value</strong>";
            echo "</div>";
        }
        
        echo "</div>";
        
        // Contoh tambahan dengan index
        echo "<h3>foreach dengan Index:</h3>";
        echo "<div class='array-box'>";
        
        foreach ($x as $index => $value) {
            echo "<div class='output-item'>";
            echo "📌 Index ke-<strong>$index</strong> = <strong>$value</strong>";
            echo "</div>";
        }
        
        echo "</div>";
        ?>
        
        <!-- Contoh tambahan array lain -->
        <h3>Contoh Array Lain:</h3>
        <?php
        echo "<div class='array-box'>";
        
        // Array buah-buahan
        $buah = array("Apel", "Jeruk", "Mangga", "Pisang", "Anggur");
        
        echo "<strong>Daftar Buah:</strong><br>";
        echo "<ol>";
        foreach ($buah as $item) {
            echo "<li>$item</li>";
        }
        echo "</ol>";
        
        echo "</div>";
        ?>
        
        <h3>Penjelasan:</h3>
        <ul>
            <li><code>foreach</code> digunakan untuk melakukan perulangan pada setiap elemen array</li>
            <li>Sintaks: <code>foreach ($array as $value) { ... }</code></li>
            <li>Setiap iterasi, variabel <code>\$value</code> akan berisi nilai elemen array saat ini</li>
            <li>Bisa juga mendapatkan index dengan: <code>foreach ($array as $index => $value)</code></li>
        </ul>
    </div>
</body>
</html>