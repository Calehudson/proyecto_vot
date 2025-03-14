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
    <title>Admin - Sistema de votación OT</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('public/assets/images/favicon.png'); ?>">
    <link href="<?php echo site_url('public/assets/css/style.css'); ?>" rel="stylesheet">
	
</head>


<body class="body  h-100" style="background-image: url('<?php echo base_url('public/assets/images/bg-1.jpg'); ?>'); background-size:cover;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-contain-center">
            <div class="col-xl-12 mt-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row m-0">
                            <div class="col-xl-6 col-md-6 sign text-center">
                                <div>
                                    <div class="text-center my-5">
                                        <a href="<?php echo site_url('/'); ?>"><img width="200" src="<?php echo base_url('public/assets/images/logo-full.png'); ?>" alt=""></a>
                                    </div>
                                    <img src="<?php echo base_url('public/assets/images/log.png'); ?>" class="education-img"></img>
                                </div>  
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="sign-in-your">
                                    <h4 class="fs-20 font-w800 text-black">Inicio de sesión</h4>
                                    <span>Bienvenido/a, ingresa tus credenciales para acceder a tu cuenta.<br></span>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong></strong></label>
                                            <input id="usuario" type="text" class="form-control" placeholder="Usuario">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong></strong></label>
                                            <input id="password" type="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Recordar</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="<?php echo site_url('page_forgot_password'); ?>">Olvidaste tu contraseña?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary btn-block" onclick="logea()">Ingresar</button>
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
<script src="<?php echo site_url('public/assets/js/custom.js'); ?>"></script>
<script src="<?php echo site_url('public/assets/js/dlabnav-init.js'); ?>"></script>
<script src="<?php echo site_url('public/assets/js/jlogin.js'); ?>"></script>
</body>
</html>