<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../frontend/css/loginstyle.css">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="POST" action="indexdb.php">

                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <button>Log In</button>
                
                <p> Belum punya akun?
                  <a href="../frontend/daftar.php">Daftar di sini</a>
                </p>
                <p> Khusus Admin 
                  <a href="adminlogin.php">klik di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>