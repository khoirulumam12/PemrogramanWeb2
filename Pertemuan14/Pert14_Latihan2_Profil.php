<?php
/****************************************************
 * Halaman ini merupakan contoh pemeriksaan session.
 * Hanya bisa diakses jika user sudah login.
 ****************************************************/
session_start();

// Pemeriksaan session
if (isset($_SESSION['login'])) {
    // Jika sudah login, tampilkan isi session
    $username = $_SESSION['login'];
    $waktu = $_SESSION['waktu_login'];
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Halaman Profil</title>
        <style>
            body {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 14px;
                margin: 50px;
                background-color: #f5f5f5;
            }
            .container {
                width: 600px;
                margin: 0 auto;
                padding: 30px;
                background: white;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            h1 {
                color: #4CAF50;
            }
            .user-info {
                background-color: #e7f3fe;
                border-left: 4px solid #2196F3;
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
            .btn-logout {
                display: inline-block;
                padding: 10px 20px;
                background-color: #f44336;
                color: white;
                border-radius: 4px;
                text-decoration: none;
            }
            .btn-logout:hover {
                background-color: #da190b;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>👤 Selamat Datang, <?php echo $username; ?>!</h1>
            
            <div class="user-info">
                <b>📋 Informasi Session:</b><br>
                Username: <b><?php echo $username; ?></b><br>
                Waktu Login: <b><?php echo $waktu; ?></b>
            </div>
            
            <h2>🔒 Halaman Ini Hanya Bisa Diakses Jika Anda Sudah Login</h2>
            <p>Ini adalah halaman profil yang dilindungi oleh session. Hanya user yang sudah login yang dapat melihat halaman ini.</p>
            
            <br>
            <a href="Pert14_Latihan3_Logout.php" class="btn-logout">🚪 LOGOUT</a>
            <br><br>
            <a href="Pert14_Latihan1_Login.php">⬅️ Kembali ke Halaman Login</a>
        </div>
    </body>
    </html>
    
    <?php
} else {
    // Session belum ada artinya belum login
    die("
        <!DOCTYPE html>
        <html>
        <head>
            <title>Akses Ditolak</title>
            <style>
                body { font-family: Verdana; margin: 50px; background: #f5f5f5; }
                .error-box { 
                    width: 500px; margin: 0 auto; padding: 30px; 
                    background: white; border-radius: 8px; 
                    box-shadow: 0 0 10px rgba(0,0,0,0.1); 
                    border-left: 5px solid #f44336;
                }
                a { color: #2196F3; }
            </style>
        </head>
        <body>
            <div class='error-box'>
                <h2 style='color: #f44336;'>⛔ Akses Ditolak!</h2>
                <p>Anda belum login! Anda tidak berhak masuk ke halaman ini.</p>
                <p>Silahkan login <a href='Pert14_Latihan1_Login.php'>di sini</a></p>
            </div>
        </body>
        </html>
    ");
}
?>