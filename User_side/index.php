<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Acadamic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/u_logo.png" rel="icon">
  <link href="assets/img/u_logo.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body style="background-color:skyblue;">

  <main>
    <div class="container">

        <!-- Outer Row -->
        <section class="row justify-content-center mt-5">

            <div class="col-xl-8 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none mt-3 d-lg-block bg-password-image">
                                <img src="assets/img/student_Login.png" width="400px" height="400px">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class=" pb-3">
                                        <h5 class="card-title text-center pb-0 fs-4"> Student Login </h5>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate action="login_check.php" method="POST">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="txt_name" class="form-control" id="yourUsername" required autocomplete="off">
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                          <label for="yourPassword" class="form-label">Password</label>
                                          <input type="password" maxlength="12" minlength="8" name="txt_pass" class="form-control" id="yourPassword" required autocomplete="off">
                                          <div class="invalid-feedback">Please enter your password!</div>
                                        </div> 
                                        <div class="col-12 mt-4">
                                          <button style="submit" class="btn btn-primary w-100" value="Login" name="sub">Login</button>
                                        </div>
                                        <div class="col-12 mt-4">
                                          <p class="small mb-0">Don't have account? <a href="student_register.php">Registra an Student</a>
                                          </p>
                                        </div>
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </div>
</main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>