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
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Folder
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
							<!--begin::Topbar-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Action-->
									<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Folder</a>
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
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Task</span>
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
                                            <h5 class="modal-title text-left fs-1">Add Folder <i class="bi bi-archive-fill fs-2x"></i></h5> 
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
														<span class="required">Name</span>
														<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> -->
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="" required />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="">Choose color</span> 
														<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> -->
													</label>
													<!--end::Label-->
													<div class="row">
														<div class="col">
															<div style="border-radius: 100px;width: 35px;height: 35px;background: #1abc9c;"></div>
														</div>
														<div class="col">
															<div style="border-radius: 100px;width: 35px;height: 35px;background: #2ecc71;"></div>
														</div>
														<div class="col">
															<div style="border-radius: 100px;width: 35px;height: 35px;background: #3498db;"></div>
														</div>
														<div class="col">
															<div style="border-radius: 100px;width: 35px;height: 35px;background: #9b59b6;"></div>
														</div>
														<div class="col">
															<div style="border-radius: 100px;width: 35px;height: 35px;background: #9b59b6;"></div>
														</div>
													</div>
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center mt-8">
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
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
	