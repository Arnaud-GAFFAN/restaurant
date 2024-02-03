<?php
session_start();

try{
    $data_base = new PDO('mysql:host=localhost;dbname=restaurant_les_delices;', 'root', '');
} catch (Exception $e) {
    die('error: ' . $e);
}

if (isset($_POST['valider'])){
    $request = $data_base->prepare('select * from gerant where email=:email and password=:password');
    $request->execute(array('email' => $_POST['email'], 'password' => sha1($_POST['password'])));
    $data = $request->fetch();
    if ($data) {
        $_SESSION['admin'] = true;
        header('location: ./front-home.php');
    } else {
        echo "Mot de passe ou email erroné";
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd"/>
    <meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd"/>
    <meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd"/>
    <meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html"/>
    <meta name="format-detection" content="telephone=no">
    <title>Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="https://davur.dexignzone.com/xhtml/page-error-404.html"><img
                                                src="https://davur.dexignzone.com/xhtml/page-error-404.html" alt=""></a>
                                </div>
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox me-1">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="basic_checkbox_1">
                                                <label class="custom-control-label" for="basic_checkbox_1">Se souvenir
                                                    de moi</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="https://davur.dexignzone.com/xhtml/page-error-404.html">Mot de
                                                passe oublié</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block" name="valider">Sign Me In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>

</body>


<!-- Mirrored from davur.dexignzone.com/frontend/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:41:28 GMT -->
</html>


