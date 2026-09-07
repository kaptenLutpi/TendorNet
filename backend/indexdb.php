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

        $tujuan = $_POST["tujuan"];
        
        if($tujuan == "LOGIN"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $query_sql = "SELECT * FROM akun 
                                WHERE nama = '$username' AND password = '$password'";
            
            $result = mysqli_query($conn, $query_sql);

            if(mysqli_num_rows($result) > 0){
                echo "<script> 
                alert('Selamat datang $username!') ;
                document.location.href = '../frontend/home.php';
                </script>";
                    
            }else{
                echo "<script> 
                alert('Password atau Username Salah!!!') ;
                document.location.href = '../backend/login.php';
                </script>";
            }
    
        }else{
            $username = $_POST["nama"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $telepon = $_POST["telepon"];
            
            $query_sql = "INSERT INTO akun (nama, email, nomor_telepon, password) 
                                            VALUES ('$username', '$email', '$telepon', '$password')";

            if (mysqli_query($conn, $query_sql) > 0) {
                echo "<script> 
                alert('Selamat akun berhasil terdaftar atas nama : $username!') ;
                document.location.href = 'login.php';
                </script>";
            } else {
                echo "<script> 
                alert('Kolom tidak boleh kosong!!!') ;
                document.location.href = '../backend/register.php';
                </script>";
            }
        }
    }
    
    
    // tutup koneksi
    mysqli_close($conn);
?>