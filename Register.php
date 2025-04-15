<?php
include 'config.php';
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
    $cpassword = hash('sha256', $_POST['cpassword']); // Hash the input confirm password using SHA-256
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($db, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($db, $sql);
            if ($result) {
                echo "<script>alert('Selamat, pendaftaran berhasil!');
                window.location.href = 'index.php';</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Maaf, terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Ups, email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password tidak sesuai.')</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>

    
    <meta charset="utf-8" />
    <title>Register page | perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="home-btn"><a href="/" class="text-white router-link-active"><i
                            class="fas fa-home h2"></i></a></div>


                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a>
                                            <img src="assets/images/logo-lib.png" width="200" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">REGISTER</h5>
                                        <p class="text-muted">Get your free account now.</p>
                                    </div>


                                    <form class="form-horizontal" action="" method="POST">
                                    <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username"placeholder="Enter username">
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email" >        
                                        </div>
                

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password" >        
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="cpassword" placeholder="Enter password" > 
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" name="submit">Register</button>
                                        </div>

                                        
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the Library <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Already have an account ? <a href="index.php" class="fw-bold text-white"> Login </a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Meta. Crafted with <i class="mdi mdi-heart text-danger"></i> by Daffa Ramiro</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>