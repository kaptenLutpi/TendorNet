<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/loginstyle.css">
    </head>
    <body>
        <div class="container">
            <h1>Daftar</h1>
            <form method="POST" action="../backend/indexdb.php">

                <input type="hidden" name="tujuan" value="DAFTAR">

                <label>Username</label>
                <br>
                <input name="nama" type="text">
                <br>
                <label>Email</label>
                <br>
                <input name="email" type="text">
                <br>
                <label>Nomor Telepon</label>
                <br>
                <input name="telepon" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <button>Daftar</button>
                <p> Sudah punya akun?
                <a href="../backend/login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>
