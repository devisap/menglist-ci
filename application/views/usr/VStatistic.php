<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
        <title>MengList</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="MengList" />
		<link rel="shortcut icon" href="<?= site_url()?>/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?= site_url()?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= site_url()?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= site_url()?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
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
				<!--begin::Aside-->
				<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="VTask.html">
							<img alt="Logo" src="<?= site_url()?>/assets/media/logos/logo.png" class="h-30px logo" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
						<!--begin::Aside Menu-->
						<div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
							<!--begin::Menu-->
							<div class="menu menu-column menu-rounded fw-bold my-auto" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<a class="menu-link" href="<?php echo site_url('task'); ?>">
										<span class="menu-icon">
											<img alt="Logo" src="<?= site_url()?>/assets/media/icons/task.svg" class="h-20px logo" />
										</span>
										<span class="menu-title">Task</span>
									</a>
								</div>
								
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									
									<span class="menu-link">
										<span class="menu-icon">
											<img alt="Logo" src="<?= site_url()?>/assets/media/icons/folder.svg" class="h-20px logo" />
										</span>
										<span class="menu-title">Folder</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">	
										<div class="menu-item">
											<a class="menu-link" href="<?php echo site_url('folder'); ?>">
												<span class="menu-icon">
													<img alt="Logo" src="<?= site_url()?>/assets/media/icons/folder-list.png" class="h-20px logo" />
												</span>
												<span class="menu-title">Folder 1</span>
											</a>
										</div>
									</div>
								</div>

								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									
									<span class="menu-link">
										<span class="menu-icon">
											<img alt="Logo" src="<?= site_url()?>/assets/media/icons/tags.png" class="h-20px logo" />
										</span>
										<span class="menu-title">Tags</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">	
										<div class="menu-item">
											<a class="menu-link" href="<?php echo site_url('tags'); ?>">
												<span class="menu-icon">
													<img alt="Logo" src="<?= site_url()?>/assets/media/icons/tag.png" class="h-20px logo" />
												</span>
												<span class="menu-title">Tags 1</span>
											</a>
										</div>
									</div>
								</div>

                                <div class="menu-item">
									<a class="menu-link" href="<?php echo site_url('calendar'); ?>">
										<span class="menu-icon">
											<img alt="Logo" src="<?= site_url()?>/assets/media/icons/calendar-10.png" class="h-20px logo" />
										</span>
										<span class="menu-title">Calendar</span>
									</a>
								</div>

                                <div class="menu-item">
									<a class="menu-link active" href="<?php echo site_url('statistic'); ?>">
										<span class="menu-icon">
											<img alt="Logo" src="<?= site_url()?>/assets/media/icons/statistics.png" class="h-20px logo" />
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Statistic</span>
									</a>
								</div>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
						<!--begin::User panel-->
						<div class="d-flex flex-stack">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-circle symbol-40px">
									<img src="<?= site_url()?>/assets/media/avatars/150-26.jpg" alt="photo" />
								</div>
								<!--end::Avatar-->
								<!--begin::User info-->
								<div class="ms-2">
									<!--begin::Name-->
									<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder lh-1">Paul Melone</a>
									<!--end::Name-->
									<!--begin::Major-->
									<span class="text-muted fw-bold d-block fs-7 lh-1">Python Dev</span>
									<!--end::Major-->
								</div>
								<!--end::User info-->
							</div>
							<!--end::Wrapper-->
							<!--begin::User menu-->
							<div class="ms-1">
								<div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
											<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="<?= site_url()?>/assets/media/avatars/150-26.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
												<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo3/dist/account/overview.html" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo3/dist/pages/projects/list.html" class="menu-link px-5">
											<span class="menu-text">My Projects</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5 my-1">
										<a href="../../demo3/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="<?= site_url('logout')?>" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									
								</div>
								<!--end::Menu-->
							</div>
							<!--end::User menu-->
						</div>
						<!--end::User panel-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
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
									<img alt="Logo" src="<?= site_url()?>/assets/media/logos/logo.png" class="h-20px" />
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
												<span class="text-dark fw-bolder fs-3x me-2 lh-0">10</span>
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
												<span class="text-dark fw-bolder fs-3x me-2 lh-0">10</span>
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
												<div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px"></div>
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
		<!--end::Root-->
	
		<!--end::Main-->
		<script>var hostUrl = "<?= site_url()?>/assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= site_url()?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?= site_url()?>/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?= site_url()?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?= site_url()?>/assets/js/custom/widgets.js"></script>
		<script src="<?= site_url()?>/assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?= site_url()?>/assets/js/custom/modals/create-app.js"></script>
		<script src="<?= site_url()?>/assets/js/custom/modals/upgrade-plan.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>