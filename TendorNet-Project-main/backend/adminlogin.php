<?php 
    /* nama server kita */
    $servername = "localhost";

    /* nama database kita */
    $database = "tendornet"; 

    /* nama user yang terdaftar pada database (default: root) */
    $username = "root";

    /* password yang terdaftar pada database (default : "") */ 
    $password = ""; 

    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);

    // mengecek koneksi
    if (!$conn) {
        die("Maaf koneksi anda gagal : " . mysqli_connect_error());
    }


    if(isset($_POST["tujuan"])){

        
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $query_sql = "SELECT * FROM pelanggan 
                                WHERE email= '$username' AND password = '$password'";
            
            $result = mysqli_query($conn, $query_sql);

            if(mysqli_num_rows($result) > 0){
                echo "<script> 
                alert('Selamat datang $username!') ;
                document.location.href = 'akun.php?id=1';
                </script>";
                    
            }else{
                echo "<script> 
                alert('Username ini tidak terdaftar') ;
                </script>";
            }
    
        
        
    }
    
    
    // tutup koneksi
    mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html>
    <head>



        <title>Login</title>
        <link rel="stylesheet" href="../frontend/css/loginstyle.css">
    </head>
    <body>
        <div class="container">
        <h1>Login</h1>
            <form method="POST" action="">

                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <button name="tujuan">Log In</button>

            </form>
        </div>
    </body>
</html>