<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Halaman Login</title>
    <title>Hash MD 5</title>
</head>
<?php
$string = "";
$code = "";
$string2 = "";
$code2 = "";
if (isset($_POST['kirim'])) {
    $string = $_POST['kata'];
    $code = md5($string);
    $string2 = $_POST['kata2'];
    $code2 = md5($string2);
}
?>

<body>
    <div id="layoutAuthentication">
        <style type="text/css">
            #layoutAuthentication {
                background-image: url("r.jpg");
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
                                    <h3 class="text-center font-weight-light my-4 text-white">Hash MD 5</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="kata" value="kata" id="kata" ><?= $string; ?></textarea>
                                                <label for="Plaintext" class="form-label">Masukkan Teks 1</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="kata2" value="kata2" id="kata2" ><?= $string2; ?></textarea>
                                                <label for="Plaintext" class="form-label">Masukkan Teks 2</label>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit" name="kirim" value="kirim">Enkrip</button>
                                            <button class="btn btn-dark" type="reset" value="ulangi">Ulangi</button>
                                        </div>
                                    </form>
                                    <br> <br>
                                        <div class="form-floating mb-3">
                                            <text class="form-control" name="text" id="text" type="text"><?= $code; ?></text>
                                                <label for="Plaintext" class="form-label">Hasil 1</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <text class="form-control" name="text" id="text" type="text"><?= $code2; ?></text>
                                                <label for="Plaintext" class="form-label">Hasil 2</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
  </div>
</body> 
</html>