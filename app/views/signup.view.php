<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= APP_NAME ?> :: <?= $title; ?></title>
    <meta content="" name="<?= APP_DESC; ?>">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= ROOT; ?>/assets/backend/img/favicon.png" rel="icon">
    <link href="<?= ROOT; ?>/assets/backend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= ROOT; ?>/assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ROOT; ?>/assets/backend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= ROOT; ?>/assets/backend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= ROOT; ?>/assets/backend/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= ROOT; ?>/assets/backend/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= ROOT; ?>/assets/backend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= ROOT; ?>/assets/backend/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= ROOT ?>/assets/backend/css/style.css" rel="stylesheet">

</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="<?= ROOT; ?>" class="logo d-flex align-items-center w-auto">
                                    <img src="<?= ROOT; ?>/assets/backend/img/logo.png" alt="">
                                    <span class="d-none d-lg-block"><?= APP_NAME ?></span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST">
                                        <div class="col-6 col-md-6 col-sm-12">
                                            <label for="firstname" class="form-label">FirstName</label>
                                            <input type="text" name="firstname" class="form-control" id="firstname" required1 value="<?= old('firstname') ?>">
                                            <div class="invalid-feedback">Please, enter your first name!</div>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-12">
                                            <label for="othernames" class="form-label">Other Names <span class="text-info">(optional)</span></label>
                                            <input type="text" name="othernames" class="form-control" id="othernames" required1 value="<?= old('othernames') ?>">
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-12">
                                            <label for="lastname" class="form-label">Lastname</label>
                                            <input type="text" name="lastname" class="form-control" id="lastname" required1 value="<?= old('lastname') ?>">
                                            <div class="invalid-feedback">Please, enter your Last name!</div>
                                        </div>

                                        <div class="col-6 col-md-6 col-sm-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username" class="form-control" id="yourUsername" required1 value="<?= old('username') ?>">
                                                <div class="invalid-feedback">Please choose a username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="email" required1 value="<?= old('email') ?>">
                                            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                        </div>


                                        <div class="col-6 col-md-6 col-sm-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required1>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-12">
                                            <label for="cpassword" class="form-label">Confirm password</label>
                                            <input type="password" name="cpassword" class="form-control" id="cpassword" required1>
                                            <div class="invalid-feedback">Please confirm your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value="1" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a href="<?= ROOT; ?>/login">Log in</a></p>
                                        </div>
                                    </form>

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
    <script src="<?= ROOT; ?>/assets/backend/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= ROOT; ?>/assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ROOT; ?>/assets/backend/vendor/chart.js/chart.min.js"></script>
    <script src="<?= ROOT; ?>/assets/backend/vendor/echarts/echarts.min.js"></script>
    <script src="<?= ROOT; ?>/assets/backend/vendor/quill/quill.min.js"></script>
    <script src="<?= ROOT; ?>/assets/backend/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= ROOT; ?>/assets/backend/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= ROOT; ?>/assets/backend/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>