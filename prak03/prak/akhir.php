<html>
<head>
    <title>Form untuk Deskripsi</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

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
                                    <h3 class="text-center font-weight-light my-4 text-white">ENKRIPSI</h3>
                                </div>
                                <div class="card-body">
                                    <form action="dekCaesar.php" method="GET">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="key" type="text" maxlength="5"/>
                                                <label for="kata" class="form-label">Key</label>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit" value="kirim">Kirim</button>
                                            <button class="btn btn-dark" type="reset" value="ulangi">Ulangi</button>
                                        </div>
                                    </form>
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