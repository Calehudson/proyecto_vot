<?php 

	$router     	= service('router');
    $action     	= class_basename($router->controllerName()).'_'.$router->methodName();	
	$globalCss  	= config('DzConfig')->dzAssets['public']['global']['css'];
    $pageLevelCss 	= config('DzConfig')->dzAssets['public']['pagelevel']['css'][$action];
    $globalJs  		= config('DzConfig')->dzAssets['public']['global']['js'];
    $pageLevelJs 	= config('DzConfig')->dzAssets['public']['pagelevel']['js'][$action];

?>
<!DOCTYPE html>
<html lang="en">

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
    <title>Sistema de votación OT</title>
    <!-- Favicon icon -->
	
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('public/assets/images/favicon.png'); ?>">	
	
	<?php foreach($pageLevelCss as $css){ ?>	
		 <link href="<?php echo base_url($css) ?>" rel="stylesheet" type="text/css"/>	
	<?php } ?>
	<?php foreach($globalCss as $css){ ?>	
		 <link href="<?php echo base_url($css) ?>" rel="stylesheet" type="text/css"/>	
	<?php } ?>
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
	
	<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
    	<?php if($action == 'GetSkillsAdmin_index' || $action == 'GetSkillsAdmin_index_2'){ ?>
	    	<div class="ellipse">
				<svg class="green-line" width="669" height="487" viewBox="0 0 669 487" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M237.231 -68.6319V-68.6021L237.233 -68.5724C240.62 -11.7125 250.024 41.8582 269.813 81.245C289.627 120.683 319.922 146 365 146C385.587 146 411.761 133.509 439.623 113.32C467.532 93.0977 497.301 65.0267 525.114 33.5967C552.929 2.16452 578.809 -32.6519 598.929 -66.3803C619.03 -100.077 633.422 -132.754 638.209 -159.92C641.588 -173.074 642.414 -182.818 640.908 -189.917C639.382 -197.111 635.464 -201.562 629.562 -204.027C623.75 -206.455 616.074 -206.932 607.015 -206.43C598.241 -205.944 588.029 -204.527 576.749 -202.962L575.574 -202.799C528.514 -196.273 462.757 -187.599 400.301 -230.953C363.87 -256.242 335.385 -267.371 313.122 -267.543C290.75 -267.716 274.81 -256.826 263.567 -238.544C252.361 -220.322 245.792 -194.726 242.013 -165.305C238.231 -135.864 237.231 -102.487 237.231 -68.6319Z" stroke="url(#paint0_linear_1146_121)" stroke-opacity="0.2" stroke-width="2"/>
					<path d="M287.231 -67.4176V-67.3879L287.233 -67.3582C289.553 -28.4105 294.217 9.84134 306.007 38.3782C311.906 52.6574 319.615 64.5666 329.764 72.9092C339.931 81.2668 352.495 86 368 86C375.138 86 383.313 83.7364 392.143 79.7017C400.983 75.6628 410.535 69.8223 420.443 62.6034C440.259 48.1655 461.567 28.1615 481.528 5.85989C501.491 -16.4438 520.129 -41.0702 534.597 -64.767C549.044 -88.4293 559.379 -111.238 562.673 -129.918C564.991 -138.942 565.57 -145.674 564.523 -150.609C563.457 -155.638 560.702 -158.775 556.561 -160.504C552.509 -162.197 547.187 -162.52 540.969 -162.175C534.942 -161.841 527.931 -160.869 520.207 -159.797L519.394 -159.684C487.137 -155.211 442.184 -149.29 399.489 -178.927C374.503 -196.272 354.915 -203.942 339.561 -204.061C324.099 -204.18 313.08 -196.642 305.327 -184.036C297.612 -171.489 293.103 -153.893 290.511 -133.715C287.916 -113.517 287.231 -90.6247 287.231 -67.4176Z" stroke="url(#paint1_linear_1146_121)" stroke-opacity="0.2" stroke-width="2"/>
					<path d="M332.533 -59.8058V-59.776L332.535 -59.7463L332.561 -59.3074C333.782 -38.8127 335.056 -17.4149 340.066 -1.10762C342.592 7.11435 346.095 14.1385 351.098 19.115C356.131 24.1204 362.63 27 371 27C374.892 27 379.512 25.6578 384.58 23.3203C389.663 20.9759 395.271 17.5951 401.161 13.4356C412.942 5.11595 425.92 -6.37057 438.178 -19.0723C450.436 -31.7753 461.997 -45.7173 470.932 -58.9594C479.838 -72.158 486.203 -84.7593 487.978 -94.7885C489.212 -99.6027 489.418 -103.264 488.58 -105.974C487.709 -108.787 485.755 -110.446 483.07 -111.289C480.454 -112.109 477.117 -112.169 473.319 -111.873C469.69 -111.59 465.525 -110.971 461.007 -110.299C460.777 -110.265 460.547 -110.231 460.315 -110.197C441.081 -107.34 415.338 -103.772 392.855 -119.379C379.566 -128.603 369.074 -132.739 360.782 -132.803C352.383 -132.868 346.393 -128.756 342.208 -121.95C338.06 -115.205 335.656 -105.786 334.278 -95.0551C332.897 -84.3042 332.533 -72.1297 332.533 -59.8058Z" stroke="url(#paint2_linear_1146_121)" stroke-opacity="0.2" stroke-width="2"/>
					<path d="M714.469 -193.085L714.52 -193.184L714.548 -193.292C718.948 -210.237 720.013 -222.748 718.067 -231.833C716.102 -241.007 711.07 -246.658 703.492 -249.792C696.003 -252.89 686.083 -253.509 674.316 -252.863C662.922 -252.238 649.658 -250.416 634.987 -248.4L633.466 -248.191C572.289 -239.789 486.688 -228.599 405.386 -284.489C358.04 -317.036 321.07 -331.322 292.22 -331.542C263.264 -331.764 242.631 -317.817 228.057 -294.348C213.521 -270.94 204.987 -238.034 200.075 -200.168C195.161 -162.282 193.861 -119.324 193.861 -75.7413V-75.7112L193.863 -75.6812C198.264 -2.5202 207.565 70.3105 230.324 124.875C241.708 152.167 256.483 174.95 275.753 190.915C295.041 206.894 318.783 216 348 216C374.693 216 406.34 199.175 439.83 171.987C473.364 144.762 508.921 107.001 543.46 64.8156C612.54 -19.5574 677.647 -121.752 714.469 -193.085Z" stroke="url(#paint3_linear_1146_121)" stroke-opacity="0.2" stroke-width="2"/>
					<path d="M906.856 -268.482L906.907 -268.581L906.936 -268.689C913.93 -295.624 915.596 -315.423 912.529 -329.743C909.442 -344.152 901.565 -352.985 889.688 -357.898C877.901 -362.773 862.227 -363.766 843.522 -362.74C825.417 -361.747 804.332 -358.849 780.976 -355.64L778.569 -355.309C681.231 -341.942 544.808 -324.092 415.233 -413.166C339.93 -464.932 281.223 -487.584 235.495 -487.933C189.659 -488.283 157.005 -466.228 133.905 -429.029C110.842 -391.89 97.2761 -339.631 89.4644 -279.406C81.6501 -219.16 79.5816 -150.835 79.5815 -81.4937V-81.4637L79.5833 -81.4337C86.5855 34.9724 101.382 150.775 137.556 237.5C155.647 280.872 179.109 317.032 209.673 342.354C240.256 367.691 277.901 382.134 324.256 382.134C366.513 382.134 416.731 355.48 470.003 312.232C523.319 268.948 579.869 208.896 634.815 141.786C744.708 7.56412 848.284 -155.013 906.856 -268.482Z" stroke="url(#paint4_linear_1146_121)" stroke-opacity="0.2" stroke-width="2"/>
					<path d="M1039.25 -331.574L1039.3 -331.673L1039.33 -331.781C1048.11 -365.589 1050.19 -390.401 1046.35 -408.323C1042.49 -426.333 1032.66 -437.356 1017.82 -443.491C1003.08 -449.59 983.447 -450.841 959.968 -449.553C937.246 -448.306 910.781 -444.67 881.449 -440.639L878.434 -440.225C756.219 -423.441 584.831 -401.009 422.046 -512.912C327.51 -577.9 253.849 -606.308 196.508 -606.746C139.061 -607.185 98.1362 -579.551 69.1699 -532.906C40.2412 -486.321 23.2138 -420.748 13.4069 -345.14C3.59735 -269.512 1.00002 -183.735 1 -96.6728V-96.6427L1.0018 -96.6127C9.79359 49.5443 28.3705 194.909 73.773 303.76C96.4782 358.194 125.917 403.558 164.251 435.317C202.604 467.091 249.814 485.206 307.96 485.206C360.924 485.206 423.919 451.791 490.8 397.494C557.725 343.161 628.717 267.774 697.702 183.517C835.673 15.0012 965.715 -189.117 1039.25 -331.574Z" stroke="url(#paint5_linear_1146_121)" stroke-opacity="0.2" stroke-width="2"/>
					<path d="M777.519 -227.649L777.552 -227.724L777.571 -227.803C782.943 -249.496 784.23 -265.462 781.867 -277.025C779.488 -288.671 773.405 -295.844 764.206 -299.833C755.097 -303.784 743.01 -304.58 728.639 -303.753C714.726 -302.952 698.527 -300.619 680.599 -298.036L678.745 -297.768C604.007 -287.007 499.36 -272.656 399.96 -344.302C342.131 -385.984 297.002 -404.26 261.807 -404.542C226.497 -404.824 201.356 -386.999 183.595 -357.01C165.868 -327.078 155.449 -284.979 149.451 -236.488C143.45 -187.977 141.861 -132.964 141.861 -77.1375V-77.1089L141.863 -77.0803C147.239 16.6307 158.111 109.056 185.407 178.077C199.059 212.596 216.843 241.327 240.165 261.434C263.507 281.558 292.347 293 328 293C346.517 293 368.215 285.663 391.751 272.816C415.303 259.96 440.781 241.54 466.882 219.263C519.085 174.706 573.858 114.65 620.798 52.6033C687.102 -35.0413 716.088 -81.361 733.602 -117.678C742.36 -135.838 748.243 -151.482 754.482 -168.503C754.99 -169.887 755.499 -171.28 756.013 -172.685C761.818 -188.551 768.149 -205.853 777.519 -227.649Z" stroke="url(#paint6_linear_1146_121)" stroke-opacity="0.2" stroke-width="2"/>
					<defs>
					<linearGradient id="paint0_linear_1146_121" x1="439.431" y1="-266.545" x2="439.431" y2="145" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="#39B992"/>
					<stop offset="0.0001" stop-color="#4CBC9A"/>
					<stop offset="0.484375" stop-color="#4CBC9A"/>
					<stop offset="1" stop-color="var(--secondary)"/>
					</linearGradient>
					<linearGradient id="paint1_linear_1146_121" x1="426.128" y1="-203.062" x2="426.128" y2="85" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="#39B992"/>
					<stop offset="0.0001" stop-color="var(--secondary)"/>
					<stop offset="0.484375" stop-color="var(--secondary)"/>
					<stop offset="1" stop-color="var(--secondary)"/>
					</linearGradient>
					<linearGradient id="paint2_linear_1146_121" x1="410.81" y1="-131.804" x2="410.81" y2="26" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="#39B992"/>
					<stop offset="0.0001" stop-color="var(--secondary)"/>
					<stop offset="0.484375" stop-color="var(--secondary)"/>
					<stop offset="1" stop-color="var(--secondary)"/>
					</linearGradient>
					<linearGradient id="paint3_linear_1146_121" x1="456.431" y1="-330.545" x2="456.431" y2="215" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="#39B992"/>
					<stop offset="0.0001" stop-color="var(--secondary)"/>
					<stop offset="0.484375" stop-color="var(--secondary)"/>
					<stop offset="1" stop-color="var(--secondary)"/>
					</linearGradient>
					<linearGradient id="paint4_linear_1146_121" x1="496.791" y1="-486.937" x2="496.791" y2="381.134" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="#39B992"/>
					<stop offset="0.0001" stop-color="var(--secondary)"/>
					<stop offset="0.484375" stop-color="var(--secondary)"/>
					<stop offset="1" stop-color="var(--secondary)"/>
					</linearGradient>
					<linearGradient id="paint5_linear_1146_121" x1="524.596" y1="-605.751" x2="524.596" y2="484.206" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="#39B992"/>
					<stop offset="0.0001" stop-color="var(--secondary)"/>
					<stop offset="0.484375" stop-color="var(--secondary)"/>
					<stop offset="1" stop-color="var(--secondary)"/>
					</linearGradient>
					<linearGradient id="paint6_linear_1146_121" x1="462.431" y1="-403.545" x2="462.431" y2="292" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="#39B992"/>
					<stop offset="0.0001" stop-color="var(--secondary)"/>
					<stop offset="0.484375" stop-color="var(--secondary)"/>
					<stop offset="1" stop-color="var(--secondary)"/>
					</linearGradient>
					</defs>
				</svg>
				<svg class="red-line" width="1131" height="455" viewBox="0 0 1131 455" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1132 6.00001C1008.33 -8.33332 722 0.399994 566 150C371 337 309 482 1 527M1132 124C1020 112 787 85 659 177C516.839 279.178 430 455 134 527M1132 243C1039.33 220.667 824 177 659 289C457.942 425.476 308 527 213 527M1132 380C1043 354.667 891 278 685 355C509.757 420.504 405 516 297 527" stroke="url(#paint0_linear_1145_531)" stroke-width="2"/>
					<defs>
					<linearGradient id="paint0_linear_1145_531" x1="566.5" y1="1.10791" x2="566.5" y2="527" gradientUnits="userSpaceOnUse">
					<stop offset="0" stop-color="var(--primary)" stop-opacity="0.2"/>
					<stop offset="0.526042" stop-color="var(--primary)"/>
					<stop offset="1" stop-color="var(--primary)" stop-opacity="0.2"/>
					</linearGradient>
					</defs>
				</svg>
			</div>
		<?php } echo $this->include('elements/nav-header') ?>
		<?php echo $this->include('elements/chat-box') ?>
        <?php echo $this->include('elements/header') ?>
        <?php echo $this->include('elements/sidebar') ?>
        <?php echo $this->renderSection('content') ?>
        <?php echo $this->include('elements/footer') ?>
        
		
	</div>
	
	<?php foreach($globalJs['top'] as $js){ ?>
		<script src="<?php echo base_url($js); ?>"></script>
	<?php } ?>	
	<?php foreach($pageLevelJs as $js){ ?>
		<script src="<?php echo base_url($js); ?>"></script>
	<?php } ?>	
	<?php foreach($globalJs['bottom'] as $js){ ?>
		<script src="<?php echo base_url($js); ?>"></script>
	<?php } ?>
	<?php echo $this->renderSection('scripts') ?>
    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>
</html>