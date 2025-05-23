<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="GetSkills  : Online Learning Codeigniter Admin Dashboard" />
	<meta property="og:title" content="GetSkills  : Online Learning Codeigniter Admin Dashboard" />
	<meta property="og:description" content="GetSkills  : Online Learning Codeigniter Admin Dashboard" />
	<meta property="og:image" content="https://getskills.dexignzone.com/codeigniter/social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>GetSkills  : Online Learning Codeigniter Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/assets/images/favicon.png'); ?>">
    <link href="<?php echo site_url('public/assets/css/style.css'); ?>" rel="stylesheet">
	
</head>


<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="<?php echo site_url('/'); ?>"><img src="<?php echo base_url('public/assets/images/logo-full.png'); ?>" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="<?php echo site_url('/'); ?>">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="<?php echo site_url('page_login'); ?>">Sign in</a></p>
                                    </div>
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
<script src="<?php echo site_url('public/assets/vendor/global/global.min.js'); ?>"></script>
<script src="<?php echo site_url('public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js'); ?>"></script>
<script src="<?php echo site_url('public/assets/js/dlabnav-init.js'); ?>"></script>
<script src="<?php echo site_url('public/assets/js/custom.js'); ?>"></script>
</body>
</html>