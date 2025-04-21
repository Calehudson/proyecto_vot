<?php echo $this->extend('layouts/default') ?>
		
<?php echo $this->section('content') ?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6 col-xxl-12">
				<div class="row">
					<div class="col-xl-12 col-xxl-6">
						<div class="card dlab-join-card h-auto">
							<div class="card-body">
								<div class="dlab-media d-flex justify-content-between">
									<div class="dlab-content">
									<h4>Elige a tu artista preferido</h4>
									<p>Conoce a los participantes, consulta los resultados en vivo y sé parte de la elección de la futura estrella de la música. </p>
									</div>	
									<div class="dlab-img">
										<img src="<?php echo base_url('public/assets/images/cantante.png'); ?>" alt="">
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 bt-order">
						<div class="row">
							<div class="col-xl-4 col-sm-6">
								<div class="dlab-cource bg-secondary">
									<div class="d-flex align-items-center">
										<span class="course-icon">
											<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19 0.25H4C3.00544 0.25 2.05161 0.645088 1.34835 1.34835C0.645088 2.05161 0.25 3.00544 0.25 4V19C0.25 19.9946 0.645088 20.9484 1.34835 21.6517C2.05161 22.3549 3.00544 22.75 4 22.75H19C19.9946 22.75 20.9484 22.3549 21.6517 21.6517C22.3549 20.9484 22.75 19.9946 22.75 19V4C22.75 3.00544 22.3549 2.05161 21.6517 1.34835C20.9484 0.645088 19.9946 0.25 19 0.25ZM16.875 8.5125L11.1625 16.0125C11.0461 16.1638 10.8965 16.2864 10.7253 16.3709C10.5542 16.4554 10.3659 16.4995 10.175 16.5C9.98513 16.501 9.79753 16.4588 9.62643 16.3765C9.45532 16.2942 9.30522 16.174 9.1875 16.025L6.1375 12.1375C6.03655 12.0078 5.96212 11.8595 5.91848 11.7011C5.87484 11.5426 5.86283 11.3772 5.88314 11.2141C5.90346 11.051 5.95569 10.8935 6.03687 10.7506C6.11804 10.6077 6.22657 10.4822 6.35625 10.3812C6.61815 10.1774 6.95032 10.0859 7.27968 10.1269C7.44276 10.1472 7.60025 10.1994 7.74314 10.2806C7.88604 10.3618 8.01155 10.4703 8.1125 10.6L10.15 13.2L14.875 6.95C14.9751 6.81868 15.1002 6.70836 15.2429 6.62536C15.3857 6.54235 15.5434 6.48828 15.7071 6.46622C15.8707 6.44417 16.0371 6.45457 16.1968 6.49682C16.3564 6.53908 16.5062 6.61237 16.6375 6.7125C16.7688 6.81263 16.8791 6.93765 16.9621 7.08042C17.0451 7.22318 17.0992 7.3809 17.1213 7.54456C17.1433 7.70823 17.1329 7.87463 17.0907 8.03427C17.0484 8.19392 16.9751 8.34368 16.875 8.475V8.5125Z" fill="var(--secondary)"/>
											</svg>
										</span>	
										<div class="ms-2">
											<h4 class="mb-0">1.500</h4>
											<span>Visitas</span>
										</div>
									</div>
									<img src="<?php echo base_url('public/assets/images/vector/check.png'); ?>" alt="">
								</div>
							</div>
							<div class="col-xl-4 col-sm-6">
								<div class="dlab-cource">
									<div class="d-flex align-items-center">
										<span class="course-icon">
											<svg width="23" height="23" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14.3201 4.65852H2.86175C2.35544 4.6591 1.87003 4.8592 1.51201 5.21494C1.15399 5.57068 0.952605 6.053 0.952026 6.55609V24.5829C0.952032 24.7573 1.00037 24.9282 1.09175 25.077C1.18312 25.2259 1.31399 25.3468 1.47 25.4266C1.626 25.5063 1.80111 25.5418 1.97609 25.5292C2.15108 25.5166 2.31918 25.4563 2.46195 25.355L8.5901 21.005L14.72 25.355C14.8628 25.4563 15.0309 25.5166 15.2058 25.5292C15.3808 25.5418 15.5559 25.5063 15.7119 25.4265C15.8679 25.3468 15.9988 25.2258 16.0901 25.077C16.1815 24.9282 16.2298 24.7572 16.2298 24.5829V6.55609C16.2292 6.053 16.0278 5.57068 15.6698 5.21494C15.3118 4.8592 14.8264 4.6591 14.3201 4.65852V4.65852Z" fill="#21262E"/>
												<path d="M18.1395 0.863403H5.72635C5.4731 0.863403 5.23023 0.963364 5.05116 1.14129C4.87209 1.31923 4.77148 1.56055 4.77148 1.81218C4.77148 2.06382 4.87209 2.30514 5.05116 2.48307C5.23023 2.661 5.4731 2.76096 5.72635 2.76096H18.1395V20.7878C18.1395 21.0394 18.2401 21.2808 18.4192 21.4587C18.5983 21.6366 18.8412 21.7366 19.0944 21.7366C19.3476 21.7366 19.5905 21.6366 19.7696 21.4587C19.9487 21.2808 20.0493 21.0394 20.0493 20.7878V2.76096C20.0487 2.25788 19.8473 1.77556 19.4893 1.41982C19.1313 1.06408 18.6459 0.863979 18.1395 0.863403V0.863403Z" fill="#21262E"/>
											</svg>
										</span>	
										<div class="ms-2">
											<h4 class="mb-0">1.112</h4>
											<span>Votos emitidos</span>
										</div>
									</div>
									<img src="<?php echo base_url('public/assets/images/vector/bookmarks.png'); ?>" class="bookmarks" alt="">
								</div>
							</div>
							<div class="col-xl-4 col-sm-12">
								<div class="dlab-cource bg-primary">
									<div class="d-flex align-items-center">
										<span class="course-icon">
											<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M13.4999 7.13426C12.1639 7.13426 10.8617 7.55464 9.7778 8.33585C8.69393 9.11705 7.88334 10.2195 7.46084 11.487C7.03834 12.7545 7.02536 14.1228 7.42373 15.3981C7.82209 16.6733 8.61162 17.791 9.68047 18.5926V23.6852C9.68047 24.3605 9.94874 25.0082 10.4263 25.4857C10.9038 25.9632 11.5514 26.2315 12.2268 26.2315H14.7731C15.4484 26.2315 16.096 25.9632 16.5736 25.4857C17.0511 25.0082 17.3194 24.3605 17.3194 23.6852V18.5926C18.3882 17.791 19.1777 16.6733 19.5761 15.3981C19.9745 14.1228 19.9615 12.7545 19.539 11.487C19.1165 10.2195 18.3059 9.11705 17.222 8.33585C16.1382 7.55464 14.836 7.13426 13.4999 7.13426ZM13.4999 5.86111C13.8376 5.86111 14.1614 5.72698 14.4002 5.48822C14.6389 5.24946 14.7731 4.92563 14.7731 4.58797V2.04167C14.7731 1.70401 14.6389 1.38018 14.4002 1.14142C14.1614 0.902659 13.8376 0.768524 13.4999 0.768524C13.1622 0.768524 12.8384 0.902659 12.5997 1.14142C12.3609 1.38018 12.2268 1.70401 12.2268 2.04167V4.58797C12.2268 4.92563 12.3609 5.24946 12.5997 5.48822C12.8384 5.72698 13.1622 5.86111 13.4999 5.86111ZM24.9582 12.2269H22.4119C22.0743 12.2269 21.7505 12.361 21.5117 12.5998C21.2729 12.8385 21.1388 13.1623 21.1388 13.5C21.1388 13.8377 21.2729 14.1615 21.5117 14.4003C21.7505 14.639 22.0743 14.7731 22.4119 14.7731H24.9582C25.2959 14.7731 25.6197 14.639 25.8585 14.4003C26.0973 14.1615 26.2314 13.8377 26.2314 13.5C26.2314 13.1623 26.0973 12.8385 25.8585 12.5998C25.6197 12.361 25.2959 12.2269 24.9582 12.2269ZM4.58788 12.2269H2.04158C1.70392 12.2269 1.38009 12.361 1.14133 12.5998C0.902567 12.8385 0.768433 13.1623 0.768433 13.5C0.768433 13.8377 0.902567 14.1615 1.14133 14.4003C1.38009 14.639 1.70392 14.7731 2.04158 14.7731H4.58788C4.92554 14.7731 5.24937 14.639 5.48813 14.4003C5.72689 14.1615 5.86102 13.8377 5.86102 13.5C5.86102 13.1623 5.72689 12.8385 5.48813 12.5998C5.24937 12.361 4.92554 12.2269 4.58788 12.2269ZM7.97445 6.39584L6.14112 4.58797C5.89294 4.35329 5.5617 4.22682 5.22027 4.23637C4.87884 4.24592 4.55519 4.39071 4.32051 4.63889C4.08584 4.88707 3.95937 5.21831 3.96892 5.55974C3.97847 5.90117 4.12326 6.22482 4.37144 6.45949L6.20477 8.22917C6.3278 8.34797 6.47351 8.44076 6.63319 8.50201C6.79287 8.56325 6.96325 8.5917 7.13417 8.58565C7.30567 8.585 7.47527 8.5497 7.63279 8.48188C7.79031 8.41406 7.9325 8.31511 8.05084 8.19098C8.2781 7.94248 8.39765 7.61407 8.38334 7.27763C8.36902 6.94119 8.222 6.62413 7.97445 6.39584ZM22.6538 4.65162C22.4153 4.4145 22.0926 4.2814 21.7563 4.2814C21.4199 4.2814 21.0972 4.4145 20.8587 4.65162L19.0254 6.39584C18.7882 6.63438 18.6551 6.95706 18.6551 7.29341C18.6551 7.62975 18.7882 7.95244 19.0254 8.19098C19.1437 8.31511 19.2859 8.41406 19.4434 8.48188C19.6009 8.5497 19.7705 8.585 19.942 8.58565C20.2698 8.58435 20.5845 8.45666 20.8205 8.22917L22.6538 6.45949C22.7732 6.34114 22.8679 6.20033 22.9325 6.04518C22.9972 5.89004 23.0304 5.72363 23.0304 5.55556C23.0304 5.38749 22.9972 5.22108 22.9325 5.06594C22.8679 4.91079 22.7732 4.76998 22.6538 4.65162Z" fill="var(--primary)"/>
											</svg>
										</span>	
										<div class="ms-2">
											<h4 class="mb-0">903</h4>
											<span>Interacciones</span>
										</div>
									</div>
									<img src="<?php echo base_url('public/assets/images/vector/bulb.png'); ?>" class="bulb" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-xxl-6">
						<div class="card score-active">
							<div class="card-header border-0 flex-wrap">
								<h4>Resultados en vivo</h4>
								<ul class="d-flex">
									<li>
										<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="var(--primary)" stroke-width="3"/>
										</svg>
										Sem. pasada
									</li>
									<li>
										<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="var(--secondary)" stroke-width="3"/>
										</svg>
										Actual
									</li>
								</ul>
							</div>
							<div class="card-body pb-1 custome-tooltip style-1 py-0 ">
								<div id="activity2"></div>
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
		

