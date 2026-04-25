<?php
/****************************************************
 * Halaman ini merupakan contoh penciptaan session.
 * Perintah session_start() harus ditaruh di perintah 
 * pertama tanpa spasi di depannya.
 *****************************************************/
session_start();

// 1. SET TIMEZONE (Wajib agar waktu login akurat)
date_default_timezone_set('Asia/Jakarta'); 

// Jika user sudah login, redirect ke halaman profil
if (isset($_SESSION['login'])) {
    header("Location: Pert14_Latihan2_Profil.php");
    exit;
}

// Proses login ketika form disubmit
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    // Periksa login (username & password hardcoded untuk contoh)
    if ($user == "arul" && $pass == "123") {
        // Menciptakan session
        $_SESSION['login'] = $user;
        
        // 2. PERBAIKAN: Simpan Tanggal & Jam Lengkap agar informasi lebih informatif
        // Menggunakan format H:i:s (24 jam)
        $_SESSION['waktu_login'] = date("d-m-Y | H:i:s");
        
        // Menuju ke halaman pemeriksaan session
        // Kita gunakan styling yang sama dengan box login agar konsisten
        echo "<body style='font-family: Verdana; background-color: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh;'>";
        echo "<div style='background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); text-align: center;'>";
        echo "<h1 style='color: #4CAF50;'>✅ Login Berhasil!</h1>";
        echo "<h2>Selamat datang, <b style='color: #2196F3;'>$user</b></h2>";
        echo "<hr>";
        echo "<p style='font-size: 16px;'>⏰ <b>Waktu Login:</b> " . $_SESSION['waktu_login'] . "</p>";
        echo "<p>Halaman akan dialihkan dalam 3 detik...</p>";
        echo "<p>Atau klik <a href='Pert14_Latihan2_Profil.php' style='color: #4CAF50; text-decoration: none; font-weight: bold;'>di sini</a> untuk lanjut.</p>";
        echo "</div>";
        echo "</body>";
        
        // Redirect otomatis setelah 3 detik
        header("refresh:3; url=Pert14_Latihan2_Profil.php");
        exit;
    } else {
        $error = "❌ Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Here...</title>
    <style>
        body {
            font-family: 'Segoe UI', Verdana, Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
        }
        .login-box {
            width: 350px;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #1c1e21;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #606770;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            box-sizing: border-box; /* Agar padding tidak merusak lebar */
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #1877f2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #166fe5;
        }
        .error {
            background-color: #ffebe8;
            border: 1px solid #dd3c10;
            color: #dd3c10;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin-bottom: 15px;
            font-size: 13px;
        }
        .info {
            background-color: #f0f2f5;
            padding: 10px;
            margin-top: 20px;
            border-radius: 6px;
            font-size: 11px;
            color: #65676b;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>🔐 Login Member</h2>
        
        <?php if (isset($error)) { echo "<div class='error'>$error</div>"; } ?>
        
        <form action="" method="post">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="user" placeholder="Username" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Password" required>
            </div>
            <input type="submit" name="Login" value="Masuk Sekarang">
        </form>
        
        <div class="info">
            <b>Demo Login:</b> arul / 123<br>
            Waktu Server: <?php echo date("H:i:s"); ?>
        </div>
    </div>
</body>
</html>