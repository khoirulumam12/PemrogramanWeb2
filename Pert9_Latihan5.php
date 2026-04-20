<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5 - Fungsi getdate()</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 900px;
            margin: 30px;
        }
        .greeting-card {
            background: white;
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            text-align: center;
        }
        .greeting {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .morning { color: #f39c12; }
        .afternoon { color: #e67e22; }
        .evening { color: #8e44ad; }
        .night { color: #2c3e50; }
        
        .welcome {
            font-size: 30px;
            color: #d53f8c;
            margin-bottom: 20px;
        }
        .date-info {
            font-size: 24px;
            color: #4a5568;
            background: #fef5e7;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .time-icon {
            font-size: 80px;
            margin-bottom: 20px;
        }
        .detail-box {
            margin-top: 30px;
            padding: 20px;
            background: #f7fafc;
            border-radius: 10px;
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }
        th {
            background-color: #d53f8c;
            color: white;
        }
        tr:hover {
            background-color: #fff5f5;
        }
        code {
            background-color: #2d3748;
            color: #fbd38d;
            padding: 3px 8px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
        }
        .array-display {
            background: #1a202c;
            color: #68d391;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="greeting-card">
            <?php
            $sekarang = getdate();
            
            // Ambil nilai dari array getdate()
            $bulan = $sekarang['month'];
            $hari = $sekarang['mday'];
            $tahun = $sekarang['year'];
            $jam = $sekarang['hours'];
            $menit = $sekarang['minutes'];
            $detik = $sekarang['seconds'];
            $namaHari = $sekarang['weekday'];
            
            // Tentukan sapaan berdasarkan jam
            $sapaan = "";
            $icon = "";
            $class = "";
            
            if ($jam <= 11) {
                $sapaan = "Selamat Pagi";
                $icon = "🌅";
                $class = "morning";
            } elseif ($jam > 11 && $jam <= 15) {
                $sapaan = "Selamat Siang";
                $icon = "☀️";
                $class = "afternoon";
            } elseif ($jam > 15 && $jam <= 18) {
                $sapaan = "Selamat Sore";
                $icon = "🌆";
                $class = "evening";
            } elseif ($jam > 18) {
                $sapaan = "Selamat Malam";
                $icon = "🌙";
                $class = "night";
            }
            ?>
            
            <div class="time-icon"><?php echo $icon; ?></div>
            <div class="greeting <?php echo $class; ?>">
                <h1><?php echo $sapaan; ?></h1>
            </div>
            <div class="welcome">
                <h2>Selamat Datang</h2>
            </div>
            <div class="date-info">
                <h3>Sekarang adalah tanggal <?php echo "$hari $bulan $tahun"; ?></h3>
                <p style="font-size:18px; color:#718096;">
                    <?php echo "$namaHari, $jam:" . str_pad($menit, 2, '0', STR_PAD_LEFT) . ":" . str_pad($detik, 2, '0', STR_PAD_LEFT); ?>
                </p>
            </div>
            
            <div class="detail-box">
                <h3>📊 Isi Array getdate():</h3>
                <div class="array-display">
                    <?php
                    echo "<pre style='margin:0; color:#68d391;'>";
                    print_r($sekarang);
                    echo "</pre>";
                    ?>
                </div>
                
                <h3 style="margin-top:20px;">📋 Elemen Array getdate():</h3>
                <table>
                    <tr>
                        <th>Key</th>
                        <th>Nilai</th>
                        <th>Deskripsi</th>
                    </tr>
                    <?php
                    $descriptions = [
                        'seconds' => 'Detik',
                        'minutes' => 'Menit',
                        'hours' => 'Jam (24 jam)',
                        'mday' => 'Tanggal dalam bulan',
                        'wday' => 'Hari dalam minggu (0=Minggu)',
                        'mon' => 'Bulan (numerik)',
                        'year' => 'Tahun',
                        'yday' => 'Hari dalam tahun',
                        'weekday' => 'Nama hari',
                        'month' => 'Nama bulan',
                        0 => 'Timestamp Unix'
                    ];
                    
                    foreach ($sekarang as $key => $value) {
                        $desc = isset($descriptions[$key]) ? $descriptions[$key] : '-';
                        echo "<tr>";
                        echo "<td><code>'$key'</code></td>";
                        echo "<td><strong>$value</strong></td>";
                        echo "<td>$desc</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                
                <h3 style="margin-top:20px;">⏰ Informasi Waktu Lengkap:</h3>
                <table>
                    <tr><td>Timestamp Unix:</td><td><code><?php echo $sekarang[0]; ?></code></td></tr>
                    <tr><td>Hari ke-<?php echo $sekarang['yday']; ?> dalam tahun <?php echo $tahun; ?></td></tr>
                    <tr><td>Hari ke-<?php echo $sekarang['wday']; ?> dalam minggu ini</td></tr>
                    <tr><td>Format Lengkap:</td><td><?php echo date('l, d F Y H:i:s'); ?></td></tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>