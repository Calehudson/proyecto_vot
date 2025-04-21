<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6">
				<div class="widget-heading d-flex justify-content-between align-items-center">
					<h3 class="m-0">Ongoing Class</h3>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-12 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="widget-courses align-items-center d-flex flex-wrap">
									<div class="d-flex align-items-center flex-wrap flex-1">
										<span class="schedule-icon bgl-secondary">75%</span>
										<div class="flex-1">
											<h4>UI Design Basic</h4>
											<div class="progress-box me-3">
												<div class="progress mb-0">
													<div class="progress-bar bg-secondary" style="width:50%; height:12px; border-radius:4px;" role="progressbar"></div>
												</div>
											</div>
										</div>	
									</div>	
									<a href="javascript:void(0);"><i class="las la-angle-right text-secondary"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-12 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="widget-courses align-items-center d-flex flex-wrap">
									<div class="d-flex align-items-center flex-wrap flex-1">
										<span class="schedule-icon bgl-warning">50%</span>
										<div class="flex-1">
											<h4>Developer</h4>
											<div class="progress-box me-3">
												<div class="progress mb-0">
													<div class="progress-bar bg-warning" style="width:50%; height:12px; border-radius:4px;" role="progressbar"></div>
												</div>
											</div>
										</div>	
									</div>	
									<a href="javascript:void(0);"><i class="las la-angle-right text-warning"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 mb-4">
						<div class="widget-heading d-flex justify-content-between align-items-center">
							<h3 class="m-0">Today Schedule</h3>
						</div>
						<div class="card">
							<div class="card-body">
								<div id="calendar" class="app-fullcalendar1"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="widget-heading d-flex justify-content-between align-items-center">
					<h3 class="m-0 mt-sm-0 mt-4">Calendar</h3>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6 col-xxl-12">
										<div class="card-calendar style-1">
											<input type='text' class="form-control d-none" id='datetimepicker' />
										</div>
									</div>
									<div class="col-xl-6 redial col-xxl-12">
										<p class="text-center">Your Progress this Month</p>
										<div id="redial"></div>
										<p class="my-4 text-center">Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor</p>
										<ul class="skil-list">
											<li>	
												<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#4CBC9A" stroke-width="3"/>
												</svg>
												Design
											</li>
											<li class="">	
												<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#FFBABF" stroke-width="3"/>
												</svg>
												Soft Skill
											</li>
											<li>	
												<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#FEC64F" stroke-width="3"/>
												</svg>
												Developer
											</li>
											<li>	
												<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#FC6B57" stroke-width="3"/>
												</svg>
												Science
											</li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="widget-heading d-flex justify-content-between align-items-center">
							<h3 class="m-0">Upcoming Schedule</h3>
							<a href="<?php echo site_url('instructor_schedule'); ?>" class="btn btn-primary btn-sm">View all</a>
						</div>
						<div class="card-schedule">
							<span class="side-label bg-primary"></span>
							<div class="up-comming-schedule">
								
								<div>
									<h4><a href="javascript:void(0);">UX Research</a></h4>
									<div class="mb-sm-0 mb-2">
										<img src="<?php echo base_url('public/assets/images/profile/small/pic8.jpg'); ?>" class="me-2" alt="">
										<span>Ms. Samantha William</span>
									</div>
								</div>
								<div>
									<svg class="me-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13 2.73499H12.255V2.25C12.255 1.83999 11.92 1.5 11.505 1.5C11.09 1.5 10.755 1.83999 10.755 2.25V2.73499H8.75V2.25C8.75 1.83999 8.41501 1.5 8 1.5C7.58499 1.5 7.25 1.83999 7.25 2.25V2.73499H5.245V2.25C5.245 1.83999 4.91001 1.5 4.495 1.5C4.07999 1.5 3.745 1.83999 3.745 2.25V2.73499H3C1.48498 2.73499 0.25 3.96499 0.25 5.48498V12.75C0.25 14.265 1.48498 15.5 3 15.5H13C14.515 15.5 15.75 14.265 15.75 12.75V5.48498C15.75 3.96499 14.515 2.73499 13 2.73499ZM14.25 6.31H1.75V5.48498C1.75 4.79498 2.31 4.23499 3 4.23499H3.745V4.69C3.745 5.10498 4.07999 5.44 4.495 5.44C4.91001 5.44 5.245 5.10498 5.245 4.69V4.23499H7.25V4.69C7.25 5.10498 7.58499 5.44 8 5.44C8.41501 5.44 8.75 5.10498 8.75 4.69V4.23499H10.755V4.69C10.755 5.10498 11.09 5.44 11.505 5.44C11.92 5.44 12.255 5.10498 12.255 4.69V4.23499H13C13.69 4.23499 14.25 4.79498 14.25 5.48498V6.31Z" fill="#c7c7c7"/>
									</svg>
									<span>January 5, 2021</span>
								</div>
								<div>
									<svg class="me-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1049_649)">
										<path d="M8 16.25C12.275 16.25 15.75 12.775 15.75 8.5C15.75 4.22501 12.275 0.75 8 0.75C3.72501 0.75 0.25 4.22501 0.25 8.5C0.25 12.775 3.72501 16.25 8 16.25ZM7.25 4.345C7.25 3.92999 7.58499 3.595 8 3.595C8.41501 3.595 8.75 3.92999 8.75 4.345V7.75H10.5C10.915 7.75 11.25 8.08499 11.25 8.5C11.25 8.91501 10.915 9.25 10.5 9.25H8C7.58499 9.25 7.25 8.91501 7.25 8.5V4.345Z" fill="#c7c7c7"/>
										</g>
										<defs>
										<clipPath id="clip02_1049_649">
										<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
										</clipPath>
										</defs>
									</svg>

									<span>07.00 - 08.00 AM</span>
								</div>
								<div>
									<a href="<?php echo site_url('instructor_schedule'); ?>"><i class="las la-angle-right text-secondary"></i></a>
								</div>
							</div>
						</div>
						<div class="card-schedule">
							<span class="side-label bg-warning"></span>
							<div class="up-comming-schedule">
								
								<div>
									<h4><a href="javascript:void(0);">Back-End Developer</a></h4>
									<div class="mb-sm-0 mb-2">
										<img src="<?php echo base_url('public/assets/images/profile/small/pic7.jpg'); ?>" class="me-2" alt="">
										<span>Ms. Samantha William</span>
									</div>
								</div>
								<div>
									<svg class="me-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13 2.73499H12.255V2.25C12.255 1.83999 11.92 1.5 11.505 1.5C11.09 1.5 10.755 1.83999 10.755 2.25V2.73499H8.75V2.25C8.75 1.83999 8.41501 1.5 8 1.5C7.58499 1.5 7.25 1.83999 7.25 2.25V2.73499H5.245V2.25C5.245 1.83999 4.91001 1.5 4.495 1.5C4.07999 1.5 3.745 1.83999 3.745 2.25V2.73499H3C1.48498 2.73499 0.25 3.96499 0.25 5.48498V12.75C0.25 14.265 1.48498 15.5 3 15.5H13C14.515 15.5 15.75 14.265 15.75 12.75V5.48498C15.75 3.96499 14.515 2.73499 13 2.73499ZM14.25 6.31H1.75V5.48498C1.75 4.79498 2.31 4.23499 3 4.23499H3.745V4.69C3.745 5.10498 4.07999 5.44 4.495 5.44C4.91001 5.44 5.245 5.10498 5.245 4.69V4.23499H7.25V4.69C7.25 5.10498 7.58499 5.44 8 5.44C8.41501 5.44 8.75 5.10498 8.75 4.69V4.23499H10.755V4.69C10.755 5.10498 11.09 5.44 11.505 5.44C11.92 5.44 12.255 5.10498 12.255 4.69V4.23499H13C13.69 4.23499 14.25 4.79498 14.25 5.48498V6.31Z" fill="#c7c7c7"/>
									</svg>
									<span>January 5, 2021</span>
								</div>
								<div>
									<svg class="me-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1049_649)">
										<path d="M8 16.25C12.275 16.25 15.75 12.775 15.75 8.5C15.75 4.22501 12.275 0.75 8 0.75C3.72501 0.75 0.25 4.22501 0.25 8.5C0.25 12.775 3.72501 16.25 8 16.25ZM7.25 4.345C7.25 3.92999 7.58499 3.595 8 3.595C8.41501 3.595 8.75 3.92999 8.75 4.345V7.75H10.5C10.915 7.75 11.25 8.08499 11.25 8.5C11.25 8.91501 10.915 9.25 10.5 9.25H8C7.58499 9.25 7.25 8.91501 7.25 8.5V4.345Z" fill="#c7c7c7"/>
										</g>
										<defs>
										<clipPath id="clip00_1049_649">
										<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
										</clipPath>
										</defs>
									</svg>

									<span>07.00 - 08.00 AM</span>
								</div>
								<div>
									<a href="<?php echo site_url('instructor_schedule'); ?>"><i class="las la-angle-right text-secondary"></i></a>

								</div>
							</div>
						</div>
						<div class="card-schedule">
							<span class="side-label bg-secondary"></span>
							<div class="up-comming-schedule">
								
								<div>
									<h4><a href="javascript:void(0);">Icon Design</a></h4>
									<div class="mb-sm-0 mb-2">
										<img src="<?php echo base_url('public/assets/images/profile/small/pic6.jpg'); ?>" class="me-2" alt="">
										<span>Ms. Samantha William</span>
									</div>
								</div>
								<div>
									<svg class="me-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13 2.73499H12.255V2.25C12.255 1.83999 11.92 1.5 11.505 1.5C11.09 1.5 10.755 1.83999 10.755 2.25V2.73499H8.75V2.25C8.75 1.83999 8.41501 1.5 8 1.5C7.58499 1.5 7.25 1.83999 7.25 2.25V2.73499H5.245V2.25C5.245 1.83999 4.91001 1.5 4.495 1.5C4.07999 1.5 3.745 1.83999 3.745 2.25V2.73499H3C1.48498 2.73499 0.25 3.96499 0.25 5.48498V12.75C0.25 14.265 1.48498 15.5 3 15.5H13C14.515 15.5 15.75 14.265 15.75 12.75V5.48498C15.75 3.96499 14.515 2.73499 13 2.73499ZM14.25 6.31H1.75V5.48498C1.75 4.79498 2.31 4.23499 3 4.23499H3.745V4.69C3.745 5.10498 4.07999 5.44 4.495 5.44C4.91001 5.44 5.245 5.10498 5.245 4.69V4.23499H7.25V4.69C7.25 5.10498 7.58499 5.44 8 5.44C8.41501 5.44 8.75 5.10498 8.75 4.69V4.23499H10.755V4.69C10.755 5.10498 11.09 5.44 11.505 5.44C11.92 5.44 12.255 5.10498 12.255 4.69V4.23499H13C13.69 4.23499 14.25 4.79498 14.25 5.48498V6.31Z" fill="#c7c7c7"/>
									</svg>
									<span>January 5, 2021</span>
								</div>
								<div>
									<svg class="me-1" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1049_649)">
										<path d="M8 16.25C12.275 16.25 15.75 12.775 15.75 8.5C15.75 4.22501 12.275 0.75 8 0.75C3.72501 0.75 0.25 4.22501 0.25 8.5C0.25 12.775 3.72501 16.25 8 16.25ZM7.25 4.345C7.25 3.92999 7.58499 3.595 8 3.595C8.41501 3.595 8.75 3.92999 8.75 4.345V7.75H10.5C10.915 7.75 11.25 8.08499 11.25 8.5C11.25 8.91501 10.915 9.25 10.5 9.25H8C7.58499 9.25 7.25 8.91501 7.25 8.5V4.345Z" fill="#c7c7c7"/>
										</g>
										<defs>
										<clipPath id="clip01_1049_649">
										<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
										</clipPath>
										</defs>
									</svg>

									<span>07.00 - 08.00 AM</span>
								</div>
								<div>
									<a href="<?php echo site_url('instructor_schedule'); ?>"><i class="las la-angle-right text-secondary"></i></a>
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
<?php 
	echo $this->endSection(); 
	echo $this->section('scripts'); 
?>
	<script>
		$(function () {
			$('#datetimepicker').datetimepicker({
				inline: true,
			});
		});
		
		$(document).ready(function(){
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
	</script>
<?php echo $this->endSection() ?>