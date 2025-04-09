<!--**********************************
    Nav header start
***********************************-->

<div class="nav-header text-center"> 
    <a href="<?php echo site_url('/'); ?>" class="brand-logo">
        <!-- Logo para pantallas grandes (MD o más) -->
        <img src="<?php echo base_url('public/assets/images/logo-full.png'); ?>" alt="Logo Grande" 
            class="d-none d-md-inline-block w-100">


        <!-- Logo para pantallas pequeñas y medianas -->
        <img src="<?php echo base_url('public/assets/images/logo2.png'); ?>" height="40" alt="Logo Pequeño" 
            class="d-inline-block d-md-none">
    </a>
    
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<!--**********************************
    Nav header end
***********************************-->