<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Charts</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo !empty($page_title) ? $page_title : ''; ?></a></li>
			</ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Donught Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="morris_donught" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="morris_line" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div>
                            <div class="card-body">
								<div id="morris_bar" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="line_chart_2" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="morris_bar_stalked" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="morris_area" class="morris_chart_height"></div>
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