(function($) {
    /* "use strict" */
	
 var dlabChartlist = function(){
	
	var screenWidth = $(window).width();
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	
	var activity2 = function(){
		var optionsArea = {
          series: [{
            name: "",
            data: [60, 70, 80, 50, 60, 50]
          },
		  {
            name: "",
            data: [40, 50, 40, 60, 90, 70]
          }
        ],
          chart: {
          height: 300,
          type: 'area',
		  group: 'social',
		  toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [3, 3, 3],
		  colors:['var(--secondary)','var(--primary)'],
		  curve: 'straight'
        },
        legend: {
			show:false,
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          },
		  markers: {
			fillColors:['var(--secondary)','var(--primary)'],
			width: 16,
			height: 16,
			strokeWidth: 0,
			radius: 16
		  }
        },
        markers: {
          size: [8,8],
		  strokeWidth: [4,4],
		  strokeColors: ['#fff','#fff'],
		  border:2,
		  radius: 2,
		  colors:['var(--secondary)','var(--primary)','#fff'],
          hover: {
            size: 10,
          }
        },
        xaxis: {
          categories: ['Rick', 'Mely', 'Clau', 'José', 'Vero', 'Lita'],
		  labels: {
		   style: {
			  colors: '#3E4954',
			  fontSize: '14px',
			   fontFamily: 'Poppins',
			  fontWeight: 100,
			  
			},
		  },
		  axisBorder:{
			  show: false,
		  }
        },
		yaxis: {
			labels: {
				minWidth: 20,
				offsetX:-16,
				style: {
				  colors: '#3E4954',
				  fontSize: '14px',
				   fontFamily: 'Poppins',
				  fontWeight: 100,
				  
				},
			},
		},
		fill: {
			colors:['#fff','#FF9432'],
			type:'gradient',
			opacity: 1,
			gradient: {
				shade:'light',
				shadeIntensity: 1,
				colorStops: [ 
				  [
					{
					  offset: 0,
					  color: '#fff',
					  opacity: 0
					},
					{
					  offset: 0.6,
					  color: '#fff',
					  opacity: 0
					},
					{
					  offset: 100,
					  color: '#fff',
					  opacity: 0
					}
				  ],
				  [
					{
					  offset: 0,
					  color: 'var(--primary)',
					  opacity: .4
					},
					{
					  offset: 50,
					  color: 'var(--primary)',
					  opacity: 0.25
					},
					{
					  offset: 100,
					  color: '#fff',
					  opacity: 0
					}
				  ]
				]

		  },
		},
		colors:['#1EA7C5','#FF9432'],
        grid: {
          borderColor: '#f1f1f1',
		  xaxis: {
            lines: {
              show: true
            }
          },
		  yaxis: {
            lines: {
              show: false
            }
          },
        },
		 responsive: [{
			breakpoint: 1602,
			options: {
				markers: {
					 size: [6,6,4],
					 hover: {
						size: 7,
					  }
				},chart: {
				height: 230,
			},	
			},
			
		 }]
        };
		var chartArea = new ApexCharts(document.querySelector("#activity2"), optionsArea);
        chartArea.render();

	}
 
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){				
				activity2();				
			},
			
			resize:function(){
			}
		}
	
	}();
   		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dlabChartlist.load();
		}, 1000); 
		
	});

})(jQuery);
	</script>
<?php echo $this->endSection() ?>