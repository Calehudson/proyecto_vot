<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class DzConfig extends BaseConfig
{
    public $dzAssets = [

		/*
		|--------------------------------------------------------------------------
		| Application Name
		|--------------------------------------------------------------------------
		|
		| This value is the name of your application. This value is used when the
		| framework needs to place the application's name in a notification or
		| any other location as required by the application or its packages.
		|
		*/

		'name' => 'GetSkills Codeigniter',
		

		'public' => [
			'favicon' => 'media/img/logo/favicon.ico',
			'fonts' => [
				'google' => [
					'families' => [
						'Poppins:300,400,500,600,700',
					]
				]
			],
			'global' => [
				'css' => [
					'public/assets/vendor/jquery-nice-select/css/nice-select.css',
					'public/assets/css/style.css',
				],
				'js' => [
					'top'=>[
						'public/assets/vendor/global/global.min.js',
						'public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js',	
					],
					'bottom'=>[
						'public/assets/js/custom.js',
						'public/assets/js/dlabnav-init.js'
					],
				],
			],
			'pagelevel' => [
				'css' => [
					'Cinicio_index' => [
								'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'
					],
					'Cinicio_participantes' => [
								'public/assets/vendor/datatables/css/jquery.dataTables.min.css'
					],
					'Cinicio_votaciones' => [],
					'Cinicio_listavotaciones' => [
								'public/assets/vendor/datatables/css/jquery.dataTables.min.css'
					],
				],
				'js' => [
					'Cinicio_index' => [
								'public/assets/vendor/chart.js/Chart.bundle.min.js',
								'public/assets/vendor/apexchart/apexchart.js',
								'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
								'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
								'public/assets/js/dashboard/dashboard-1.js',
								'public/assets/js/jindex.js'
					],
					'Cinicio_participantes' => [
								'public/assets/vendor/chart.js/Chart.bundle.min.js',
								'public/assets/vendor/apexchart/apexchart.js',
								'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
								'public/assets/js/plugins-init/datatables.init.js',
								'public/assets/vendor/owl-carousel/owl.carousel.js',
								'public/assets/js/dashboard/instructor-student.js',
								'public/assets/js/jparticipantes.js'
					],
					'Cinicio_votaciones' => [
						'public/assets/js/jvotaciones.js'
					],
					'Cinicio_listavotaciones' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/apexchart/apexchart.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/owl-carousel/owl.carousel.js',
						'public/assets/js/dashboard/instructor-student.js',
						'public/assets/js/jvotaciones.js'
					],					
				]
			],
		]
	];

}
