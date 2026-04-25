<!DOCTYPE html>
<html>
<head>
    <title>Latihan 9 - Penggunaan in_array()</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 30px;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 800px;
            margin: 0 auto;
        }
        h2 {
            color: #2c7a7b;
            border-bottom: 3px solid #38b2ac;
            padding-bottom: 10px;
        }
        .result-box {
            background: linear-gradient(135deg, #e6fffa 0%, #b2f5ea 100%);
            border-left: 5px solid #2c7a7b;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 10px 10px 0;
        }
        .found {
            color: #38a169;
            font-weight: bold;
            background-color: #c6f6d5;
            padding: 5px 10px;
            border-radius: 20px;
        }
        .not-found {
            color: #e53e3e;
            font-weight: bold;
            background-color: #fed7d7;
            padding: 5px 10px;
            border-radius: 20px;
        }
        code {
            background-color: #2d3748;
            color: #fbd38d;
            padding: 3px 8px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #81e6d9;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #2c7a7b;
            color: white;
        }
        .search-box {
            background-color: #f7fafc;
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🔎 Latihan 9: Fungsi in_array()</h2>
        
        <?php
        echo "<div class='result-box'>";
        
        // Array program
        $program = array("HTML", "PHP", "CSS", "JavaScript");
        
        echo "<strong>Isi Array:</strong> ";
        print_r($program);
        echo "<br><br>";
        
        $cari = "HTML";
        
        if (in_array($cari, $program)) {
            echo "<span class='found'>✓ Program Basis Web $cari ada di dalam array</span>";
        } else {
            echo "<span class='not-found'>✗ Program Basis Web $cari tidak ada di dalam array</span>";
        }
        
        echo "</div>";
        
        // Pencarian interaktif sederhana
        echo "<h3>🔍 Coba Pencarian Lain:</h3>";
        echo "<div class='search-box'>";
        
        $daftarCari = array("PHP", "Python", "CSS", "Java", "HTML", "Ruby", "JavaScript");
        
        echo "<table>";
        echo "<tr><th>Kata Kunci</th><th>Status</th></tr>";
        
        foreach ($daftarCari as $keyword) {
            $found = in_array($keyword, $program);
            echo "<tr>";
            echo "<td><code>$keyword</code></td>";
            echo "<td>";
            if ($found) {
                echo "<span class='found'>✓ Ditemukan</span>";
            } else {
                echo "<span class='not-found'>✗ Tidak ditemukan</span>";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        
        // Contoh tambahan
        echo "<h3>📚 Contoh Lain in_array():</h3>";
        
        // Contoh 1: Array numerik
        echo "<h4>1. Pencarian pada Array Numerik:</h4>";
        $angka = array(10, 20, 30, 40, 50);
        
        echo "<div class='search-box'>";
        echo "<strong>Array:</strong> "; print_r($angka); echo "<br><br>";
        
        $cariAngka = array(20, 35, 50);
        foreach ($cariAngka as $c) {
            $status = in_array($c, $angka) ? "✓ Ada" : "✗ Tidak ada";
            $class = in_array($c, $angka) ? 'found' : 'not-found';
            echo "Mencari <code>$c</code>: <span class='$class'>$status</span><br>";
        }
        echo "</div>";
        
        // Contoh 2: Array asosiatif
        echo "<h4>2. Pencarian pada Array Asosiatif:</h4>";
        $buah = array("a" => "Apel", "b" => "Belimbing", "c" => "Ceri");
        
        echo "<div class='search-box'>";
        echo "<strong>Array:</strong> "; print_r($buah); echo "<br><br>";
        echo "in_array() mencari <strong>nilai (value)</strong>, bukan key!<br><br>";
        
        $cariBuah = array("Apel", "Durian", "Ceri");
        foreach ($cariBuah as $b) {
            $status = in_array($b, $buah) ? "✓ Ditemukan" : "✗ Tidak ditemukan";
            $class = in_array($b, $buah) ? 'found' : 'not-found';
            echo "Mencari '$b': <span class='$class'>$status</span><br>";
        }
        echo "</div>";
        
        // Contoh 3: Validasi input
        echo "<h4>3. Validasi Input User:</h4>";
        $hariValid = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
        
        echo "<div class='search-box'>";
        echo "<strong>Hari yang valid:</strong> "; print_r($hariValid); echo "<br><br>";
        
        $inputUser = array("Senin", "Libur", "Minggu", "Weekend");
        echo "<table style='width:auto;'>";
        echo "<tr><th>Input</th><th>Valid?</th></tr>";
        
        foreach ($inputUser as $input) {
            $valid = in_array($input, $hariValid);
            echo "<tr>";
            echo "<td>$input</td>";
            echo "<td>" . ($valid ? "<span class='found'>✓ Valid</span>" : "<span class='not-found'>✗ Tidak Valid</span>") . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        ?>
        
        <h3>📝 Penjelasan:</h3>
        <ul>
            <li><code>in_array()</code> memeriksa apakah suatu nilai ada dalam array</li>
            <li>Sintaks: <code>in_array($cari, $array, $strict)</code></li>
            <li>Mengembalikan <code>TRUE</code> jika ditemukan, <code>FALSE</code> jika tidak</li>
            <li>Bersifat <strong>case-sensitive</strong> (membedakan huruf besar/kecil)</li>
            <li>Parameter <code>$strict</code> (opsional) untuk memeriksa tipe data juga</li>
        </ul>
    </div>
</body>
</html>