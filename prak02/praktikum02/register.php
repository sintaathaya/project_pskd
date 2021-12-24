<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Halaman Registrasi</title>
</head>
<body>
    <div id="layoutAuthentication">
        <style type="text/css">
            #layoutAuthentication {
                background-image: url("r.png");
                background-size: cover;
            /
        </style>
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4 text-white">Daftar</h3>
                                </div>
                                <div class="card-body">
                                <?php
                                include "koneksi.php";
                                if (isset($_POST['daftar'])) {
                                  //ambil data dari form   
                                  $Username = $_POST['Username'];
                                  $Password = $_POST['Password'];
                                  $Password2 = $_POST['Password2'];
                                  $Nama = $_POST['Nama'];
                                  $Email = $_POST['Email'];
                                  $Alamat = $_POST['Alamat'];
                                  // Validasi kekuatan password
                                  $uppercase = preg_match('@[A-Z]@', $Password);
                                  $lowercase = preg_match('@[a-z]@', $Password);
                                  $number    = preg_match('@[0-9]@', $Password);
                                  $specialChars = preg_match('@[^\w]@', $Password);

                                  $user_cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='" . $Username . "'");
                                  $user = mysqli_num_rows($user_cek);
                                  if ($user > 0) {
                                    echo '<script>
                                          alert("Username sudah pernah terdaftar");
                                          document.location="register.php";
                                          </script>';
                                  } else {
                                    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) < 8) {
                                      echo 'Password setidaknya harus 8 karakter, harus memiliki huruf besar, huruf kecil, angka, dan spesial karakter.';
                                    } else {
                                      // echo 'Strong password. </br>';

                                      //buat token
                                      $token = hash('sha256', md5(date('Y-m-d')));
                                      //cek user terdaftar
                                      $sql_cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='" . $Email . "'");
                                      $r_cek = mysqli_num_rows($sql_cek);
                                      if ($Password !== $Password2) {
                                        echo "<script>
                                                alert('konfirmasi password tidak sesuai');
                                                </script>";
                                          } else {
                                            if ($r_cek > 0) {
                                              echo '<script>
                                              alert("Email sudah pernah terdaftar");
                                              document.location="register.php";
                                              </script>';
                                            } else {
                                          //jika data kosong maka insert ke tabel;
                                          //aktif =0 user belum aktif
                                          $insert = mysqli_query($koneksi, "INSERT INTO users(username,password,nama,email,alamat,token,aktif) VALUES('" . $Username . "','" . $Password . "','" . $Nama . "','" . $Email . "','" . $Alamat . "','" . $token . "','0')");
                                          //include kirim email
                                          include("kirimemail.php");

                                      if ($insert) {
                                            echo '<div class="alert alert-success">
                                                    Pendaftaran anda berhasil, silahkan cek email anda untuk aktivasi. 
                                                <a href="login.php">Login</a>
                                              </div>';
                                      }
                                            }
                                            return false;
                                          }
                                    }
                                  }
                                }
                                ?>
                                    <form method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Username" id="Username" type="text" />
                                            <label for="Username" class="form-label">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Password" id="Password" type="password" />
                                            <label for="Password" class="form-label">Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Password2" id="Password2" type="password" />
                                            <label for="Password2" class="form-label">Konfirmasi Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Nama" id="Nama" type="text" />
                                            <label for="Nama" class="form-label">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Email" id="Email" type="text" />
                                            <label for="Email" class="form-label">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Alamat" id="Alamat" type="text" />
                                                <label for="Alamat" class="form-label">Alamat</label>
                                        </div>
                                        <!-- <div class="form-floating mb-3"> -->
                                        <div class="d-grid gap-2 col-3 mx-auto">
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="daftar">Daftar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-dark mt-auto">
                <div class="container-fluid px-4 col-lg-2">
                    <div class="d-flex align-items-center">
                        <footer class="footer bg-black small text-center text-white-50">V3420072 - Sinta Athaya R.
                        </footer>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>