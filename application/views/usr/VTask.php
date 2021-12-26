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
									<img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo.png" class="h-20px" />
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
																<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="" />
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
		<script>
			$(document).ready(function() {
				var tags1 = document.querySelector("#kt_tagify_1");
				new Tagify(tags1, {
					whitelist: [
						{value: "5 minutes ahead", reminder: "-5 minute"},
						{value: "30 minutes ahead", reminder: "-30 minute"},
						{value: "1 hour ahead", reminder: "-1 hour"},
						{value: "1 day ahead", reminder: "-1 day"}
					],
					maxTags: 10,
					dropdown: {
						maxItems: 20, // <- mixumum allowed rendered suggestions
						classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
						enabled: 0, // <- show suggestions on focus
						closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
					}
				});

				var tags2 = document.querySelector('#kt_tagify_2');
				let tagsItem = [
					<?php
						foreach ($tags as $item) {
							echo '{value: "'.$item->NAMA_TAG.'", id: "'.$item->ID_TAG.'"},';
						}	
					?>
				]
				new Tagify(tags2, {
					whitelist: tagsItem,
					maxTags: 10,
					dropdown: {
						maxItems: 20, // <- mixumum allowed rendered suggestions
						classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
						enabled: 0, // <- show suggestions on focus
						closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected.
					}
				});

				$("#kt_datepicker_3").flatpickr({
					enableTime: true,
					dateFormat: "j F Y, H:i",
					time_24hr: true
				});
			})
		</script>