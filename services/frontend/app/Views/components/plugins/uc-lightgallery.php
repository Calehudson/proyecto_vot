<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)"> Plugins</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo !empty($page_title) ? $page_title : ''; ?></a></li>
			</ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
					<div class="card-header">
						<h4 class="card-title">Light Gallery</h4>
					</div>
					<div class="card-body pb-1">
						<div id="lightgallery" class="row">
							<a href="<?php echo base_url('public/assets/images/big/img1.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img1.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img1.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img1.jpg'); ?>" style="width:100%;"/>
							</a>
							<a href="<?php echo base_url('public/assets/images/big/img2.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img2.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img2.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img2.jpg'); ?>" style="width:100%;" />
							</a>
							<a href="<?php echo base_url('public/assets/images/big/img3.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img3.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img3.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img3.jpg'); ?>" style="width:100%;" />
							</a>
							<a href="<?php echo base_url('public/assets/images/big/img4.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img4.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img4.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img4.jpg'); ?>" style="width:100%;" />
							</a>
							<a href="<?php echo base_url('public/assets/images/big/img5.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img5.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img5.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img5.jpg'); ?>" style="width:100%;"/>
							</a>
							<a href="<?php echo base_url('public/assets/images/big/img6.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img6.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img6.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img6.jpg'); ?>" style="width:100%;" />
							</a>
							<a href="<?php echo base_url('public/assets/images/big/img7.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img7.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img7.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img7.jpg'); ?>" style="width:100%;" />
							</a>
							<a href="<?php echo base_url('public/assets/images/big/img8.jpg'); ?>" data-exthumbimage="<?php echo base_url('public/assets/images/big/img8.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/big/img8.jpg'); ?>" class="col-lg-3 col-md-6 mb-4">
								<img src="<?php echo base_url('public/assets/images/big/img8.jpg'); ?>" style="width:100%;" />
							</a>
						</div>
					</div>
                </div>
                <!-- /# card -->
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
<?php echo $this->endSection() ?>