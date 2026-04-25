<?php
// 1. SET TIMEZONE (Wajib agar waktu akurat sesuai lokasi kamu)
// Gunakan 'Asia/Jakarta', 'Asia/Makassar', atau 'Asia/Jayapura'
date_default_timezone_set('Asia/Jakarta');
?>

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
            max-width: 800px;
        }
        .clock-card {
            background: linear-gradient(135deg, #0f3460 0%, #1a1a2e 100%);
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            border: 2px solid #e94560;
        }
        /* Perbaikan: Mengatur ukuran font di CSS, bukan di tag <font> */
        .date-display {
            font-size: 2.5rem; /* Ukuran responsif */
            font-weight: bold;
            color: #00b4d8;
            text-shadow: 0 0 20px rgba(0,180,216,0.5);
            margin-bottom: 20px;
            font-family: 'Courier New', monospace;
        }
        .time-display {
            font-size: 4rem;
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
            text-align: left;
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
                <?php echo date('d F Y'); ?>
            </div>
            
            <div class="label" style="margin-top: 30px;">⏰ Jam Sekarang</div>
            <div class="time-display">
                <?php echo date('H:i:s'); ?> <div style="font-size: 20px; color: #90e0ef;"><?php echo date('A'); ?></div>
            </div>
        </div>
        
        <div class="info-box">
            <h3>📊 Ringkasan Format PHP:</h3>
            <table>
                <tr>
                    <th>Format</th>
                    <th>Deskripsi</th>
                    <th>Hasil</th>
                </tr>
                <?php
                $formats = [
                    'l, d F Y' => 'Format Lengkap',
                    'H:i:s'    => '24 Jam (Military)',
                    'h:i:s A'  => '12 Jam (AM/PM)',
                    'd/m/y'    => 'Singkat'
                ];
                
                foreach ($formats as $f => $desc) {
                    echo "<tr>
                            <td><code>$f</code></td>
                            <td>$desc</td>
                            <td>" . date($f) . "</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>