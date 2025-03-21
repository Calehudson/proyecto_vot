<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo !empty($page_title) ? $page_title : ''; ?></a></li>
			</ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid" src="<?php echo base_url('public/assets/images/product/1.jpg'); ?>" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="second">
                                        <img class="img-fluid" src="<?php echo base_url('public/assets/images/product/2.jpg'); ?>" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="third">
                                        <img class="img-fluid" src="<?php echo base_url('public/assets/images/product/3.jpg'); ?>" alt="">
                                    </div>
									<div role="tabpanel" class="tab-pane fade" id="for">
                                        <img class="img-fluid" src="<?php echo base_url('public/assets/images/product/4.jpg'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                        <li role="presentation" class="show">
                                            <a href="#first" role="tab" data-bs-toggle="tab">
                                                <img class="img-fluid" src="<?php echo base_url('public/assets/images/tab/1.jpg'); ?>" alt="" width="50">
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="<?php echo base_url('public/assets/images/tab/2.jpg'); ?>" alt="" width="50"></a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#third" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="<?php echo base_url('public/assets/images/tab/3.jpg'); ?>" alt="" width="50"></a>
                                        </li>
										<li role="presentation">
                                            <a href="#for" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="<?php echo base_url('public/assets/images/tab/4.jpg'); ?>" alt="" width="50"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h4>Solid Women's V-neck Dark T-Shirt</h4>
                                        <div class="comment-review star-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>

											</ul>
											<span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										</div>
										<div class="d-table mb-2">
											<p class="price float-start d-block">$325.00</p>
                                        </div>
                                        <p>Availability: <span class="item"> In stock <i
                                                    class="fa fa-shopping-basket"></i></span>
                                        </p>
                                        <p>Product code: <span class="item">0405689</span> </p>
                                        <p>Brand: <span class="item">Lee</span></p>
                                        <p>Product tags:&nbsp;&nbsp;
                                            <span class="badge badge-success light">bags</span>
                                            <span class="badge badge-success light">clothes</span>
                                            <span class="badge badge-success light">shoes</span>
                                            <span class="badge badge-success light">dresses</span>
                                        </p>
                                        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
										<div class="d-flex align-items-end flex-wrap mt-4">
											<div class="filtaring-area me-3">
												<div class="size-filter">
													<h4 class="m-b-15">Select size</h4>
													
													
													<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
													  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
													  <label class="btn btn-outline-primary" for="btnradio1">XS</label>

													  <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
													  <label class="btn btn-outline-primary" for="btnradio2">SM</label>

													  <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
													  <label class="btn btn-outline-primary" for="btnradio3">MD</label>
													  
													  <input type="radio" class="btn-check" name="btnradio" id="btnradio4">
													  <label class="btn btn-outline-primary" for="btnradio4">LG</label>
													  
													  <input type="radio" class="btn-check" name="btnradio" id="btnradio5">
													  <label class="btn btn-outline-primary" for="btnradio5">XL</label>
													</div>
													
												</div>
											</div>
											<!--Quantity start-->
											<div class="col-2 px-0  mb-2 me-3">
												<input type="number" name="num" class="form-control input-btn input-number" value="1">
											</div>
											<!--Quanatity End-->
											<div class="shopping-cart  mb-2 me-3">
												<a class="btn btn-primary" href="javascript:void();"><i
														class="fa fa-shopping-basket me-2"></i>Add
													to cart</a>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- review -->
			<div class="modal fade" id="reviewModal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Review</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="<?php echo base_url('public/assets/images/avatar/1.jpg'); ?>" alt="DexignZone">
								</div>
								<div class="mb-3">
									<div class="rating-widget mb-4 text-center">
										<!-- Rating Stars Box -->
										<div class="rating-stars">
											<ul id="stars">
												<li class="star" title="Poor" data-value="1">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Fair" data-value="2">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Good" data-value="3">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Excellent" data-value="4">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="WOW!!!" data-value="5">
													<i class="fa fa-star fa-fw"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="mb-3">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
								<button class="btn btn-success btn-block">RATE</button>
							</form>
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