<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>
<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-xxl-5 col-lg-12">
				<div class="card instructors-box">
					<div class="card-header border-0">
						<div class="dropdown">
							<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
								<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z" fill="#A098AE"/>
								</svg>
							</a>
							<div class="dropdown-menu dropdown-menu-start">
								<a class="dropdown-item" href="javascript:void(0);">Delete</a>
								<a class="dropdown-item" href="javascript:void(0);">Edit</a>
							</div>
						</div>
					</div>
					<div class="card-body text-center pb-3">
						<div class="instructors-media">
							<img src="<?php echo base_url('public/assets/images/courses/pic2.jpg'); ?>"  alt="">
							<div class="instructors-media-info mt-4">
								<h4 class="mb-1">Nella Vita</h4>
								<span class="fs-18">Member Since 2020</span>
								<div class="d-flex justify-content-center my-3 mt-4">
									<div class="info-box text-start style-1">
										<span>Points</span>
										<h4>2300</h4>
									</div>
									<div class="info-box text-start style-1">
										<span>Certificate</span>
										<h4>50</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="achievements ">
							<h4 class="text-start mb-3">Achievements</h4>
							<div class="achievements-content flex-wrap">
								<span><img src="<?php echo base_url('public/assets/images/svg/cup.svg'); ?>"  alt=""></span>
								<span><img src="<?php echo base_url('public/assets/images/svg/puzzle.svg'); ?>" alt=""></span>
								<span><img src="<?php echo base_url('public/assets/images/svg/planet.svg'); ?>" alt=""></span>
								<span><img src="<?php echo base_url('public/assets/images/svg/skill.svg'); ?>" alt=""></span>
								<span><img src="<?php echo base_url('public/assets/images/svg/readingtime.svg'); ?>" alt=""></span>
							</div>	
						</div>
						<div class="bio text-start my-4">
							<h4 class="mb-3">Bio</h4>
							<div class="bio-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-8 col-xxl-7 col-lg-12 ">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="card profile-widget">
							<div class="card-body">
								<div class="widget-courses align-items-center d-flex justify-content-between style-1 flex-wrap">
									<div class="d-flex">
										<img src="<?php echo base_url('public/assets/images/svg/degree-certificate.svg'); ?>"  alt="">
										<div class="ms-4">
											<h4>100</h4>
											<span>Completed</span>
										</div>	
									</div>	
									<a href="<?php echo site_url('courses'); ?>"><i class="las la-angle-right text-primary"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="card profile-widget">
							<div class="card-body">
								<div class="widget-courses align-items-center d-flex justify-content-between style-1 flex-wrap">
									<div class="d-flex">
										<img src="<?php echo base_url('public/assets/images/svg/clock-1.svg'); ?>"  alt="">
										<div class="ms-4">
											<h4>100</h4>
											<span>Progress</span>
										</div>	
									</div>	
									<a href="<?php echo site_url('courses'); ?>"><i class="las la-angle-right text-secondary"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-heading d-flex justify-content-between align-items-center">
						<h3 class="m-0">Current Courses</h3>
						<a href="<?php echo site_url('courses'); ?>" class="btn btn-primary btn-sm">View all</a>
					</div>
					<div class="col-xl-6 col-sm-6">
						<div class="card">
							<div class="card-body">	
								<div class="students1">
									<div class="d-inline-block position-relative donut-chart-sale me-4">
										<span class="donut1" data-peity='{ "fill": ["rgba(76, 188, 154, 1)", "rgba(245, 245, 245, 1"],   "innerRadius": 38, "radius": 5}'>5/7</span>
										<small class="text-secondary">80%</small>
									</div>
									<div class="">
										<span>Class</span>
										<h4 class="fs-18 mb-3">UI Design Beginner</h4>
										<span>Total Courses</span>	
										<h5 class="fs-18">90 / 110</h5>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-sm-6">
						<div class="card">
							<div class="card-body">	
								<div class="students1">
									<div class="d-inline-block position-relative donut-chart-sale me-4">
										<span class="donut1" data-peity='{ "fill": ["rgba(254, 198, 79, 1)", "rgba(245, 245, 245, 1"],   "innerRadius": 38, "radius": 5}'>5/8</span>
										<small class="text-warning">62%</small>
									</div>
									<div class="">
										<span>Class</span>
										<h4 class="fs-18 mb-3">UX Research</h4>
										<span>Total Courses</span>	
										<h5 class="fs-18">50 / 80</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card score-active style-1">
							<div class="card-header border-0 pb-2 flex-wrap">
								<h4 class="me-4">Score Activity</h4>
								<ul class="d-flex mb-2">
									<li>
										<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#FEC64F" stroke-width="3"/>
										</svg>
										Last Month
									</li>
									<li>
										<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#4CBC9A" stroke-width="3"/>
										</svg>
										Last Month
									</li>
								</ul>
								<div class="d-flex align-items-center">
									<select class="default-select dashboard-select">
									  <option data-display="This Month">This Month</option>
									  <option value="2">This Weekly</option>
									   <option value="2">This Day</option>
									</select>
									<div class="dropdown">
										<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z" fill="#A098AE"/>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pb-1 custome-tooltip pt-0">
								<div id="activity"></div>
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