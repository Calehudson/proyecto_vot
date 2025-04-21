<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Map</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo !empty($page_title) ? $page_title : ''; ?></a></li>
			</ol>
        </div>
        <!-- row -->

        <!-- Vectormap -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">World Map</h4>
                    </div>
                    <div class="card-body">
                        <div id="world-map"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">USA</h4>
                    </div>
                    <div class="card-body">
                        <div id="usa" class="height400"></div>
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