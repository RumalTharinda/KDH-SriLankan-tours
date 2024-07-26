<?php 
session_start();
include 'config.php';
include 'function.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Login - KDH Sri Lankan Tours</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= SYSTEM_PATH ?>img/icon1.jpg" rel="icon">
  <link href="<?= SYSTEM_PATH ?>img/icon1.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= SYSTEM_PATH ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= SYSTEM_PATH ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= SYSTEM_PATH ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= SYSTEM_PATH ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= SYSTEM_PATH ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= SYSTEM_PATH ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= SYSTEM_PATH ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= SYSTEM_PATH ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="<?= SYSTEM_PATH ?>index.php" class="logo d-flex align-items-center w-auto">
                  <img src="<?= SYSTEM_PATH ?>img/icon1.jpg" alt="food mart">
                  <span class="d-none d-lg-block">KDH Sri Lankan Tours</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                    
                    <?php
                                        extract($_POST);
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                            $UserName = dataclean($UserName);
                                            $Password = dataclean($Password);

                                            $message = array();

                                            if (empty($UserName)) {
                                                $message['err_username'] = "The User Name should not be blank...!";
                                            }
                                            if (empty($Password)) {
                                                $message['err_password'] = "The Password should not be blank...!";
                                            }

                                            if (empty($message)) {
                                                $Password = sha1($Password);
                                                $db = dbconn();
                                                $sql = "SELECT * FROM tbl_users WHERE tbl_users.user_name='$UserName' AND tbl_users.user_password='$Password'";
                                                $result = $db->query($sql);
                                                if ($result->num_rows > 0) {
                                                    $row = $result->fetch_assoc();
                                                    $_SESSION['USERID']=$row['user_id'];
                                                    $_SESSION['NAME']=$row['user_name'];
                                                    
                                                    header("Location:index.php");
                                                } else {
                                                    $message['err_invalid'] = "Invalid User Name  or Password...!";
                                                }
                                            }
                                        }
                                        ?>

                    
                    
                    
                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="UserName" class="form-control" id="yourUsername" required>
                        <div class="text-danger"><?= @$message['err_username'] ?></div>  <!-- error message -->
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="Password" class="form-control" id="yourPassword" required>
                      <div class="text-danger"><?= @$message['err_password'] ?></div>  <!-- error message -->
                      <div class="invalid-feedback">Please enter your password!</div>
                      
                    </div>

                    <div class="col-12">
                      <?=@$message['err_invalid']  ?>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://www.linkedin.com/in/rumal-nayanatha-0968a0186/?trk=opento_sprofile_details">Rumal tharinda Nayanatha</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= SYSTEM_PATH ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= SYSTEM_PATH ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= SYSTEM_PATH ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= SYSTEM_PATH ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= SYSTEM_PATH ?>assets/vendor/quill/quill.js"></script>
  <script src="<?= SYSTEM_PATH ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= SYSTEM_PATH ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= SYSTEM_PATH ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= SYSTEM_PATH ?>assets/js/main.js"></script>

</body>

</html>