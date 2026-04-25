<?php
/****************************************************
 * Halaman ini merupakan halaman logout, 
 * dimana kita menghapus session yang ada.
 ****************************************************/
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <style>
        body {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 14px;
            margin: 50px;
            background-color: #f5f5f5;
        }
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #f44336;
        }
        .info {
            background-color: #ffebee;
            border-left: 4px solid #f44336;
            padding: 15px;
            margin: 20px 0;
        }
        a {
            color: #2196F3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn-login {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }
        .btn-login:hover {
            background-color: #45a049;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_SESSION['login'])) {
            $username = $_SESSION['login'];
            
            // Hapus semua session
            unset($_SESSION);
            session_destroy();
            ?>
            
            <h1>✅ Anda Sudah Berhasil LOGOUT</h1>
            
            <div class="info">
                <b>👋 Sampai jumpa, <?php echo $username; ?>!</b><br>
                Session Anda telah dihapus dari server.
            </div>
            
            <p>Klik tombol di bawah ini untuk LOGIN kembali:</p>
            <a href="Pert14_Latihan1_Login.php" class="btn-login">🔐 LOGIN Kembali</a>
            
            <br><br>
            <p><i>Anda sekarang tidak bisa masuk ke halaman <a href="Pert14_Latihan2_Profil.php">Profil</a> lagi.</i></p>
            
            <?php
        } else {
            // Jika tidak ada session (mungkin sudah logout sebelumnya)
            ?>
            
            <h1>ℹ️ Anda Sudah Logout</h1>
            <p>Tidak ada session aktif saat ini.</p>
            <br>
            <a href="Pert14_Latihan1_Login.php" class="btn-login">🔐 LOGIN</a>
            
            <?php
        }
        ?>
    </div>
</body>
</html>