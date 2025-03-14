<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body message-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 chat-left-area">
				<div class="card dlab-scroll chat-sidebar" id="chat-sidebar">
					<div class="card-body">
						<div class="message-box d-flex align-items-center">
							<img src="<?php echo base_url('public/assets/images/courses/pic8.jpg'); ?>" alt="">
							<div class="ms-3">
								<h3 class="mb-0">Nella Vita</h3>
								<span>Student</span>
							</div>
						</div>
						<div class="chat-people">
							<div class="d-flex justify-content-between">
								<h4 class="m-0 fs-18 font-w600">Contacts</h4>
								<a href="javascript:void(0);">View All</a>
							</div>
							<ul class="d-flex align-items-center justify-content-between mt-2 contact-list">
								<li><img src="<?php echo base_url('public/assets/images/contacts/pic-333.jpg'); ?>" alt=""></li>
								<li><img src="<?php echo base_url('public/assets/images/contacts/pic444.jpg'); ?>" alt=""></li>
								<li><img src="<?php echo base_url('public/assets/images/contacts/pic555.jpg'); ?>" alt=""></li>
								<li><img src="<?php echo base_url('public/assets/images/contacts/pic-333.jpg'); ?>" alt=""></li>
								<li><img src="<?php echo base_url('public/assets/images/contacts/pic666.jpg'); ?>" alt=""></li>
								<li><img src="<?php echo base_url('public/assets/images/contacts/pic444.jpg'); ?>" alt=""></li>
							</ul>
						</div>
						<div class="chat-tabs">
							<h4>Chats</h4>
							<div class="course-details-tab style-2">
								<nav>
								  <div class="nav nav-tabs" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-private-tab" data-bs-toggle="tab" data-bs-target="#nav-private" type="button" role="tab" aria-controls="nav-private" aria-selected="true">Private</button>
									<button class="nav-link" id="nav-group-tab" data-bs-toggle="tab" data-bs-target="#nav-group" type="button" role="tab">Group</button>
									
								  </div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
								  <div class="tab-pane fade show active" id="nav-private" role="tabpanel" aria-labelledby="nav-private-tab">
								
									<ul>
										<li class="chat-bx">
											<div class="chat-img">
												<img src="<?php echo base_url('public/assets/images/courses/pic3.jpg'); ?>" alt="">
											</div>
											<div class="mid-info">
												<h4 class="name">Tony Soap</h4>
												<span>Lorem ipsum dolor sit amet is the dummy text.</span>
											</div>
											<div class="right-info">
												<p>12:45 PM</p>
												<span class="badge badge-primary">2</span>
											</div>
										</li>
										<li class="chat-bx">
											<div class="chat-img">
												<img src="<?php echo base_url('public/assets/images/courses/pic1.jpg'); ?>" alt="">
											</div>
											<div class="mid-info">
												<h4 class="name">Tony Soap</h4>
												<span>Lorem ipsum dolor sit amet is the dummy text.</span>
											</div>
											<div class="right-info">
												<p>12:45 PM</p>
												<span class="badge badge-primary">2</span>
											</div>
										</li>
										<li class="chat-bx active">
											<div class="chat-img">
												<img src="<?php echo base_url('public/assets/images/courses/pic2.jpg'); ?>" alt="">
											</div>
											<div class="mid-info">
												<h4 class="name">Karen Hope</h4>
												<span>Lorem ipsum dolor sit amet is the dummy text.</span>
											</div>
											<div class="right-info">
												<p>12:45 PM</p>
												<span class="badge badge-primary">2</span>
											</div>
										</li>
										<li class="chat-bx">
											<div class="chat-img">
												<img src="<?php echo base_url('public/assets/images/courses/pic4.jpg'); ?>" alt="">
											</div>
											<div class="mid-info">
												<h4 class="name">Tony Soap</h4>
												<span>Lorem ipsum dolor sit amet is the dummy text.</span>
											</div>
											<div class="right-info">
												<p>12:45 PM</p>
												<span class="badge badge-primary">2</span>
											</div>
										</li>
										<li class="chat-bx">
											<div class="chat-img">
												<img src="<?php echo base_url('public/assets/images/courses/pic5.jpg'); ?>" alt="">
											</div>
											<div class="mid-info">
												<h4 class="name">Tony Soap</h4>
												<span>Lorem ipsum dolor sit amet is the dummy text.</span>
											</div>
											<div class="right-info">
												<p>12:45 PM</p>
												<span class="badge badge-primary">2</span>
											</div>
										</li>
										<li class="chat-bx">
											<div class="chat-img">
												<img src="<?php echo base_url('public/assets/images/courses/pic6.jpg'); ?>" alt="">
											</div>
											<div class="mid-info">
												<h4 class="name">Tony Soap</h4>
												<span>Lorem ipsum dolor sit amet is the dummy text.</span>
											</div>
											<div class="right-info">
												<p>12:45 PM</p>
												<span class="badge badge-primary">2</span>
											</div>
										</li>
									</ul>
									
									
								  </div>
								</div>
							</div>	
						</div>	
					</div>
				</div>
			</div>
			<div class="col-xl-5 chat-mid-area">
				<div class="message-box style-1 d-flex align-items-center">
					<img src="<?php echo base_url('public/assets/images/courses/pic2.jpg'); ?>" alt="">
					<div class="ms-3 flex-1">
						<h4>Karen Hope</h4>
						<span>
							<svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="4" cy="4.5" r="4" fill="#4CBC9A"/>
							</svg>
							Online
						</span>
					</div>
					<div class="chat-hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="chat-box-area dlab-scroll" id="chartBox">
					<div class="media my-4">
						<div class="message-received w-auto">
							<p class="mb-1">
							Hello Nella!
							</p>
							<span class="fs-14">12:45 PM</span>
						</div>
					</div>
					<div class="media my-4  justify-content-start align-items-start">
						 <div class="message-received  w-auto">
							<p class="mb-1 me-5">
							Can you arrange schedule for next meeting?
							</p>
							<span class="fs-12">Sunday, October 24th, 2020 at 4.30 AM</span>
						</div>
					</div>
					<div class="media mb-4 justify-content-end align-items-end">
						<div class="message-sent w-auto">
							<p class="mb-1">
							Hello Karen!
							</p>
							<span class="fs-12">9.30 AM</span>
						</div>
					</div>
					<div class="media mb-4 justify-content-end align-items-end">
						<div class="message-sent">
							<p class="mb-1">
							Okay, I’ll arrange it soon. i noftify you when it’s done
							</p>
							<span class="fs-12">9.30 AM</span>
						</div>
					</div>
				</div>
				<div class="type-massage">
					<div class="input-group">
						<textarea class="form-control" placeholder="Type message..."></textarea>
						<div class="input-group-append">
							<button type="button" class="btn share-btn">
								<svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.3251 34.2002C13.0909 34.1974 11.8852 33.8294 10.86 33.1424C9.83471 32.4555 9.03576 31.4804 8.56385 30.3401C8.09194 29.1997 7.96819 27.9452 8.20821 26.7346C8.44823 25.5241 9.04126 24.4117 9.91256 23.5377L20.5126 12.9252C20.8614 12.5763 21.2755 12.2996 21.7313 12.1108C22.187 11.9221 22.6755 11.8249 23.1688 11.8249C23.6621 11.8249 24.1506 11.9221 24.6064 12.1108C25.0621 12.2996 25.4762 12.5763 25.8251 12.9252C26.1739 13.274 26.4506 13.6881 26.6394 14.1439C26.8282 14.5996 26.9253 15.0881 26.9253 15.5814C26.9253 16.0747 26.8282 16.5632 26.6394 17.019C26.4506 17.4747 26.1739 17.8888 25.8251 18.2377L15.2126 28.8377C15.1005 28.9685 14.9626 29.0748 14.8075 29.1498C14.6524 29.2248 14.4835 29.267 14.3114 29.2736C14.1392 29.2803 13.9676 29.2513 13.8072 29.1884C13.6468 29.1256 13.5011 29.0303 13.3792 28.9085C13.2574 28.7866 13.1621 28.641 13.0993 28.4806C13.0364 28.3201 13.0074 28.1485 13.0141 27.9763C13.0207 27.8042 13.0629 27.6353 13.1379 27.4802C13.2129 27.3251 13.3192 27.1872 13.4501 27.0752L24.0501 16.4627C24.2548 16.2235 24.3619 15.9159 24.3497 15.6013C24.3375 15.2867 24.2071 14.9883 23.9845 14.7657C23.7619 14.5431 23.4635 14.4127 23.1489 14.4005C22.8343 14.3884 22.5267 14.4954 22.2876 14.7002L11.6751 25.3002C10.9706 26.0046 10.5748 26.9601 10.5748 27.9564C10.5748 28.9527 10.9706 29.9082 11.6751 30.6127C12.3795 31.3171 13.335 31.7129 14.3313 31.7129C15.3276 31.7129 16.2831 31.3171 16.9876 30.6127L27.5876 20.0002C28.726 18.8214 29.356 17.2426 29.3418 15.6039C29.3275 13.9652 28.6702 12.3976 27.5114 11.2388C26.3526 10.08 24.785 9.42268 23.1463 9.40844C21.5076 9.3942 19.9288 10.0242 18.7501 11.1627L12.5626 17.4127C12.3284 17.6455 12.0115 17.7761 11.6813 17.7761C11.3511 17.7761 11.0343 17.6455 10.8001 17.4127C10.6829 17.2964 10.5899 17.1582 10.5264 17.0059C10.463 16.8535 10.4303 16.6902 10.4303 16.5252C10.4303 16.3601 10.463 16.1968 10.5264 16.0444C10.5899 15.8921 10.6829 15.7539 10.8001 15.6377L16.9876 9.38765C18.6286 7.74663 20.8543 6.82471 23.1751 6.82471C25.4958 6.82471 27.7215 7.74663 29.3626 9.38765C31.0036 11.0287 31.9255 13.2544 31.9255 15.5752C31.9255 17.8959 31.0036 20.1216 29.3626 21.7627L18.7501 32.3752C18.1686 32.9552 17.4785 33.4149 16.7192 33.728C15.9599 34.0412 15.1464 34.2016 14.3251 34.2002Z" fill="#A098AE"/>
								</svg>

							</button>
							<button type="button" class="btn btn-secondary rounded text-white">
								<svg class="" width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.58106 13.6267L10.5819 12.2265C11.2071 12.1016 11.2071 11.8984 10.5819 11.7735L3.58106 10.3732C3.16406 10.29 2.75793 9.88348 2.67468 9.46686L1.27443 2.46599C1.14918 1.84049 1.51781 1.54986 2.09718 1.81724L23.4606 11.6771C23.8464 11.8552 23.8464 12.1447 23.4606 12.3229L2.09718 22.1827C1.51781 22.4501 1.14918 22.1595 1.27443 21.534L2.67468 14.5331C2.75793 14.1165 3.16406 13.71 3.58106 13.6267Z" fill="white"/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 chat-right-area col-md-6">
				<a href="javascript:void(0);" class="chat-rightarea-btn"><i class="fas fa-chevron-left"></i></a>
				<div class="card share-widget dlab-scroll" id="share-widget">
					<div class="card-body">
						<div class="chat-icon">
							<ul>
								<li><a href="javascript:void(0);">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M22.8 14.865C22.6275 14.595 22.35 14.4075 22.0275 14.355L14.9325 13.215C14.6025 13.1625 14.265 13.26 14.01 13.485C13.4475 13.98 12.9975 14.565 12.6675 15.21C11.865 14.7525 11.13 14.19 10.47 13.53C9.81001 12.87 9.24751 12.135 8.78998 11.3325C9.43501 11.0025 10.02 10.5525 10.515 9.99002C10.74 9.73499 10.8375 9.39748 10.785 9.06748L9.64499 1.9725C9.59249 1.65001 9.40499 1.37246 9.135 1.19998C8.625 0.877485 8.0625 0.66 7.51501 0.547485C7.09501 0.43497 6.63749 0.375 6.16498 0.375C2.97748 0.375 0.375 2.97748 0.375 6.16498C0.375 15.795 8.205 23.625 17.835 23.625C21.0225 23.625 23.625 21.0225 23.625 17.835C23.625 17.3625 23.565 16.905 23.4675 16.545C23.34 15.9375 23.1225 15.375 22.8 14.865Z" fill="#374557"/>
									</svg>
								</a></li>
								<li><a href="javascript:void(0);">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.5 8.625V17.625C16.4995 18.0227 16.3414 18.404 16.0602 18.6852C15.779 18.9664 15.3977 19.1245 15 19.125H4.5C3.50579 19.1239 2.55262 18.7284 1.84961 18.0254C1.14659 17.3224 0.751137 16.3692 0.75 15.375V6.375C0.750455 5.97731 0.908636 5.59605 1.18984 5.31484C1.47105 5.03364 1.85231 4.87545 2.25 4.875H12.75C13.7442 4.87614 14.6974 5.27159 15.4004 5.97461C16.1034 6.67762 16.4989 7.63079 16.5 8.625ZM22.8765 6.85135C22.7628 6.78543 22.6339 6.75051 22.5025 6.75006C22.3712 6.74961 22.242 6.78365 22.1279 6.84879L18.3779 8.99167C18.2631 9.05727 18.1677 9.15205 18.1013 9.26641C18.035 9.38078 18 9.51066 18 9.64288V14.3571C18 14.4893 18.035 14.6192 18.1013 14.7336C18.1677 14.8479 18.2631 14.9427 18.3779 15.0083L22.1279 17.1512C22.242 17.2164 22.3712 17.2504 22.5025 17.25C22.6339 17.2495 22.7628 17.2146 22.8765 17.1487C22.9901 17.0827 23.0844 16.9881 23.1499 16.8743C23.2155 16.7604 23.25 16.6314 23.25 16.5V7.5C23.25 7.36863 23.2155 7.23957 23.15 7.12573C23.0844 7.01189 22.9901 6.91727 22.8765 6.85135Z" fill="#374557"/>
									</svg>
								</a></li>
								<li><a href="javascript:void(0);">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.0012 9.36C11.6543 9.36 11.3109 9.42832 10.9904 9.56105C10.67 9.69378 10.3788 9.88833 10.1335 10.1336C9.88829 10.3788 9.69374 10.67 9.56101 10.9905C9.42828 11.3109 9.35996 11.6544 9.35996 12.0012C9.35996 12.348 9.42828 12.6915 9.56101 13.0119C9.69374 13.3324 9.88829 13.6236 10.1335 13.8688C10.3788 14.1141 10.67 14.3086 10.9904 14.4413C11.3109 14.5741 11.6543 14.6424 12.0012 14.6424C12.7017 14.6422 13.3734 14.3638 13.8686 13.8684C14.3638 13.373 14.6419 12.7011 14.6418 12.0006C14.6416 11.3001 14.3632 10.6284 13.8677 10.1332C13.3723 9.63796 12.7004 9.35984 12 9.36H12.0012ZM3.60116 9.36C3.25431 9.36 2.91086 9.42832 2.59042 9.56105C2.26997 9.69378 1.97881 9.88833 1.73355 10.1336C1.48829 10.3788 1.29374 10.67 1.16101 10.9905C1.02828 11.3109 0.959961 11.6544 0.959961 12.0012C0.959961 12.348 1.02828 12.6915 1.16101 13.0119C1.29374 13.3324 1.48829 13.6236 1.73355 13.8688C1.97881 14.1141 2.26997 14.3086 2.59042 14.4413C2.91086 14.5741 3.25431 14.6424 3.60116 14.6424C4.30165 14.6422 4.97339 14.3638 5.4686 13.8684C5.9638 13.373 6.24192 12.7011 6.24176 12.0006C6.2416 11.3001 5.96318 10.6284 5.46775 10.1332C4.97231 9.63796 4.30045 9.35984 3.59996 9.36H3.60116ZM20.4012 9.36C20.0543 9.36 19.7109 9.42832 19.3904 9.56105C19.07 9.69378 18.7788 9.88833 18.5336 10.1336C18.2883 10.3788 18.0937 10.67 17.961 10.9905C17.8283 11.3109 17.76 11.6544 17.76 12.0012C17.76 12.348 17.8283 12.6915 17.961 13.0119C18.0937 13.3324 18.2883 13.6236 18.5336 13.8688C18.7788 14.1141 19.07 14.3086 19.3904 14.4413C19.7109 14.5741 20.0543 14.6424 20.4012 14.6424C21.1017 14.6422 21.7734 14.3638 22.2686 13.8684C22.7638 13.373 23.0419 12.7011 23.0418 12.0006C23.0416 11.3001 22.7632 10.6284 22.2677 10.1332C21.7723 9.63796 21.1005 9.35984 20.4 9.36H20.4012Z" fill="#374557"/>
									</svg>
								</a></li>
							</ul>
						</div>
						<div class="share-files">
							<div class="widget-heading d-flex justify-content-between mt-4">
								<h4 class="m-0 fs-18 font-w600">Shared Files</h4>
								<a href="javascript:void(0);" class="btn-link text-primary fs-14 ">View all</a>
							</div>
							<ul class="file-list">
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.4928 23.625C20.1153 23.625 20.6178 23.1225 20.6178 22.5V6.95247C20.6178 6.80251 20.5353 6.53247 20.5353 6.52501C20.4753 6.38251 20.3928 6.26248 20.2878 6.15747L14.8353 0.705C14.7303 0.599992 14.6103 0.5175 14.4678 0.457485C14.4603 0.457485 14.1828 0.374992 14.0403 0.374992H4.50781C3.8853 0.374992 3.38281 0.877477 3.38281 1.49999V22.5C3.38281 23.1225 3.8853 23.625 4.50781 23.625H19.4928V23.625ZM5.63281 2.625H12.9153V6.95247C12.9153 7.57499 13.4178 8.07747 14.0403 8.07747H18.3678V21.375H5.63281V2.625Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">File.doc</h4>
											<span>2 March 2021, 13:45 PM</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w600">1,5 Mb</h4>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.4928 23.625C20.1153 23.625 20.6178 23.1225 20.6178 22.5V6.95247C20.6178 6.80251 20.5353 6.53247 20.5353 6.52501C20.4753 6.38251 20.3928 6.26248 20.2878 6.15747L14.8353 0.705C14.7303 0.599992 14.6103 0.5175 14.4678 0.457485C14.4603 0.457485 14.1828 0.374992 14.0403 0.374992H4.50781C3.8853 0.374992 3.38281 0.877477 3.38281 1.49999V22.5C3.38281 23.1225 3.8853 23.625 4.50781 23.625H19.4928V23.625ZM5.63281 2.625H12.9153V6.95247C12.9153 7.57499 13.4178 8.07747 14.0403 8.07747H18.3678V21.375H5.63281V2.625Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">File.doc</h4>
											<span>2 March 2021, 13:45 PM</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w600">1,5 Mb</h4>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.4928 23.625C20.1153 23.625 20.6178 23.1225 20.6178 22.5V6.95247C20.6178 6.80251 20.5353 6.53247 20.5353 6.52501C20.4753 6.38251 20.3928 6.26248 20.2878 6.15747L14.8353 0.705C14.7303 0.599992 14.6103 0.5175 14.4678 0.457485C14.4603 0.457485 14.1828 0.374992 14.0403 0.374992H4.50781C3.8853 0.374992 3.38281 0.877477 3.38281 1.49999V22.5C3.38281 23.1225 3.8853 23.625 4.50781 23.625H19.4928V23.625ZM5.63281 2.625H12.9153V6.95247C12.9153 7.57499 13.4178 8.07747 14.0403 8.07747H18.3678V21.375H5.63281V2.625Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">File.doc</h4>
											<span>2 March 2021, 13:45 PM</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w600">1,5 Mb</h4>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.4928 23.625C20.1153 23.625 20.6178 23.1225 20.6178 22.5V6.95247C20.6178 6.80251 20.5353 6.53247 20.5353 6.52501C20.4753 6.38251 20.3928 6.26248 20.2878 6.15747L14.8353 0.705C14.7303 0.599992 14.6103 0.5175 14.4678 0.457485C14.4603 0.457485 14.1828 0.374992 14.0403 0.374992H4.50781C3.8853 0.374992 3.38281 0.877477 3.38281 1.49999V22.5C3.38281 23.1225 3.8853 23.625 4.50781 23.625H19.4928V23.625ZM5.63281 2.625H12.9153V6.95247C12.9153 7.57499 13.4178 8.07747 14.0403 8.07747H18.3678V21.375H5.63281V2.625Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">File.doc</h4>
											<span>2 March 2021, 13:45 PM</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w600">1,5 Mb</h4>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.4928 23.625C20.1153 23.625 20.6178 23.1225 20.6178 22.5V6.95247C20.6178 6.80251 20.5353 6.53247 20.5353 6.52501C20.4753 6.38251 20.3928 6.26248 20.2878 6.15747L14.8353 0.705C14.7303 0.599992 14.6103 0.5175 14.4678 0.457485C14.4603 0.457485 14.1828 0.374992 14.0403 0.374992H4.50781C3.8853 0.374992 3.38281 0.877477 3.38281 1.49999V22.5C3.38281 23.1225 3.8853 23.625 4.50781 23.625H19.4928V23.625ZM5.63281 2.625H12.9153V6.95247C12.9153 7.57499 13.4178 8.07747 14.0403 8.07747H18.3678V21.375H5.63281V2.625Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">File.doc</h4>
											<span>2 March 2021, 13:45 PM</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w600">1,5 Mb</h4>
								</li>
							</ul>
						</div>
						<div class="share-files">
							<div class="widget-heading  d-flex justify-content-between mt-4">
								<h4 class="m-0 fs-18 font-w600">Shared Links</h4>
								<a href="javascript:void(0);" class="btn-link text-primary fs-14 ">View all</a>
							</div>
							<ul class="file-list">
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.7799 0.377472C13.6825 0.377472 11.7129 1.19142 10.2337 2.67105L9.08939 3.81569C8.81478 4.0903 8.66395 4.45509 8.66395 4.84323C8.66395 5.23215 8.8151 5.59689 9.08976 5.87082C9.63935 6.42009 10.5963 6.42009 11.1452 5.87082L12.2892 4.72619C14.2137 2.80235 17.3457 2.80303 19.2703 4.72619C20.2042 5.66007 20.7183 6.89979 20.7183 8.21691C20.7183 9.53399 20.2038 10.7738 19.2699 11.7076L18.1256 12.8523C17.851 13.1269 17.7002 13.4917 17.7002 13.8799C17.7002 14.2687 17.8514 14.6335 18.126 14.9074C18.4006 15.182 18.7654 15.3332 19.1536 15.3332C19.5417 15.3332 19.9068 15.182 20.1815 14.9074L21.3254 13.7628C22.8082 12.2796 23.625 10.3103 23.625 8.2169C23.625 6.12345 22.8082 4.1542 21.3254 2.67105C19.8465 1.19142 17.8773 0.377472 15.7799 0.377472ZM8.21369 23.6225C10.3107 23.6225 12.2803 22.8078 13.7599 21.3289L14.9042 20.1843C15.1788 19.9097 15.3296 19.5449 15.3296 19.1567C15.3296 18.7679 15.1785 18.4031 14.9039 18.1292C14.3542 17.5792 13.3973 17.5806 12.8484 18.1292L11.7044 19.2738C9.7813 21.1983 6.64892 21.1991 4.72297 19.2738C2.79844 17.3493 2.79844 14.2169 4.72297 12.2924L5.86761 11.1477C6.43427 10.5814 6.43427 9.65885 5.86761 9.0926C5.30131 8.5263 4.37878 8.5263 3.81248 9.0926L2.66785 10.2372C-0.389282 13.2951 -0.389282 18.2711 2.66785 21.3289C4.14673 22.8078 6.11635 23.6225 8.21369 23.6225Z" fill="#374557"/>
												<path d="M7.06253 16.9348C7.33714 17.2095 7.70189 17.3606 8.09008 17.3606C8.47863 17.3606 8.84369 17.2095 9.11762 16.9348L16.9315 9.12026C17.2061 8.84564 17.3573 8.4809 17.3573 8.09271C17.3573 7.70453 17.2061 7.33978 16.9315 7.06512C16.3826 6.51585 15.4246 6.51585 14.8764 7.06512L7.06253 14.8797C6.78787 15.1544 6.63672 15.5191 6.63672 15.9073C6.63672 16.2955 6.78787 16.6602 7.06253 16.9348Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">facebook.com</h4>
											<span>2 March 2021</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w400">13:45 PM</h4>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.7799 0.377472C13.6825 0.377472 11.7129 1.19142 10.2337 2.67105L9.08939 3.81569C8.81478 4.0903 8.66395 4.45509 8.66395 4.84323C8.66395 5.23215 8.8151 5.59689 9.08976 5.87082C9.63935 6.42009 10.5963 6.42009 11.1452 5.87082L12.2892 4.72619C14.2137 2.80235 17.3457 2.80303 19.2703 4.72619C20.2042 5.66007 20.7183 6.89979 20.7183 8.21691C20.7183 9.53399 20.2038 10.7738 19.2699 11.7076L18.1256 12.8523C17.851 13.1269 17.7002 13.4917 17.7002 13.8799C17.7002 14.2687 17.8514 14.6335 18.126 14.9074C18.4006 15.182 18.7654 15.3332 19.1536 15.3332C19.5417 15.3332 19.9068 15.182 20.1815 14.9074L21.3254 13.7628C22.8082 12.2796 23.625 10.3103 23.625 8.2169C23.625 6.12345 22.8082 4.1542 21.3254 2.67105C19.8465 1.19142 17.8773 0.377472 15.7799 0.377472ZM8.21369 23.6225C10.3107 23.6225 12.2803 22.8078 13.7599 21.3289L14.9042 20.1843C15.1788 19.9097 15.3296 19.5449 15.3296 19.1567C15.3296 18.7679 15.1785 18.4031 14.9039 18.1292C14.3542 17.5792 13.3973 17.5806 12.8484 18.1292L11.7044 19.2738C9.7813 21.1983 6.64892 21.1991 4.72297 19.2738C2.79844 17.3493 2.79844 14.2169 4.72297 12.2924L5.86761 11.1477C6.43427 10.5814 6.43427 9.65885 5.86761 9.0926C5.30131 8.5263 4.37878 8.5263 3.81248 9.0926L2.66785 10.2372C-0.389282 13.2951 -0.389282 18.2711 2.66785 21.3289C4.14673 22.8078 6.11635 23.6225 8.21369 23.6225Z" fill="#374557"/>
												<path d="M7.06253 16.9348C7.33714 17.2095 7.70189 17.3606 8.09008 17.3606C8.47863 17.3606 8.84369 17.2095 9.11762 16.9348L16.9315 9.12026C17.2061 8.84564 17.3573 8.4809 17.3573 8.09271C17.3573 7.70453 17.2061 7.33978 16.9315 7.06512C16.3826 6.51585 15.4246 6.51585 14.8764 7.06512L7.06253 14.8797C6.78787 15.1544 6.63672 15.5191 6.63672 15.9073C6.63672 16.2955 6.78787 16.6602 7.06253 16.9348Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">twitter.com</h4>
											<span>2 March 2021</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w400">13:45 PM</h4>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.7799 0.377472C13.6825 0.377472 11.7129 1.19142 10.2337 2.67105L9.08939 3.81569C8.81478 4.0903 8.66395 4.45509 8.66395 4.84323C8.66395 5.23215 8.8151 5.59689 9.08976 5.87082C9.63935 6.42009 10.5963 6.42009 11.1452 5.87082L12.2892 4.72619C14.2137 2.80235 17.3457 2.80303 19.2703 4.72619C20.2042 5.66007 20.7183 6.89979 20.7183 8.21691C20.7183 9.53399 20.2038 10.7738 19.2699 11.7076L18.1256 12.8523C17.851 13.1269 17.7002 13.4917 17.7002 13.8799C17.7002 14.2687 17.8514 14.6335 18.126 14.9074C18.4006 15.182 18.7654 15.3332 19.1536 15.3332C19.5417 15.3332 19.9068 15.182 20.1815 14.9074L21.3254 13.7628C22.8082 12.2796 23.625 10.3103 23.625 8.2169C23.625 6.12345 22.8082 4.1542 21.3254 2.67105C19.8465 1.19142 17.8773 0.377472 15.7799 0.377472ZM8.21369 23.6225C10.3107 23.6225 12.2803 22.8078 13.7599 21.3289L14.9042 20.1843C15.1788 19.9097 15.3296 19.5449 15.3296 19.1567C15.3296 18.7679 15.1785 18.4031 14.9039 18.1292C14.3542 17.5792 13.3973 17.5806 12.8484 18.1292L11.7044 19.2738C9.7813 21.1983 6.64892 21.1991 4.72297 19.2738C2.79844 17.3493 2.79844 14.2169 4.72297 12.2924L5.86761 11.1477C6.43427 10.5814 6.43427 9.65885 5.86761 9.0926C5.30131 8.5263 4.37878 8.5263 3.81248 9.0926L2.66785 10.2372C-0.389282 13.2951 -0.389282 18.2711 2.66785 21.3289C4.14673 22.8078 6.11635 23.6225 8.21369 23.6225Z" fill="#374557"/>
												<path d="M7.06253 16.9348C7.33714 17.2095 7.70189 17.3606 8.09008 17.3606C8.47863 17.3606 8.84369 17.2095 9.11762 16.9348L16.9315 9.12026C17.2061 8.84564 17.3573 8.4809 17.3573 8.09271C17.3573 7.70453 17.2061 7.33978 16.9315 7.06512C16.3826 6.51585 15.4246 6.51585 14.8764 7.06512L7.06253 14.8797C6.78787 15.1544 6.63672 15.5191 6.63672 15.9073C6.63672 16.2955 6.78787 16.6602 7.06253 16.9348Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">google.com</h4>
											<span>2 March 2021</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w400">13:45 PM</h4>
								</li>
								<li>
									<div class="d-flex align-items-center">
										<span class="file">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.7799 0.377472C13.6825 0.377472 11.7129 1.19142 10.2337 2.67105L9.08939 3.81569C8.81478 4.0903 8.66395 4.45509 8.66395 4.84323C8.66395 5.23215 8.8151 5.59689 9.08976 5.87082C9.63935 6.42009 10.5963 6.42009 11.1452 5.87082L12.2892 4.72619C14.2137 2.80235 17.3457 2.80303 19.2703 4.72619C20.2042 5.66007 20.7183 6.89979 20.7183 8.21691C20.7183 9.53399 20.2038 10.7738 19.2699 11.7076L18.1256 12.8523C17.851 13.1269 17.7002 13.4917 17.7002 13.8799C17.7002 14.2687 17.8514 14.6335 18.126 14.9074C18.4006 15.182 18.7654 15.3332 19.1536 15.3332C19.5417 15.3332 19.9068 15.182 20.1815 14.9074L21.3254 13.7628C22.8082 12.2796 23.625 10.3103 23.625 8.2169C23.625 6.12345 22.8082 4.1542 21.3254 2.67105C19.8465 1.19142 17.8773 0.377472 15.7799 0.377472ZM8.21369 23.6225C10.3107 23.6225 12.2803 22.8078 13.7599 21.3289L14.9042 20.1843C15.1788 19.9097 15.3296 19.5449 15.3296 19.1567C15.3296 18.7679 15.1785 18.4031 14.9039 18.1292C14.3542 17.5792 13.3973 17.5806 12.8484 18.1292L11.7044 19.2738C9.7813 21.1983 6.64892 21.1991 4.72297 19.2738C2.79844 17.3493 2.79844 14.2169 4.72297 12.2924L5.86761 11.1477C6.43427 10.5814 6.43427 9.65885 5.86761 9.0926C5.30131 8.5263 4.37878 8.5263 3.81248 9.0926L2.66785 10.2372C-0.389282 13.2951 -0.389282 18.2711 2.66785 21.3289C4.14673 22.8078 6.11635 23.6225 8.21369 23.6225Z" fill="#374557"/>
												<path d="M7.06253 16.9348C7.33714 17.2095 7.70189 17.3606 8.09008 17.3606C8.47863 17.3606 8.84369 17.2095 9.11762 16.9348L16.9315 9.12026C17.2061 8.84564 17.3573 8.4809 17.3573 8.09271C17.3573 7.70453 17.2061 7.33978 16.9315 7.06512C16.3826 6.51585 15.4246 6.51585 14.8764 7.06512L7.06253 14.8797C6.78787 15.1544 6.63672 15.5191 6.63672 15.9073C6.63672 16.2955 6.78787 16.6602 7.06253 16.9348Z" fill="#374557"/>
											</svg>
										</span>
										<div class="ms-2 fl-info">
											<h4 class="m-0 fs-14 font-w600">dribbble.com</h4>
											<span>2 March 2021</span>
										</div>
									</div>
									<h4 class="m-0 fs-14 font-w400">13:45 PM</h4>
								</li>
							</ul>
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