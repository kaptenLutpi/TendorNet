<?php 
  include 'konekdb.php';
  
  error_reporting(0);
  
  session_start();
  
  if (isset($_SESSION['username'])) {
      header("Location: index.php");
  }
  
  if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $telepon = $_POST['telepon'];
      $alamat = $_POST['alamat'];
      $password = md5($_POST['password']);
      
  
      if ($password == $password) {
          $sql = "SELECT * FROM akun WHERE email='$email'";
          $result = mysqli_query($conn, $sql);
          if (!$result->num_rows > 0) {
              $sql = "INSERT INTO akun (username, email, telepon, alamat, password)
                      VALUES ('$username', '$email', '$telepon', '$alamat', '$password')";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                  echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                  $username = "";
                  $email = "";
                  $telepon = "";
                  $alamat = "";
                  $_POST['password'] = "";
              } else {
                  echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
              }
          } else {
              echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
          }
          
      } else {
          echo "<script>alert('Password Tidak Sesuai')</script>";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <link rel="stylesheet" href="register.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <section
      class="vh-100 bg-image"
      style="
        background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
      "
    >
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div
            class="row d-flex justify-content-center align-items-center h-100"
          >
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">
                    Create an account
                  </h2>

                  <form>

                    <div class="form-outline mb-4">
                      <input
                        name="nama"
                        type="text"
                        id="form3Example1cg"
                        class="form-control form-control-lg"
                        placeholder="Nama"
                      />
                      <label class="form-label" for="form3Example1cg"></label>
                    </div>

                    <div class="form-outline mb-4">
                      <input
                        name="email"
                        type="text"
                        id="form3Example3cg"
                        class="form-control form-control-lg"
                        placeholder="Email"
                      />
                      <label class="form-label" for="form3Example3cg"></label>
                    </div>

                    <div class="form-outline mb-4">
                      <input
                        name="telepon"
                        type="text"
                        id="form3Example4cg"
                        class="form-control form-control-lg"
                        placeholder="No Telepon"
                      />
                      <label class="form-label" for="form3Example4cg"></label>
                    </div>

                    <div class="form-outline mb-4">
                      <input
                        name="password"
                        type="text"
                        id="form3Example4cdg"
                        class="form-control form-control-lg"
                        placeholder="Password"
                      />
                      <label class="form-label" for="form3Example4cdg"></label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button
                        name="submit"
                        type="button"
                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                      >
                        Register
                      </button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">
                      Have already an account?
                      <a href="login.php" class="fw-bold text-body"
                        ><u>Login here</u></a
                      >
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
