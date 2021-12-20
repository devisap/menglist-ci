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
		<link rel="shortcut icon" href="<?= base_url()?>assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?= base_url()?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= base_url()?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
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
							<img alt="Logo" src="<?= base_url()?>assets/media/logos/logo.png" class="h-30px logo" />
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
									<a class="menu-link active" href="<?php echo site_url('task'); ?>">
										<span class="menu-icon">
											<img alt="Logo" src="<?= base_url()?>assets/media/icons/task.svg" class="h-20px logo" />
										</span>
										<span class="menu-title">Task</span>
									</a>
								</div>
								
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									
									<span class="menu-link">
										<span class="menu-icon">
											<img alt="Logo" src="<?= base_url()?>assets/media/icons/folder.svg" class="h-20px logo" />
										</span>
										<span class="menu-title">Folder</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">	
										<div class="menu-item">
											<a class="menu-link" href="<?php echo site_url('folder'); ?>">
												<span class="menu-icon">
													<img alt="Logo" src="<?= base_url()?>assets/media/icons/folder-list.png" class="h-20px logo" />
												</span>
												<span class="menu-title">Folder 1</span>
											</a>
										</div>
									</div>
								</div>

								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									
									<span class="menu-link">
										<span class="menu-icon">
											<img alt="Logo" src="<?= base_url()?>assets/media/icons/tags.png" class="h-20px logo" />
										</span>
										<span class="menu-title">Tags</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">	
										<div class="menu-item">
											<a class="menu-link" href="<?php echo site_url('tags'); ?>">
												<span class="menu-icon">
													<img alt="Logo" src="<?= base_url()?>assets/media/icons/tag.png" class="h-20px logo" />
												</span>
												<span class="menu-title">Tags 1</span>
											</a>
										</div>
									</div>
								</div>

                                <div class="menu-item">
									<a class="menu-link" href="<?php echo site_url('calendar'); ?>">
										<span class="menu-icon">
											<img alt="Logo" src="<?= base_url()?>assets/media/icons/calendar-10.png" class="h-20px logo" />
										</span>
										<span class="menu-title">Calendar</span>
									</a>
								</div>

                                <div class="menu-item">
									<a class="menu-link" href="<?php echo site_url('statistic'); ?>">
										<span class="menu-icon">
											<img alt="Logo" src="<?= base_url()?>assets/media/icons/statistics.png" class="h-20px logo" />
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
									<img src="<?= base_url()?>assets/media/avatars/150-26.jpg" alt="photo" />
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
												<img alt="Logo" src="<?= base_url()?>assets/media/avatars/150-26.jpg" />
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
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Task
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
									<img alt="Logo" src="<?= base_url()?>assets/media/logos/logo.png" class="h-20px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Topbar-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Action-->
									<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Task</a>
									<!--end::Action-->
						</div>
						<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body pb-0">
                                    <div class="aside-menu flex-column-fluid ps-1 pe-1 mb-5" id="kt_aside_menu">
                                        <!--begin::Aside Menu-->
                                        <div class="w-100 hover-scroll-overlay-y d-flex pe-1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
                                            <!--begin::Menu-->
                                            <div class="menu menu-column menu-rounded fw-bold my-0" id="#kt_aside_menu" data-kt-menu="true">
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion show">
                                                    <span class="menu-link">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Today</span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-accordion">	
                                                        <div class="menu-item">
                                                            <label class="menu-link ps-lg-11 form-check form-check-custom form-check-solid me-10">
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="today1" checked="checked" />
																<span class="px-4 form-check-label fw-bold">Folder 1</span>
															</label>
                                                        </div>
                                                    </div>
                                                    <div class="menu-sub menu-sub-accordion">	
                                                        <div class="menu-item">
                                                            <label class="menu-link ps-lg-11 form-check form-check-custom form-check-solid me-10">
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="today2" />
																<span class="px-4 form-check-label fw-bold">Folder 2</span>
															</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <span class="menu-link">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Tomorrow</span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-accordion">	
                                                        <div class="menu-item">
                                                            <label class="menu-link ps-lg-11 form-check form-check-custom form-check-solid me-10">
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="" />
																<span class="px-4 form-check-label fw-bold">Tomorrow 1</span>
															</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <span class="menu-link">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Next 7 Days</span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-accordion">	
                                                        <div class="menu-item">
                                                            <label class="menu-link ps-lg-11 form-check form-check-custom form-check-solid me-10">
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value=""  />
																<span class="px-4 form-check-label fw-bold">Next 7 Days</span>
															</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <span class="menu-link">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Undated</span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-accordion">	
                                                        <div class="menu-item">
                                                            <label class="menu-link ps-lg-11 form-check form-check-custom form-check-solid me-10">
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="" />
																<span class="px-4 form-check-label fw-bold">Undated</span>
															</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion show">
                                                    <span class="menu-link">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Completed</span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-accordion">	
                                                        <div class="menu-item">
                                                            <label class="menu-link ps-lg-11 form-check form-check-custom form-check-solid me-10">
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="today1" checked="checked" />
																<span class="px-4 form-check-label fw-bold">AP 1</span>
															</label>
                                                        </div>
                                                    </div>
                                                    <div class="menu-sub menu-sub-accordion">	
                                                        <div class="menu-item">
                                                            <label class="menu-link ps-lg-11 form-check form-check-custom form-check-solid me-10">
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="today2" checked="checked" />
																<span class="px-4 form-check-label fw-bold">AP 3</span>
															</label>
                                                        </div>
                                                    </div>
                                                </div>
                
                                            </div>

                                            
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Aside Menu-->
                                    </div>
                                        </div>
                                        <!--end::Heading-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Modal - New Target-->
							<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content rounded">
										<!--begin::Modal header-->
										<div class="modal-header pb-0 border-0 justify-content-between">
                                            <h5 class="modal-title text-left fs-1">Add Task</h5>
											<!--begin::Close-->
											<div class="btn btn-sm btn-icon btn-active-color-primary " data-bs-dismiss="modal">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--begin::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
											<!--begin:Form-->
											<form id="kt_modal_new_target_form" class="form" action="#">
												<!--begin::Heading-->
												<div class="mb-13"></div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Title</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="" />
												</div>
												<!--end::Input group-->

                                                <!--begin::Input group-->
												<div class="d-flex flex-column mb-8">
													<label class="fs-6 fw-bold mb-2">Description</label>
													<textarea class="form-control form-control-solid" rows="3" name="" placeholder="Type Description Details"></textarea>
												</div>
												<!--end::Input group-->

												<!--begin::Input group-->
												<div class="row g-9 mb-8">
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Priority</label>
														<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Priority" name="">
															<option value="">Select Priority...</option>
															<option value="1">Low</option>
															<option value="2">Medium</option>
															<option value="3">High</option>
															<option value="4">Important</option>
															<option value="5">Urgent</option>
														</select>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Due Date</label>
														<!--begin::Input-->
														<div class="position-relative d-flex align-items-center">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
															<span class="svg-icon svg-icon-2 position-absolute mx-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
																	<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
																	<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Datepicker-->
															<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
															<!--end::Datepicker-->
														</div>
														<!--end::Input-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Reminder</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Reminder" name="" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Tags</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
													</label>
													<!--end::Label-->
													<input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
												</div>
												<!--end::Input group-->
                                                <!-- begin input -->
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2">Folder</label>
                                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Folder" name="">
                                                        <option value="">Select Folder...</option>
                                                        <option value="1">Folder 1</option>
                                                        <option value="2">Folder 2</option> 
                                                    </select>
                                                </div>
                                                <!--end::Col-->
												<!--begin::Actions-->
												<div class="text-center">
													<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
													<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end:Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - New Target-->
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
		<script>var hostUrl = "<?= base_url()?>assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= base_url()?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?= base_url()?>assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?= base_url()?>assets/js/custom/modals/new-target.js"></script>
		<script src="<?= base_url()?>assets/js/custom/widgets.js"></script>
		<script src="<?= base_url()?>assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?= base_url()?>assets/js/custom/modals/create-app.js"></script>
		<script src="<?= base_url()?>assets/js/custom/modals/upgrade-plan.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>