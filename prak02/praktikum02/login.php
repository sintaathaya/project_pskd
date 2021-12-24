<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Halaman Login</title>
</head>
<body>
    <div id="layoutAuthentication">
        <style type="text/css">
            #layoutAuthentication {
                background-image: url("r.png");
                background-size: cover;
            }
        </style>
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4 text-white">Login</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    session_start();
                                    //jika sudah login maka akan dialihkan ke home
                                    if (!empty($_SESSION['login'])) {
                                        header("Location:index.php");
                                    }
                                    include "koneksi.php";
                                    if (isset($_POST['login'])) {
                                      $Username = $_POST['Username'];
                                      $Password = $_POST['Password'];
                                      //cek user terdaftar dan aktif
                                      $sql_cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='" . $Username . "' AND password='" . $Password . "' AND aktif='1'") or die(mysqli_error($koneksi));
                                      $r_cek = mysqli_fetch_array($sql_cek);
                                      $jml_data = mysqli_num_rows($sql_cek);
                                      if ($jml_data > 0) {
                                        //buat session login dan redirect ke halaman utama
                                        $_SESSION['login'] = md5($r_cek['username']);
                                        $_SESSION['username'] = $r_cek['username'];
                                        $_SESSION['nama'] = $r_cek['nama'];
                                        header("Location:index.php");
                                      } else {
                                        //data tidak di temukan
                                        echo '<div class="alert alert-warning">
                                            Username dan Password anda salah!
                                            </div>';
                                      }
                                    }

                                    ?>
                                    <form method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Username" id="Username" type="textarea" />
                                                <label for="Username" class="form-label">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="Password" id="Password" type="password" />
                                            <label for="Password" class="form-label">Password</label>
                                        </div>
                                        <!-- <div class="form-floating mb-3"> -->
                                        <div class="d-grid gap-2 col-3 mx-auto">
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="login" value="login">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="card-footer text-center text-white py-3">
                                        <a href="register.php" div class="text-reset">Need an account? Sign up!</a>
                                    </div>
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