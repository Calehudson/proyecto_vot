<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="widget-heading d-flex justify-content-between align-items-center">
			<h3 class="m-0">Popular This Week</h3>
			<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
		</div>
		<div class="row">
			<!-- Slider main container -->
			<div class="swiper course-slider">
			  <!-- Additional required wrapper -->
			  <div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<div class="card">
						<div class="card-body">
							<div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
								<div class="d-flex align-items-center flex-wrap">
									<img src="<?php echo base_url('public/assets/images/svg/color-palette.svg'); ?>" alt="">
									<div class="flex-1 ms-3">
										<h4>Graphic</h4>
										<span>Lorem ipsum dolor</span>
									</div>	
								</div>	
								<a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card">
						<div class="card-body">
							<div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
								<div class="d-flex align-items-center flex-wrap">
									<img src="<?php echo base_url('public/assets/images/svg/education-website.svg'); ?>" alt="">
									<div class="flex-1 ms-3">
										<h4>Coading</h4>
										<span>Lorem ipsum dolor</span>
									</div>	
								</div>	
								<a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card">
						<div class="card-body">
							<div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
								<div class="d-flex align-items-center flex-wrap">
									<img src="<?php echo base_url('public/assets/images/svg/brain.svg'); ?>" alt="">
									<div class="flex-1 ms-3">
										<h4>Soft Skill</h4>
										<span>Lorem ipsum dolor</span>
									</div>	
								</div>	
								<a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card">
						<div class="card-body">
							<div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
								<div class="d-flex align-items-center flex-wrap">
									<img src="<?php echo base_url('public/assets/images/svg/microscope.svg'); ?>" alt="">
									<div class="flex-1 ms-3">
										<h4>Science</h4>
										<span>Lorem ipsum dolor</span>
									</div>	
								</div>	
								<a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
							</div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		</div>	
		<div class="widget-heading d-flex justify-content-between align-items-center">
			<h3 class="m-0">All Courses</h3>
			<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
		</div>
		<div class="row">
			<div class="col-xl-4 col-md-6">
				<div class="card all-crs-wid">
					<div class="card-body">
						<div class="courses-bx">
							<div class="dlab-media">
								<img src="<?php echo base_url('public/assets/images/courses/course1.jpg'); ?>" alt="">
							</div>
							<div class="dlab-info">
								<div class="dlab-title d-flex justify-content-between">
									<div>
										<h4><a href="<?php echo site_url('course_details_1'); ?>">Fullstack Developer</a></h4>
										<p class="m-0">Samantha William
											<svg class="ms-1" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#DBDBDB"/>
											</svg>
											<span>5.0<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8 0.5L9.79611 6.02786H15.6085L10.9062 9.44427L12.7023 14.9721L8 11.5557L3.29772 14.9721L5.09383 9.44427L0.391548 6.02786H6.20389L8 0.5Z" fill="#FEC64F"/>
											</svg>
											</span>
										</p>
									</div>	
									<h4 class="text-primary"><span>$</span>50.99</h4>
								</div>
								<div class="d-flex justify-content-between content align-items-center">
									<span>
										<svg class="me-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.2 18.6C20.5 18.5 19.8 18.4 19 18.4C16.5 18.4 14.1 19.1 12 20.5C9.90004 19.2 7.50005 18.4 5.00005 18.4C4.30005 18.4 3.50005 18.5 2.80005 18.6C2.30005 18.7 1.90005 19.2 2.00005 19.8C2.10005 20.4 2.60005 20.7 3.20005 20.6C3.80005 20.5 4.40005 20.4 5.00005 20.4C7.30005 20.4 9.50004 21.1 11.4 22.5C11.7 22.8 12.2 22.8 12.6 22.5C15 20.8 18 20.1 20.8 20.6C21.3 20.7 21.9 20.3 22 19.8C22.1 19.2 21.7 18.7 21.2 18.6ZM21.2 2.59999C20.5 2.49999 19.8 2.39999 19 2.39999C16.5 2.39999 14.1 3.09999 12 4.49999C9.90004 3.09999 7.50005 2.39999 5.00005 2.39999C4.30005 2.39999 3.50005 2.49999 2.80005 2.59999C2.40005 2.59999 2.00005 3.09999 2.00005 3.49999V15.5C2.00005 16.1 2.40005 16.5 3.00005 16.5C3.10005 16.5 3.10005 16.5 3.20005 16.5C3.80005 16.4 4.40005 16.3 5.00005 16.3C7.30005 16.3 9.50004 17 11.4 18.4C11.7 18.7 12.2 18.7 12.6 18.4C15 16.7 18 16 20.8 16.5C21.3 16.6 21.9 16.2 22 15.7C22 15.6 22 15.6 22 15.5V3.49999C22 3.09999 21.6 2.59999 21.2 2.59999Z" fill="#c7c7c7"/>
										</svg>
										110+ Content
									</span>
									<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-xl-4 col-md-6">
				<div class="card all-crs-wid">
					<div class="card-body">
						<div class="courses-bx">
							<div class="dlab-media">
								<img src="<?php echo base_url('public/assets/images/courses/course2.jpg'); ?>" alt="">
							</div>
							<div class="dlab-info">
								<div class="dlab-title d-flex justify-content-between">
									<div>
										<h4><a href="<?php echo site_url('course_details_2'); ?>">UI Design Beginner</a></h4>
										<p class="m-0">Karen Hope
											<svg class="ms-1" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#DBDBDB"/>
											</svg>
											<span>5.0<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8 0.5L9.79611 6.02786H15.6085L10.9062 9.44427L12.7023 14.9721L8 11.5557L3.29772 14.9721L5.09383 9.44427L0.391548 6.02786H6.20389L8 0.5Z" fill="#FEC64F"/>
											</svg>
											</span>
										</p>
									</div>	
									<h4 class="text-primary"><span>$</span>50.99</h4>
								</div>
								<div class="d-flex justify-content-between content align-items-center">
									<span>
										<svg class="me-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.2 18.6C20.5 18.5 19.8 18.4 19 18.4C16.5 18.4 14.1 19.1 12 20.5C9.90004 19.2 7.50005 18.4 5.00005 18.4C4.30005 18.4 3.50005 18.5 2.80005 18.6C2.30005 18.7 1.90005 19.2 2.00005 19.8C2.10005 20.4 2.60005 20.7 3.20005 20.6C3.80005 20.5 4.40005 20.4 5.00005 20.4C7.30005 20.4 9.50004 21.1 11.4 22.5C11.7 22.8 12.2 22.8 12.6 22.5C15 20.8 18 20.1 20.8 20.6C21.3 20.7 21.9 20.3 22 19.8C22.1 19.2 21.7 18.7 21.2 18.6ZM21.2 2.59999C20.5 2.49999 19.8 2.39999 19 2.39999C16.5 2.39999 14.1 3.09999 12 4.49999C9.90004 3.09999 7.50005 2.39999 5.00005 2.39999C4.30005 2.39999 3.50005 2.49999 2.80005 2.59999C2.40005 2.59999 2.00005 3.09999 2.00005 3.49999V15.5C2.00005 16.1 2.40005 16.5 3.00005 16.5C3.10005 16.5 3.10005 16.5 3.20005 16.5C3.80005 16.4 4.40005 16.3 5.00005 16.3C7.30005 16.3 9.50004 17 11.4 18.4C11.7 18.7 12.2 18.7 12.6 18.4C15 16.7 18 16 20.8 16.5C21.3 16.6 21.9 16.2 22 15.7C22 15.6 22 15.6 22 15.5V3.49999C22 3.09999 21.6 2.59999 21.2 2.59999Z" fill="#c7c7c7"/>
										</svg>
										110+ Content
									</span>
									<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-xl-4 col-md-6">
				<div class="card all-crs-wid">
					<div class="card-body">
						<div class="courses-bx">
							<div class="dlab-media">
								<img src="<?php echo base_url('public/assets/images/courses/course3.jpg'); ?>" alt="">
							</div>
							<div class="dlab-info">
								<div class="dlab-title d-flex justify-content-between">
									<div>
										<h4><a href="<?php echo site_url('course_details_1'); ?>">How to be Freelancer</a></h4>
										<p class="m-0">Jack and Sally
											<svg class="ms-1" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#DBDBDB"/>
											</svg>
											<span>5.0<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8 0.5L9.79611 6.02786H15.6085L10.9062 9.44427L12.7023 14.9721L8 11.5557L3.29772 14.9721L5.09383 9.44427L0.391548 6.02786H6.20389L8 0.5Z" fill="#FEC64F"/>
											</svg>
											</span>
										</p>
									</div>	
									<h4 class="text-primary"><span>$</span>50.99</h4>
								</div>
								<div class="d-flex justify-content-between content align-items-center align-items-center">
									<span>
										<svg class="me-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.2 18.6C20.5 18.5 19.8 18.4 19 18.4C16.5 18.4 14.1 19.1 12 20.5C9.90004 19.2 7.50005 18.4 5.00005 18.4C4.30005 18.4 3.50005 18.5 2.80005 18.6C2.30005 18.7 1.90005 19.2 2.00005 19.8C2.10005 20.4 2.60005 20.7 3.20005 20.6C3.80005 20.5 4.40005 20.4 5.00005 20.4C7.30005 20.4 9.50004 21.1 11.4 22.5C11.7 22.8 12.2 22.8 12.6 22.5C15 20.8 18 20.1 20.8 20.6C21.3 20.7 21.9 20.3 22 19.8C22.1 19.2 21.7 18.7 21.2 18.6ZM21.2 2.59999C20.5 2.49999 19.8 2.39999 19 2.39999C16.5 2.39999 14.1 3.09999 12 4.49999C9.90004 3.09999 7.50005 2.39999 5.00005 2.39999C4.30005 2.39999 3.50005 2.49999 2.80005 2.59999C2.40005 2.59999 2.00005 3.09999 2.00005 3.49999V15.5C2.00005 16.1 2.40005 16.5 3.00005 16.5C3.10005 16.5 3.10005 16.5 3.20005 16.5C3.80005 16.4 4.40005 16.3 5.00005 16.3C7.30005 16.3 9.50004 17 11.4 18.4C11.7 18.7 12.2 18.7 12.6 18.4C15 16.7 18 16 20.8 16.5C21.3 16.6 21.9 16.2 22 15.7C22 15.6 22 15.6 22 15.5V3.49999C22 3.09999 21.6 2.59999 21.2 2.59999Z" fill="#c7c7c7"/>
										</svg>
										110+ Content
									</span>
									<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-xl-4 col-md-6">
				<div class="card all-crs-wid">
					<div class="card-body">
						<div class="courses-bx">
							<div class="dlab-media">
								<img src="<?php echo base_url('public/assets/images/courses/course4.jpg'); ?>" alt="">
							</div>
							<div class="dlab-info">
								<div class="dlab-title d-flex justify-content-between">
									<div>
										<h4><a href="<?php echo site_url('course_details_2'); ?>">UX Research</a></h4>
										<p class="m-0">Cahaya Hikari
											<svg class="ms-1" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#DBDBDB"/>
											</svg>
											<span>5.0<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8 0.5L9.79611 6.02786H15.6085L10.9062 9.44427L12.7023 14.9721L8 11.5557L3.29772 14.9721L5.09383 9.44427L0.391548 6.02786H6.20389L8 0.5Z" fill="#FEC64F"/>
											</svg>
											</span>
										</p>
									</div>	
									<h4 class="text-primary"><span>$</span>50.99</h4>
								</div>
								<div class="d-flex justify-content-between content align-items-center">
									<span>
										<svg class="me-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.2 18.6C20.5 18.5 19.8 18.4 19 18.4C16.5 18.4 14.1 19.1 12 20.5C9.90004 19.2 7.50005 18.4 5.00005 18.4C4.30005 18.4 3.50005 18.5 2.80005 18.6C2.30005 18.7 1.90005 19.2 2.00005 19.8C2.10005 20.4 2.60005 20.7 3.20005 20.6C3.80005 20.5 4.40005 20.4 5.00005 20.4C7.30005 20.4 9.50004 21.1 11.4 22.5C11.7 22.8 12.2 22.8 12.6 22.5C15 20.8 18 20.1 20.8 20.6C21.3 20.7 21.9 20.3 22 19.8C22.1 19.2 21.7 18.7 21.2 18.6ZM21.2 2.59999C20.5 2.49999 19.8 2.39999 19 2.39999C16.5 2.39999 14.1 3.09999 12 4.49999C9.90004 3.09999 7.50005 2.39999 5.00005 2.39999C4.30005 2.39999 3.50005 2.49999 2.80005 2.59999C2.40005 2.59999 2.00005 3.09999 2.00005 3.49999V15.5C2.00005 16.1 2.40005 16.5 3.00005 16.5C3.10005 16.5 3.10005 16.5 3.20005 16.5C3.80005 16.4 4.40005 16.3 5.00005 16.3C7.30005 16.3 9.50004 17 11.4 18.4C11.7 18.7 12.2 18.7 12.6 18.4C15 16.7 18 16 20.8 16.5C21.3 16.6 21.9 16.2 22 15.7C22 15.6 22 15.6 22 15.5V3.49999C22 3.09999 21.6 2.59999 21.2 2.59999Z" fill="#c7c7c7"/>
										</svg>
										110+ Content
									</span>
									<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-xl-4 col-md-6">
				<div class="card all-crs-wid">
					<div class="card-body">
						<div class="courses-bx">
							<div class="dlab-media">
								<img src="<?php echo base_url('public/assets/images/courses/course5.jpg'); ?>" alt="">
							</div>
							<div class="dlab-info">
								<div class="dlab-title d-flex justify-content-between">
									<div>
										<h4><a href="<?php echo site_url('course_details_1'); ?>">Basic Web Design</a></h4>
										<p class="m-0">Johnny Ahmad
											<svg class="ms-1" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#DBDBDB"/>
											</svg>
											<span>5.0<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8 0.5L9.79611 6.02786H15.6085L10.9062 9.44427L12.7023 14.9721L8 11.5557L3.29772 14.9721L5.09383 9.44427L0.391548 6.02786H6.20389L8 0.5Z" fill="#FEC64F"/>
											</svg>
											</span>
										</p>
									</div>	
									<h4 class="text-primary"><span>$</span>50.99</h4>
								</div>
								<div class="d-flex justify-content-between content align-items-center">
									<span>
										<svg class="me-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.2 18.6C20.5 18.5 19.8 18.4 19 18.4C16.5 18.4 14.1 19.1 12 20.5C9.90004 19.2 7.50005 18.4 5.00005 18.4C4.30005 18.4 3.50005 18.5 2.80005 18.6C2.30005 18.7 1.90005 19.2 2.00005 19.8C2.10005 20.4 2.60005 20.7 3.20005 20.6C3.80005 20.5 4.40005 20.4 5.00005 20.4C7.30005 20.4 9.50004 21.1 11.4 22.5C11.7 22.8 12.2 22.8 12.6 22.5C15 20.8 18 20.1 20.8 20.6C21.3 20.7 21.9 20.3 22 19.8C22.1 19.2 21.7 18.7 21.2 18.6ZM21.2 2.59999C20.5 2.49999 19.8 2.39999 19 2.39999C16.5 2.39999 14.1 3.09999 12 4.49999C9.90004 3.09999 7.50005 2.39999 5.00005 2.39999C4.30005 2.39999 3.50005 2.49999 2.80005 2.59999C2.40005 2.59999 2.00005 3.09999 2.00005 3.49999V15.5C2.00005 16.1 2.40005 16.5 3.00005 16.5C3.10005 16.5 3.10005 16.5 3.20005 16.5C3.80005 16.4 4.40005 16.3 5.00005 16.3C7.30005 16.3 9.50004 17 11.4 18.4C11.7 18.7 12.2 18.7 12.6 18.4C15 16.7 18 16 20.8 16.5C21.3 16.6 21.9 16.2 22 15.7C22 15.6 22 15.6 22 15.5V3.49999C22 3.09999 21.6 2.59999 21.2 2.59999Z" fill="#c7c7c7"/>
										</svg>
										110+ Content
									</span>
									<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-xl-4 col-md-6">
				<div class="card all-crs-wid">
					<div class="card-body">
						<div class="courses-bx">
							<div class="dlab-media">
								<img src="<?php echo base_url('public/assets/images/courses/course6.jpg'); ?>" alt="">
							</div>
							<div class="dlab-info">
								<div class="dlab-title d-flex justify-content-between">
									<div>
										<h4><a href="<?php echo site_url('course_details_2'); ?>">3D Character Design</a></h4>
										<p class="m-0">Jordan Nico
											<svg class="ms-1" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#DBDBDB"/>
											</svg>
											<span>5.0<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8 0.5L9.79611 6.02786H15.6085L10.9062 9.44427L12.7023 14.9721L8 11.5557L3.29772 14.9721L5.09383 9.44427L0.391548 6.02786H6.20389L8 0.5Z" fill="#FEC64F"/>
											</svg>
											</span>
										</p>
									</div>	
									<h4 class="text-primary"><span>$</span>50.99</h4>
								</div>
								<div class="d-flex justify-content-between content align-items-center">
									<span>
										<svg class="me-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.2 18.6C20.5 18.5 19.8 18.4 19 18.4C16.5 18.4 14.1 19.1 12 20.5C9.90004 19.2 7.50005 18.4 5.00005 18.4C4.30005 18.4 3.50005 18.5 2.80005 18.6C2.30005 18.7 1.90005 19.2 2.00005 19.8C2.10005 20.4 2.60005 20.7 3.20005 20.6C3.80005 20.5 4.40005 20.4 5.00005 20.4C7.30005 20.4 9.50004 21.1 11.4 22.5C11.7 22.8 12.2 22.8 12.6 22.5C15 20.8 18 20.1 20.8 20.6C21.3 20.7 21.9 20.3 22 19.8C22.1 19.2 21.7 18.7 21.2 18.6ZM21.2 2.59999C20.5 2.49999 19.8 2.39999 19 2.39999C16.5 2.39999 14.1 3.09999 12 4.49999C9.90004 3.09999 7.50005 2.39999 5.00005 2.39999C4.30005 2.39999 3.50005 2.49999 2.80005 2.59999C2.40005 2.59999 2.00005 3.09999 2.00005 3.49999V15.5C2.00005 16.1 2.40005 16.5 3.00005 16.5C3.10005 16.5 3.10005 16.5 3.20005 16.5C3.80005 16.4 4.40005 16.3 5.00005 16.3C7.30005 16.3 9.50004 17 11.4 18.4C11.7 18.7 12.2 18.7 12.6 18.4C15 16.7 18 16 20.8 16.5C21.3 16.6 21.9 16.2 22 15.7C22 15.6 22 15.6 22 15.5V3.49999C22 3.09999 21.6 2.59999 21.2 2.59999Z" fill="#c7c7c7"/>
										</svg>
										110+ Content
									</span>
									<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pagination-down">
			<div class="d-flex align-items-center justify-content-between flex-wrap">
				<h4 class="sm-mb-0 mb-3">Showing <span>1-6 </span>from <span>100 </span>data</h4>
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
<!--**********************************
    Content body end
***********************************-->
<?php 
	echo $this->endSection(); 
	echo $this->section('scripts'); 
?>
	<script>
		$(document).ready(function(){
			$(".pagination-down a").on('click',function(){
				$(".pagination-down a").removeClass("active");
				$(this).addClass("active");
			});
		});
		
	</script>
<?php echo $this->endSection() ?>