<?php
// 1. ATUR TIMEZONE (Sangat penting agar getdate() mengambil waktu lokal yang benar)
date_default_timezone_set('Asia/Jakarta'); 

// 2. Ambil data waktu dalam bentuk array
$sekarang = getdate();

// Ekstraksi nilai untuk mempermudah penulisan
$bulan     = $sekarang['month'];
$hari      = $sekarang['mday'];
$tahun     = $sekarang['year'];
$jam       = $sekarang['hours'];
$menit     = $sekarang['minutes'];
$detik     = $sekarang['seconds'];
$namaHari  = $sekarang['weekday'];

// 3. Logika Sapaan yang lebih akurat
$sapaan = "";
$icon   = "";
$class  = "";

if ($jam >= 5 && $jam < 11) {
    $sapaan = "Selamat Pagi";
    $icon   = "🌅";
    $class  = "morning";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat Siang";
    $icon   = "☀️";
    $class  = "afternoon";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat Sore";
    $icon   = "🌆";
    $class  = "evening";
} else {
    $sapaan = "Selamat Malam";
    $icon   = "🌙";
    $class  = "night";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5 - Fungsi getdate() Terkalibrasi</title>
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
            max-width: 800px;
            margin: 30px;
            width: 100%;
        }
        .greeting-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            text-align: center;
        }
        .greeting h1 {
            font-size: 50px;
            margin: 10px 0;
        }
        /* Pewarnaan Dinamis */
        .morning { color: #f39c12; }
        .afternoon { color: #e67e22; }
        .evening { color: #d53f8c; }
        .night { color: #2c3e50; }
        
        .welcome h2 {
            font-size: 24px;
            color: #718096;
            margin-bottom: 20px;
            font-weight: 400;
        }
        .date-info {
            background: #fef5e7;
            padding: 20px;
            border-radius: 15px;
            border-left: 5px solid #f5576c;
        }
        .time-icon { font-size: 80px; }
        
        .detail-box {
            margin-top: 30px;
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 14px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #edf2f7;
        }
        th {
            background-color: #f5576c;
            color: white;
            text-align: left;
        }
        .array-display {
            background: #1a202c;
            color: #68d391;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-size: 12px;
            margin-bottom: 20px;
        }
        code {
            background-color: #edf2f7;
            color: #e53e3e;
            padding: 2px 6px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="greeting-card">
            <div class="time-icon"><?php echo $icon; ?></div>
            <div class="greeting <?php echo $class; ?>">
                <h1><?php echo $sapaan; ?></h1>
            </div>
            <div class="welcome">
                <h2>Selamat Datang di Sistem Kami</h2>
            </div>

            <div class="date-info">
                <h3 style="margin:0; color:#2d3748;">
                    📅 <?php echo "$namaHari, $hari $bulan $tahun"; ?>
                </h3>
                <p style="font-size:28px; font-weight:bold; color:#f5576c; margin:10px 0;">
                    <?php echo str_pad($jam, 2, '0', STR_PAD_LEFT) . ":" . 
                               str_pad($menit, 2, '0', STR_PAD_LEFT) . ":" . 
                               str_pad($detik, 2, '0', STR_PAD_LEFT); ?>
                </p>
            </div>
            
            <div class="detail-box">
                <h3>📊 Debugging Array <code>getdate()</code>:</h3>
                <div class="array-display">
                    <pre style="margin:0;"><?php print_r($sekarang); ?></pre>
                </div>
                
                <h3>📋 Penjelasan Data:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Key Array</th>
                            <th>Nilai Saat Ini</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><code>'seconds'</code></td><td><?php echo $sekarang['seconds']; ?></td><td>Detik (0-59)</td></tr>
                        <tr><td><code>'minutes'</code></td><td><?php echo $sekarang['minutes']; ?></td><td>Menit (0-59)</td></tr>
                        <tr><td><code>'hours'</code></td><td><?php echo $sekarang['hours']; ?></td><td>Jam (format 24 jam)</td></tr>
                        <tr><td><code>'mday'</code></td><td><?php echo $sekarang['mday']; ?></td><td>Hari dalam sebulan</td></tr>
                        <tr><td><code>'weekday'</code></td><td><?php echo $sekarang['weekday']; ?></td><td>Nama hari (Inggris)</td></tr>
                        <tr><td><code>'month'</code></td><td><?php echo $sekarang['month']; ?></td><td>Nama bulan (Inggris)</td></tr>
                        <tr><td><code>0</code></td><td><?php echo $sekarang[0]; ?></td><td>Unix Timestamp</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>