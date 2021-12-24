<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Aktivasi</title>
</head>

<body>
    <body>
  <div class="container" align="center">
    <br>
    <?php
    include "koneksi.php";
    $token = $_GET['t'];
    $sql_cek = mysqli_query($koneksi, "SELECT * FROM users WHERE token='" . $token . "' and aktif='0'");
    $jml_data = mysqli_num_rows($sql_cek);
    if ($jml_data > 0) {
      //update data users aktif
      mysqli_query($koneksi, "UPDATE users SET aktif='1' WHERE token='" . $token . "' and aktif='0'");
      echo '<div class="alert alert-success">
                        Akun anda sudah aktif, silahkan <a href="login.php">Login</a>
                        </div>';
    } else {
      //data tidak di temukan
      echo '<div class="alert alert-warning">
                        Invalid Token!
                        </div>';
    }
    ?>
  </div>
</body>
</body>

</html>