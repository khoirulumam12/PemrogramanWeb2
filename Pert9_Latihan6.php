<!DOCTYPE html>
<html>
<head>
    <title>Latihan Bonus - Fungsi String PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 20px;
            background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        h1 {
            color: #2b6cb0;
            border-bottom: 3px solid #66a6ff;
            padding-bottom: 15px;
        }
        h2 {
            color: #2c5282;
            margin-top: 25px;
            padding: 10px;
            background: #ebf8ff;
            border-radius: 5px;
        }
        .function-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        .function-card {
            background: #f7fafc;
            border-radius: 10px;
            padding: 20px;
            border-left: 5px solid #3182ce;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .function-title {
            font-size: 18px;
            font-weight: bold;
            color: #2b6cb0;
            margin-bottom: 15px;
        }
        .demo-box {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .input-text {
            background: #edf2f7;
            padding: 5px 10px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
        }
        .output-text {
            background: #c6f6d5;
            padding: 5px 10px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            font-weight: bold;
        }
        code {
            background: #2d3748;
            color: #fbd38d;
            padding: 3px 8px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        th, td {
            border: 1px solid #e2e8f0;
            padding: 12px;
            text-align: left;
        }
        th {
            background: #2b6cb0;
            color: white;
        }
        tr:nth-child(even) {
            background: #f7fafc;
        }
        .demo-form {
            background: #ebf8ff;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 2px solid #66a6ff;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background: #2b6cb0;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #1a4a7a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔤 Fungsi String dalam PHP</h1>
        
        <!-- Form Demo Interaktif -->
        <div class="demo-form">
            <h3>🧪 Demo Interaktif Fungsi String:</h3>
            <form method="POST" action="">
                <input type="text" name="test_string" placeholder="Masukkan teks untuk diuji..." 
                       value="<?php echo isset($_POST['test_string']) ? htmlspecialchars($_POST['test_string']) : 'Hello World!'; ?>">
                <input type="submit" name="submit" value="Proses">
            </form>
            
            <?php
            if (isset($_POST['submit'])) {
                $str = $_POST['test_string'];
                echo "<div style='margin-top:20px;'>";
                echo "<h4>Hasil untuk: <span class='input-text'>$str</span></h4>";
                echo "<table>";
                echo "<tr><th>Fungsi</th><th>Hasil</th></tr>";
                echo "<tr><td><code>strlen()</code></td><td>" . strlen($str) . " karakter</td></tr>";
                echo "<tr><td><code>strtoupper()</code></td><td>" . strtoupper($str) . "</td></tr>";
                echo "<tr><td><code>strtolower()</code></td><td>" . strtolower($str) . "</td></tr>";
                echo "<tr><td><code>ucfirst()</code></td><td>" . ucfirst($str) . "</td></tr>";
                echo "<tr><td><code>ucwords()</code></td><td>" . ucwords($str) . "</td></tr>";
                echo "<tr><td><code>strrev()</code></td><td>" . strrev($str) . "</td></tr>";
                echo "<tr><td><code>trim()</code></td><td>'" . trim($str) . "'</td></tr>";
                echo "<tr><td><code>ltrim()</code></td><td>'" . ltrim($str) . "'</td></tr>";
                echo "<tr><td><code>rtrim()</code></td><td>'" . rtrim($str) . "'</td></tr>";
                echo "<tr><td><code>md5()</code></td><td>" . md5($str) . "</td></tr>";
                echo "<tr><td><code>sha1()</code></td><td>" . sha1($str) . "</td></tr>";
                echo "</table>";
                echo "</div>";
            }
            ?>
        </div>
        
        <!-- Grid Fungsi String -->
        <h2>📚 Daftar Lengkap Fungsi String:</h2>
        <div class="function-grid">
            <?php
            $testString = "  Hello World PHP  ";
            $testString2 = "saya belajar pemrograman web";
            $testString3 = "<b>Bold Text</b> <script>alert('xss')</script>";
            $testString4 = "apel,jeruk,mangga,pisang";
            $testString5 = "The quick brown fox jumps over the lazy dog";
            
            $functions = [
                [
                    'name' => 'strlen()',
                    'desc' => 'Menghitung jumlah karakter',
                    'code' => 'strlen("' . $testString . '")',
                    'result' => strlen($testString)
                ],
                [
                    'name' => 'strtoupper()',
                    'desc' => 'Mengubah ke huruf besar',
                    'code' => 'strtoupper("' . $testString2 . '")',
                    'result' => strtoupper($testString2)
                ],
                [
                    'name' => 'strtolower()',
                    'desc' => 'Mengubah ke huruf kecil',
                    'code' => 'strtolower("HELLO WORLD")',
                    'result' => strtolower("HELLO WORLD")
                ],
                [
                    'name' => 'ucfirst()',
                    'desc' => 'Huruf pertama besar',
                    'code' => 'ucfirst("' . $testString2 . '")',
                    'result' => ucfirst($testString2)
                ],
                [
                    'name' => 'ucwords()',
                    'desc' => 'Huruf pertama setiap kata besar',
                    'code' => 'ucwords("' . $testString2 . '")',
                    'result' => ucwords($testString2)
                ],
                [
                    'name' => 'trim()',
                    'desc' => 'Hapus spasi awal & akhir',
                    'code' => 'trim("' . $testString . '")',
                    'result' => "'" . trim($testString) . "'"
                ],
                [
                    'name' => 'ltrim()',
                    'desc' => 'Hapus spasi di awal',
                    'code' => 'ltrim("' . $testString . '")',
                    'result' => "'" . ltrim($testString) . "'"
                ],
                [
                    'name' => 'rtrim()',
                    'desc' => 'Hapus spasi di akhir',
                    'code' => 'rtrim("' . $testString . '")',
                    'result' => "'" . rtrim($testString) . "'"
                ],
                [
                    'name' => 'substr()',
                    'desc' => 'Memotong string',
                    'code' => 'substr("Hello World", 0, 5)',
                    'result' => substr("Hello World", 0, 5)
                ],
                [
                    'name' => 'substr_count()',
                    'desc' => 'Menghitung substring',
                    'code' => 'substr_count("' . $testString5 . '", "o")',
                    'result' => substr_count($testString5, "o")
                ],
                [
                    'name' => 'strpos()',
                    'desc' => 'Posisi string',
                    'code' => 'strpos("Hello World", "World")',
                    'result' => strpos("Hello World", "World")
                ],
                [
                    'name' => 'strrev()',
                    'desc' => 'Membalik string',
                    'code' => 'strrev("Hello")',
                    'result' => strrev("Hello")
                ],
                [
                    'name' => 'str_replace()',
                    'desc' => 'Mengganti string',
                    'code' => 'str_replace("World", "PHP", "Hello World")',
                    'result' => str_replace("World", "PHP", "Hello World")
                ],
                [
                    'name' => 'strip_tags()',
                    'desc' => 'Hapus tag HTML',
                    'code' => 'strip_tags("' . htmlspecialchars($testString3) . '")',
                    'result' => strip_tags($testString3)
                ],
                [
                    'name' => 'htmlentities()',
                    'desc' => 'Konversi ke HTML entities',
                    'code' => 'htmlentities("<b>Bold</b>")',
                    'result' => htmlentities("<b>Bold</b>")
                ],
                [
                    'name' => 'addslashes()',
                    'desc' => 'Tambah backslash',
                    'code' => 'addslashes("It\'s PHP")',
                    'result' => addslashes("It's PHP")
                ],
                [
                    'name' => 'explode()',
                    'desc' => 'String ke Array',
                    'code' => 'explode(",", "' . $testString4 . '")',
                    'result' => '<pre style="margin:0">' . print_r(explode(",", $testString4), true) . '</pre>'
                ],
                [
                    'name' => 'implode()',
                    'desc' => 'Array ke String',
                    'code' => 'implode(" - ", ["A","B","C"])',
                    'result' => implode(" - ", ["A","B","C"])
                ],
                [
                    'name' => 'str_repeat()',
                    'desc' => 'Mengulang string',
                    'code' => 'str_repeat("Ha", 3)',
                    'result' => str_repeat("Ha", 3)
                ],
                [
                    'name' => 'str_pad()',
                    'desc' => 'Menambah padding',
                    'code' => 'str_pad("123", 6, "0", STR_PAD_LEFT)',
                    'result' => str_pad("123", 6, "0", STR_PAD_LEFT)
                ]
            ];
            
            foreach ($functions as $func) {
                echo "<div class='function-card'>";
                echo "<div class='function-title'>" . $func['name'] . "</div>";
                echo "<p><small>" . $func['desc'] . "</small></p>";
                echo "<code>" . htmlspecialchars($func['code']) . "</code>";
                echo "<div class='demo-box'>";
                echo "<strong>Hasil:</strong> ";
                echo "<span class='output-text'>" . $func['result'] . "</span>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        
        <h2>📊 Tabel Referensi Cepat Fungsi String:</h2>
        <table>
            <tr>
                <th>Fungsi</th>
                <th>Sintaks</th>
                <th>Contoh</th>
                <th>Hasil</th>
            </tr>
            <tr><td>strlen</td><td>strlen($str)</td><td>strlen("Hello")</td><td>5</td></tr>
            <tr><td>strtoupper</td><td>strtoupper($str)</td><td>strtoupper("hello")</td><td>HELLO</td></tr>
            <tr><td>strtolower</td><td>strtolower($str)</td><td>strtolower("HELLO")</td><td>hello</td></tr>
            <tr><td>ucfirst</td><td>ucfirst($str)</td><td>ucfirst("hello world")</td><td>Hello world</td></tr>
            <tr><td>ucwords</td><td>ucwords($str)</td><td>ucwords("hello world")</td><td>Hello World</td></tr>
            <tr><td>trim</td><td>trim($str)</td><td>trim(" hello ")</td><td>"hello"</td></tr>
            <tr><td>substr</td><td>substr($str, start, length)</td><td>substr("Hello", 1, 3)</td><td>"ell"</td></tr>
            <tr><td>strpos</td><td>strpos($str, $find)</td><td>strpos("Hello", "e")</td><td>1</td></tr>
            <tr><td>str_replace</td><td>str_replace($search, $replace, $str)</td><td>str_replace("a", "o", "bala")</td><td>"bolo"</td></tr>
            <tr><td>strrev</td><td>strrev($str)</td><td>strrev("Hello")</td><td>"olleH"</td></tr>
            <tr><td>explode</td><td>explode($delimiter, $str)</td><td>explode(" ", "A B C")</td><td>["A","B","C"]</td></tr>
            <tr><td>implode</td><td>implode($glue, $array)</td><td>implode("-", ["A","B"])</td><td>"A-B"</td></tr>
        </table>
    </div>
</body>
</html>