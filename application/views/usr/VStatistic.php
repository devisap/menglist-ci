<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../">
	<title>MengList</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="MengList" />
	<link rel="shortcut icon" href="<?= site_url() ?>/assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?= site_url() ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= site_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= site_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="sidebar-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header">
					<!--begin::Container-->
					<div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
							<!--begin::Heading-->
							<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Statistic
								<!-- <small class="text-muted fs-6 fw-bold ms-1 pt-1">You’ve got 24 New Sales</small></h1> -->
								<!--end::Heading-->
						</div>
						<!--end::Page title=-->
						<!--begin::Wrapper-->
						<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
							<!--begin::Aside mobile toggle-->
							<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1 mt-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Logo-->
							<a href="../../demo3/dist/index.html" class="d-flex align-items-center">
								<img alt="Logo" src="<?= site_url() ?>/assets/media/logos/logo.png" class="h-20px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-xxl" id="kt_content_container">
						<!--begin::Row-->
						<div class="row gy-5 g-xl-10">
							<!--begin::Col-->
							<div class="col-xl-4">
								<!--begin::Mixed Widget 13-->
								<div class="card card-xl-stretch mb-xl-10" style="background-color: #F7D9E3">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column flex-grow-1">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Task</a>
											<!--end::Title-->
											<!--begin::Chart-->
											<div class="mixed-widget-13-chart" style="height: 100px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Stats-->
										<div class="pt-5">
											<!--begin::Number-->
											<span class="text-dark fw-bolder fs-3x me-2 lh-0"><?= $countTask ?></span>
											<!--end::Number-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Mixed Widget 13-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4">
								<!--begin::Mixed Widget 14-->
								<div class="card card-xxl-stretch mb-xl-10" style="background-color: #CBF0F4">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column flex-grow-1">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Completed</a>
											<!--end::Title-->
											<!--begin::Chart-->
											<div class="mixed-widget-14-chart" style="height: 100px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Stats-->
										<div class="pt-5">
											<!--begin::Number-->
											<span class="text-dark fw-bolder fs-3x me-2 lh-0"><?= $countCompleted ?></span>
											<!--end::Number-->
										</div>
										<!--end::Stats-->
									</div>
								</div>
								<!--end::Mixed Widget 14-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4">
								<!--begin::Mixed Widget 14-->
								<div class="card card-xxl-stretch mb-xl-10" style="background-color: #CBD4F4">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column flex-grow-1">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Folder</a>
											<!--end::Title-->
											<!--begin::Chart-->
											<div class="mixed-widget-13-chart" style="height: 100px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Stats-->
										<div class="pt-5">
											<!--begin::Number-->
											<span class="text-dark fw-bolder fs-3x me-2 lh-0"><?= $countFolder ?></span>
											<!--end::Number-->
										</div>
										<!--end::Stats-->
									</div>
								</div>
								<!--end::Mixed Widget 14-->
							</div>
							<!--end::Col-->

						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row gy-5 g-xl-10">
							<!--begin::Col-->
							<div class="col-xl-6">
								<!--begin::Mixed Widget 13-->
								<div class="card card-xl-stretch mb-xl-10 border" style="background-color: #FFF">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column flex-grow-1">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Overview</a>
											<!--end::Title-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Stats-->
										<div class="pt-2">
											<!--begin::Number-->
											<span class="text-dark fw-bolder fs-3x me-2 lh-0">10</span>
											<!--end::Number-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Mixed Widget 13-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-6">
								<!--begin::Mixed Widget 14-->
								<div class="card card-xxl-stretch mb-xl-10" style="background-color: #fff">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column flex-grow-1">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Completion Rate</a>
											<!--end::Title-->
											<!--begin::Chart-->
											<div id="completionRate" style="height: 200px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Wrapper-->
									</div>
								</div>
								<!--end::Mixed Widget 14-->
							</div>
							<!--end::Col-->


						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>

	<script>
		var options = {
			chart: {
				type: 'donut'
			},
			series: [<?= $completionRate ?>, <?= ($completionRate - 100) ?>],
			labels: ['Completed', 'Not Yet'],
			colors: ['#CBF0F4', '#F7D9E3']
		}

		var chart = new ApexCharts(document.querySelector("#completionRate"), options);

		chart.render();
	</script>

	<script type="text/javascript">
		$(window).on('load', function() {
			$('#mdl_premStatistic').modal('show');
		});
	</script>
</body>
<!--end::Body-->

</html>