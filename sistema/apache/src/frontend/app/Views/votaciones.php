<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-xxl-6 col-md-6">
				<div class="card instructors-box">
					<div class="card-body text-center pb-3">
						<div class="instructors-media">
							<img id="foto1" src="" alt="Foto Participante 1">
							<div class="instructors-media-info">
								<h4 id="nombre1"></h4>
								<ul class="d-flex align-items-center raiting my-0 justify-content-center">
									<li><span class="font-w500">5.0</span><i class="fas fa-star text-orange ms-2"></i>
									</li>
									<li>Review (1k)</li>
								</ul>
								<div class="custome-badge">
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria1_1"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria1_2"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria1_3"></span></a>
								</div>
								<div class="d-flex justify-content-center my-3">
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/medal.png'); ?>" alt="">
											Puesto actual
										</span>
										<h4 id="puesto1"></h4>
									</div>
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/svg/achievement.svg'); ?>" alt="">
											Votos
										</span>
										<h4 id="votos1"></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer pt-0 border-0">
					<a href="javascript:void(0);" class="btn btn-secondary btn-block" id="btnvota1" onclick="votarPorParticipante(1)">Votar</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-xxl-6 col-md-6">
				<div class="card instructors-box">
					<div class="card-body text-center pb-3">
						<div class="instructors-media">
							<img id="foto2" src="" alt="Foto Participante 2">
							<div class="instructors-media-info">
							<h4 id="nombre2"></h4>
								<ul class="d-flex align-items-center raiting my-0 justify-content-center">
									<li><span class="font-w500">5.0</span><i class="fas fa-star text-orange ms-2"></i>
									</li>
									<li>Review (1k)</li>
								</ul>
								<div class="custome-badge">
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria2_1"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria2_2"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria2_3"></span></a>
								</div>
								<div class="d-flex justify-content-center my-3">
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/medal.png'); ?>" alt="">
											Puesto actual
										</span>
										<h4 id="puesto2"></h4>
									</div>
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/svg/achievement.svg'); ?>" alt="">
											Votos
										</span>
										<h4 id="votos2"></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer pt-0 border-0">
						<a href="javascript:void(0);" class="btn btn-secondary btn-block" id="btnvota2" onclick="votarPorParticipante(2)">Votar</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-xxl-6 col-md-6">
				<div class="card instructors-box">
					<div class="card-body text-center pb-3">
						<div class="instructors-media">
							<img id="foto3" src="" alt="Foto Participante 3">
							<div class="instructors-media-info">
							<h4 id="nombre3"></h4>
								<ul class="d-flex align-items-center raiting my-0 justify-content-center">
									<li><span class="font-w500">5.0</span><i class="fas fa-star text-orange ms-2"></i>
									</li>
									<li>Review (1k)</li>
								</ul>
								<div class="custome-badge">
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria3_1"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria3_2"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria3_3"></span></a>
								</div>
								<div class="d-flex justify-content-center my-3">
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/medal.png'); ?>" alt="">
											Puesto actual
										</span>
										<h4 id="puesto3"></h4>
									</div>
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/svg/achievement.svg'); ?>" alt="">
											Votos
										</span>
										<h4 id="votos3"></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer pt-0 border-0">
						<a href="javascript:void(0);" class="btn btn-secondary btn-block" id="btnvota3" onclick="votarPorParticipante(3)">Votar</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-xxl-6 col-md-6">
				<div class="card instructors-box">
					<div class="card-body text-center pb-3">
						<div class="instructors-media">
							<img id="foto4" src="" alt="Foto Participante 4">
							<div class="instructors-media-info">
							<h4 id="nombre4"></h4>
								<ul class="d-flex align-items-center raiting my-0 justify-content-center">
									<li><span class="font-w500">5.0</span><i class="fas fa-star text-orange ms-2"></i>
									</li>
									<li>Review (1k)</li>
								</ul>
								<div class="custome-badge">
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria4_1"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria4_2"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria4_3"></span></a>
								</div>
								<div class="d-flex justify-content-center my-3">
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/medal.png'); ?>" alt="">
											Puesto actual
										</span>
										<h4 id="puesto4"></h4>
									</div>
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/svg/achievement.svg'); ?>" alt="">
											Votos
										</span>
										<h4 id="votos4"></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer pt-0 border-0">
						<a href="javascript:void(0);" class="btn btn-secondary btn-block" id="btnvota4" onclick="votarPorParticipante(4)">Votar</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-xxl-6 col-md-6">
				<div class="card instructors-box">
					<div class="card-body text-center pb-3">
						<div class="instructors-media">
							<img id="foto5" src="" alt="Foto Participante 5">
							<div class="instructors-media-info">
							<h4 id="nombre5"></h4>
								<ul class="d-flex align-items-center raiting my-0 justify-content-center">
									<li><span class="font-w500">5.0</span><i class="fas fa-star text-orange ms-2"></i>
									</li>
									<li>Review (1k)</li>
								</ul>
								<div class="custome-badge">
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria5_1"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria5_2"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria5_3"></span></a>
								</div>
								<div class="d-flex justify-content-center my-3">
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/medal.png'); ?>" alt="">
											Puesto actual
										</span>
										<h4 id="puesto5"></h4>
									</div>
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/svg/achievement.svg'); ?>" alt="">
											Votos
										</span>
										<h4 id="votos5"></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer pt-0 border-0">
						<a href="javascript:void(0);" class="btn btn-secondary btn-block" id="btnvota5" onclick="votarPorParticipante(5)">Votar</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-xxl-6 col-md-6">
				<div class="card instructors-box">
					<div class="card-body text-center pb-3">
						<div class="instructors-media">
							<img id="foto6" src="" alt="Foto Participante 6">
							<div class="instructors-media-info">
							<h4 id="nombre6"></h4>
								<ul class="d-flex align-items-center raiting my-0 justify-content-center">
									<li><span class="font-w500">5.0</span><i class="fas fa-star text-orange ms-2"></i>
									</li>
									<li>Review (1k)</li>
								</ul>
								<div class="custome-badge">
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria6_1"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria6_2"></span></a>
									<a href="javascript:void0;"><span class="badge badge-xl" id="categoria6_3"></span></a>
								</div>
								<div class="d-flex justify-content-center my-3">
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/medal.png'); ?>" alt="">
											Puesto actual
										</span>
										<h4 id="puesto6"></h4>
									</div>
									<div class="info-box">
										<span>
											<img src="<?php echo base_url('public/assets/images/svg/achievement.svg'); ?>" alt="">
											Votos
										</span>
										<h4 id="votos6"></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer pt-0 border-0">
						<a href="javascript:void(0);" class="btn btn-secondary btn-block" id="btnvota6" onclick="votarPorParticipante(6)">Votar</a>
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