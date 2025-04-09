<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-8 col-xxl-7">
				<div class="card">
					<div class="card-header border-0 pb-0">
						<h3>Blogs</h3>
					</div>
					<div class="card-body pt-0">
						<div class="blog-bx row">
							<div class="col-xl-6 col-xxl-12">
								<img src="<?php echo base_url('public/assets/images/courses/pic-1.jpg'); ?>" alt="img">
							</div>
							<div class="col-xl-6 col-xxl-12">
								<div class="blog-content">
									<h4><a href="javascript:void(0);">Here 10 Tips to become better in UI/UX Design.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<span class="fs-18 font-w400"><small class="text-primary">Admin</small> - 2 January 2022</span>
								</div>
							</div>
						</div>
						<div class="blog-bx row">
							<div class="col-xl-6 col-xxl-12">
								<img src="<?php echo base_url('public/assets/images/courses/pic-2.jpg'); ?>" alt="img">
							</div>	
							<div class="col-xl-6 col-xxl-12">
								<div class="blog-content">
									<h4><a href="javascript:void(0);">Best 10 font pairing for web design with example.</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<span class="fs-18 font-w400"><small class="text-primary">Admin</small> - 2 January 2022</span>
								</div>
							</div>
						</div>
						<div class="blog-bx row">
							<div class="col-xl-6 col-xxl-12">
								<img src="<?php echo base_url('public/assets/images/courses/pic-3.jpg'); ?>" alt="img">
							</div>	
							<div class="col-xl-6 col-xxl-12">
								<div class="blog-content">
									<h4><a href="javascript:void(0);">Create A Real-Time E-Commerce App With React Native</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<span class="fs-18 font-w400"><small class="text-primary">Admin</small> - 2 January 2022</span>
								</div>
							</div>	
						</div>	
						<div class="pagination-down my-4">
							<div class="d-flex align-items-center justify-content-between flex-wrap">
								<h4 class="mb-sm-0 mb-3">Showing <span>1-6 </span>from <span>100 </span>data</h4>
								<ul>
									<li><a href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
									<li><a href="javascript:void(0);" class="active">1</a></li>
									<li><a href="javascript:void(0);">2</a></li>
									<li><a href="javascript:void(0);">3</a></li>
									<li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-xxl-5">
				<div class="row">
					<div class="col-xl-12">
						<div class="card blog-card bg-primary">
							<div class="card-body">
								<h4 class="text-white">Contact</h4>
								<ul>
									<li>
										<span>
											<svg class="me-3" width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.9997 0.666748C8.1707 0.666748 5.45759 1.79055 3.4572 3.79094C1.45681 5.79133 0.333008 8.50444 0.333008 11.3334C0.333008 18.5334 9.73301 26.6667 10.133 27.0134C10.3745 27.22 10.6819 27.3335 10.9997 27.3335C11.3175 27.3335 11.6248 27.22 11.8663 27.0134C12.333 26.6667 21.6663 18.5334 21.6663 11.3334C21.6663 8.50444 20.5425 5.79133 18.5421 3.79094C16.5418 1.79055 13.8286 0.666748 10.9997 0.666748ZM10.9997 24.2001C8.15967 21.5334 2.99967 15.7867 2.99967 11.3334C2.99967 9.21168 3.84253 7.17685 5.34282 5.67656C6.84311 4.17627 8.87794 3.33341 10.9997 3.33341C13.1214 3.33341 15.1562 4.17627 16.6565 5.67656C18.1568 7.17685 18.9997 9.21168 18.9997 11.3334C18.9997 15.7867 13.8397 21.5467 10.9997 24.2001ZM10.9997 6.00008C9.94484 6.00008 8.9137 6.31288 8.03663 6.89891C7.15957 7.48494 6.47598 8.3179 6.07232 9.29244C5.66865 10.267 5.56303 11.3393 5.76882 12.3739C5.97461 13.4085 6.48256 14.3588 7.22844 15.1047C7.97432 15.8505 8.92463 16.3585 9.95919 16.5643C10.9938 16.7701 12.0661 16.6644 13.0407 16.2608C14.0152 15.8571 14.8481 15.1735 15.4342 14.2965C16.0202 13.4194 16.333 12.3882 16.333 11.3334C16.333 9.91893 15.7711 8.56237 14.7709 7.56218C13.7707 6.56198 12.4142 6.00008 10.9997 6.00008ZM10.9997 14.0001C10.4723 14.0001 9.95669 13.8437 9.51815 13.5507C9.07962 13.2577 8.73783 12.8412 8.53599 12.3539C8.33416 11.8666 8.28135 11.3305 8.38425 10.8132C8.48714 10.2959 8.74112 9.82074 9.11406 9.4478C9.487 9.07486 9.96215 8.82088 10.4794 8.71799C10.9967 8.61509 11.5329 8.6679 12.0202 8.86974C12.5074 9.07157 12.9239 9.41336 13.2169 9.85189C13.5099 10.2904 13.6663 10.806 13.6663 11.3334C13.6663 12.0407 13.3854 12.7189 12.8853 13.219C12.3852 13.7191 11.7069 14.0001 10.9997 14.0001Z" fill="white"/>
											</svg>
										</span>	
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</li>
									<li>
										<span>
											<svg class="me-3" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M23.9192 15.333C23.6258 15.333 23.3192 15.2397 23.0258 15.173C22.4318 15.0421 21.848 14.8683 21.2792 14.653C20.6606 14.428 19.9807 14.4397 19.3702 14.6858C18.7598 14.932 18.2619 15.3952 17.9725 15.9863L17.6792 16.5863C16.3805 15.8639 15.1871 14.9666 14.1325 13.9197C13.0855 12.865 12.1883 11.6717 11.4658 10.373L12.0258 9.99966C12.617 9.71022 13.0802 9.21237 13.3264 8.60192C13.5725 7.99147 13.5842 7.31154 13.3592 6.693C13.1475 6.12289 12.9737 5.53939 12.8392 4.94633C12.7725 4.653 12.7192 4.34633 12.6792 4.03966C12.5172 3.10049 12.0253 2.24998 11.292 1.64131C10.5586 1.03264 9.63209 0.705806 8.67916 0.719661H4.67916C4.10453 0.714266 3.53549 0.832746 3.01077 1.06704C2.48605 1.30132 2.01797 1.64592 1.6384 2.07737C1.25883 2.50882 0.976671 3.01699 0.811142 3.56728C0.645613 4.11757 0.600597 4.69707 0.679158 5.26633C1.38948 10.8522 3.94053 16.0422 7.92936 20.0165C11.9182 23.9909 17.1174 26.523 22.7058 27.213H23.2125C24.1957 27.2144 25.145 26.8537 25.8792 26.1997C26.301 25.8224 26.6379 25.3599 26.8678 24.8428C27.0976 24.3256 27.2151 23.7656 27.2125 23.1997V19.1997C27.1962 18.2735 26.8589 17.3817 26.2583 16.6766C25.6577 15.9714 24.8309 15.4965 23.9192 15.333ZM24.5858 23.333C24.5856 23.5223 24.545 23.7094 24.4669 23.8818C24.3887 24.0542 24.2747 24.2081 24.1325 24.333C23.9835 24.4616 23.8093 24.5577 23.621 24.6151C23.4328 24.6725 23.2346 24.69 23.0392 24.6663C18.0457 24.0261 13.4075 21.7416 9.85611 18.1734C6.30475 14.6051 4.04237 9.95611 3.42582 4.95966C3.4046 4.76435 3.4232 4.56677 3.48049 4.37885C3.53779 4.19093 3.63258 4.01658 3.75916 3.86633C3.8841 3.7241 4.03791 3.61012 4.21033 3.53195C4.38275 3.45379 4.56984 3.41323 4.75916 3.413H8.75916C9.06922 3.4061 9.37199 3.5075 9.61535 3.69976C9.85871 3.89201 10.0274 4.16309 10.0925 4.46633C10.1458 4.83077 10.2125 5.19077 10.2925 5.54633C10.4465 6.24919 10.6515 6.9399 10.9058 7.613L9.03916 8.47966C8.87955 8.55289 8.73599 8.65692 8.6167 8.78579C8.49742 8.91466 8.40476 9.06581 8.34405 9.23059C8.28335 9.39536 8.25579 9.5705 8.26295 9.74596C8.27012 9.92141 8.31188 10.0937 8.38582 10.253C10.3048 14.3633 13.6088 17.6674 17.7192 19.5863C18.0438 19.7197 18.4079 19.7197 18.7325 19.5863C18.8988 19.5269 19.0516 19.4349 19.1821 19.3159C19.3125 19.1969 19.418 19.0531 19.4925 18.893L20.3192 17.0263C21.0084 17.2728 21.7119 17.4776 22.4258 17.6397C22.7814 17.7197 23.1414 17.7863 23.5058 17.8397C23.8091 17.9047 24.0801 18.0734 24.2724 18.3168C24.4647 18.5602 24.5661 18.8629 24.5592 19.173L24.5858 23.333Z" fill="white"/>
											</svg>
										</span>	
										<p>+1234567890</p>
									</li>
									<li>
										<span>
											<svg class="me-3" width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M23.3337 0.333252H4.66699C3.60613 0.333252 2.58871 0.754679 1.83857 1.50482C1.08842 2.25497 0.666992 3.27239 0.666992 4.33325V17.6666C0.666992 18.7274 1.08842 19.7449 1.83857 20.495C2.58871 21.2452 3.60613 21.6666 4.66699 21.6666H23.3337C24.3945 21.6666 25.4119 21.2452 26.1621 20.495C26.9122 19.7449 27.3337 18.7274 27.3337 17.6666V4.33325C27.3337 3.27239 26.9122 2.25497 26.1621 1.50482C25.4119 0.754679 24.3945 0.333252 23.3337 0.333252ZM22.5697 2.99992L14.8003 9.39992C14.5783 9.56884 14.3086 9.66339 14.0297 9.67009C13.7508 9.67679 13.4769 9.59531 13.247 9.43725L5.43099 2.99992H22.5697ZM23.3337 18.9999H4.66699C4.31337 18.9999 3.97423 18.8594 3.72418 18.6094C3.47413 18.3593 3.33366 18.0202 3.33366 17.6666V4.73325L11.6003 11.5333C12.2882 12.0483 13.1249 12.3258 13.9843 12.3239C14.8737 12.3226 15.7386 12.032 16.4483 11.4959L24.667 4.73325V17.6666C24.667 18.0202 24.5265 18.3593 24.2765 18.6094C24.0264 18.8594 23.6873 18.9999 23.3337 18.9999Z" fill="white"/>
											</svg>
										</span>	
										<p>lovia@support.com</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<h4 class="fs-24 mb-4">FAQS</h4>
						<div class="custome-accordion">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item card">
									<h2 class="accordion-header border-0" id="headingOne">
									  <button class="accordion-button d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<span class="acc-heading">Is there a freetrial?</span>
										
									  </button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body card-body pt-0">
											<p class="fs-18 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>  
								</div>
								<div class="accordion-item card">
									<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<span class="acc-heading">How the I get payment?</span>
									</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body card-body pt-0">
											<p class="fs-18 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>	
								</div>	
								<div class="accordion-item card">
									<h2 class="accordion-header" id="headingThree">
									  <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<span class="acc-heading">Can I  rewatch the live courses?</span>
									  </button>
										
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									  <div class="accordion-body card-body pt-0">
											<p class="fs-18 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									  </div>
									</div>
								</div>
								<div class="accordion-item card">
									<h2 class="accordion-header" id="headingFour">
									  <button class="accordion-button collapsed  d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<span class="acc-heading">What different Free account and Premium?</span>
									  </button>
										
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									  <div class="accordion-body card-body pt-0">
										<p class="fs-18 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									  </div>
									</div>
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
    Content body end
***********************************-->
<?php echo $this->endSection() ?>