<?php
session_start();
if (!empty($_SESSION['username'])):
?>

<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-4" href="">BCRYPT</a>
        <a class="navbar-brand ps-8 fs-6" href=""><?php  echo $_SESSION['email'];?></a>
        <!-- Navbar-->
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
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
                    <div class="row justify-content-center text-white">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 bg-dark">
                                <div class="card-header">
                                    <h2 class="text-center font-weight-light my-4 fs-4 text-white">Selamat Datang, <?php  echo $_SESSION['username'];?> !</h2>
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

<?php
else:
    header('location:index.php');
endif;
?>