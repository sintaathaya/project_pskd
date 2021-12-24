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
                                    <form action="ceklog.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="input100" type="text" name="username" placeholder="Username" onkeypress="return runScript(event)"/>
                                                <label for="username" class="form-label">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="password" type="password" />
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                        <!-- <div class="form-floating mb-3"> -->
                                            <div class="d-grid gap-2 col-3 mx-auto">
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="login" value="login">Submit</button>
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
    <script language="javascript" src="./mask.js"></script>
</body>
</html>