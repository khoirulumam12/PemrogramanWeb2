<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4 - Fungsi date()</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            padding: 50px;
        }
        .clock-card {
            background: linear-gradient(135deg, #0f3460 0%, #1a1a2e 100%);
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            border: 2px solid #e94560;
        }
        .date-display {
            font-size: 60px;
            font-weight: bold;
            color: #00b4d8;
            text-shadow: 0 0 20px rgba(0,180,216,0.5);
            margin-bottom: 20px;
            font-family: 'Courier New', monospace;
        }
        .time-display {
            font-size: 80px;
            font-weight: bold;
            color: #e94560;
            text-shadow: 0 0 30px rgba(233,69,96,0.5);
            font-family: 'Courier New', monospace;
        }
        .label {
            color: #90e0ef;
            font-size: 18px;
            letter-spacing: 3px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .info-box {
            margin-top: 30px;
            padding: 20px;
            background: rgba(15,52,96,0.5);
            border-radius: 10px;
            color: #caf0f8;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            color: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #0f3460;
        }
        th {
            background-color: #e94560;
        }
        td {
            background-color: rgba(15,52,96,0.7);
        }
        code {
            background-color: #2d3748;
            color: #fbd38d;
            padding: 3px 8px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="clock-card">
            <div class="label">📅 Tanggal Sekarang</div>
            <div class="date-display">
                <font size="10">
                <?php
                echo "Sekarang tanggal ";
                echo date('d-F-Y');
                ?>
                </font>
            </div>
            <div class="label" style="margin-top: 30px;">⏰ Jam Sekarang</div>
            <div class="time-display">
                <font size="10">
                <?php
                echo "<br>dan jam ";
                echo date('h:i:s A');
                ?>
                </font>
            </div>
        </div>
        
        <div class="info-box">
            <h3>📊 Format date() yang Tersedia:</h3>
            <table>
                <tr>
                    <th>Format</th>
                    <th>Deskripsi</th>
                    <th>Contoh Hasil</th>
                </tr>
                <?php
                $formats = [
                    'd' => 'Tanggal (2 digit)',
                    'D' => 'Hari (3 huruf)',
                    'l' => 'Hari (lengkap)',
                    'F' => 'Bulan (lengkap)',
                    'M' => 'Bulan (3 huruf)',
                    'm' => 'Bulan (2 digit)',
                    'Y' => 'Tahun (4 digit)',
                    'y' => 'Tahun (2 digit)',
                    'h' => 'Jam (12 jam)',
                    'H' => 'Jam (24 jam)',
                    'i' => 'Menit',
                    's' => 'Detik',
                    'A' => 'AM/PM'
                ];
                
                foreach ($formats as $format => $desc) {
                    echo "<tr>";
                    echo "<td><code>$format</code></td>";
                    echo "<td>$desc</td>";
                    echo "<td>" . date($format) . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            
            <h3 style="margin-top:20px;">📅 Contoh Kombinasi Format:</h3>
            <table>
                <tr>
                    <th>Format</th>
                    <th>Hasil</th>
                </tr>
                <?php
                $combinations = [
                    'd-m-Y' => date('d-m-Y'),
                    'd/M/Y' => date('d/M/Y'),
                    'l, d F Y' => date('l, d F Y'),
                    'D, d M Y' => date('D, d M Y'),
                    'H:i:s' => date('H:i:s'),
                    'h:i A' => date('h:i A'),
                    'l, d F Y - h:i A' => date('l, d F Y - h:i A'),
                    'Y-m-d H:i:s' => date('Y-m-d H:i:s')
                ];
                
                foreach ($combinations as $format => $result) {
                    echo "<tr>";
                    echo "<td><code>'$format'</code></td>";
                    echo "<td><strong>$result</strong></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>