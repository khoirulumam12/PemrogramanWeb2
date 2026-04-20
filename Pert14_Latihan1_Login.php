<?php
/****************************************************
 * Halaman ini merupakan contoh penciptaan session.
 * Perintah session_start() harus ditaruh di perintah 
 * pertama tanpa spasi di depannya.
 *****************************************************/
session_start();

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
        $_SESSION['waktu_login'] = date("H:i:s");
        
        // Menuju ke halaman pemeriksaan session
        echo "<h1>✅ Anda berhasil LOGIN</h1>";
        echo "<h2>Selamat datang, <b>$user</b>!</h2>";
        echo "<h3>⏰ Waktu login: " . $_SESSION['waktu_login'] . "</h3>";
        echo "<p>Klik <a href='Pert14_Latihan2_Profil.php'>di sini (Profil)</a> untuk menuju ke halaman pemeriksaan session.</p>";
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
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 14px;
            margin: 50px;
            background-color: #f5f5f5;
        }
        .login-box {
            width: 350px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
        }
        input[type="text"], input[type="password"] {
            width: 95%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
        .info {
            background-color: #e7f3fe;
            border-left: 4px solid #2196F3;
            padding: 10px;
            margin-top: 15px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>🔐 Login Here...</h2>
        
        <?php if (isset($error)) { echo "<div class='error'>$error</div>"; } ?>
        
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="user" placeholder="Masukkan username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pass" placeholder="Masukkan password" required></td>
                </tr>
                <tr>
                    <td colspan="3" style="padding-top: 15px;">
                        <input type="submit" name="Login" value="Log In">
                    </td>
                </tr>
            </table>
        </form>
        
        <div class="info">
            <b>📝 Info Login (contoh):</b><br>
            Username: <b>arul</b><br>
            Password: <b>123</b>
        </div>
    </div>
</body>
</html>