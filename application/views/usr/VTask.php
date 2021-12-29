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
													<?php
														$currDate = date('Y-m-d');
														if($todays != null){
															foreach ($todays as $item) {
																$status = "";
																if($item->PRIORITAS_TASK != "0"){
																	$status = '
																		<span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
																	';
																}
	
																$date = "";
																if($item->TGL_TASK != null){
																	if($item->TGL_TASK < $currDate){
																		$date='
																			<span class="text-danger">'.date_format(date_create($item->TGL_TASK), 'j M Y H:i').'</span>
																		';
																	}else{
																		$date='
																			<span class="text-secondary">'.date_format(date_create($item->TGL_TASK), 'H:i').'</span>
																		';
																	}
																}
																echo '
																	<div class="menu-sub menu-sub-accordion">
																		<div class="menu-item">
																			<div class="menu-link">
																				<a><i class="bi bi-three-dots-vertical"></i></a>
																				<label class="ps-lg-3 form-check form-check-custom form-check-solid me-10" >
																					<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="1" />
																					'.$status.'
																					<span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
																				</label>
																				<div style="right: 5px;">
																					'.$date.'
																				</div>
																			</div>
																		</div>
																	</div>		
																';
															}
														}else{
															echo '
																<div class="menu-sub menu-sub-accordion">
																	<div class="menu-item">
																		<div class="menu-link" style="text-align: center;">
																			<svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																				<g transform="translate(0 512) scale(.1 -.1)">
																				<path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
																				<path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
																				<path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
																				<path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
																				</g>
																			</svg>
																			<span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
																		</div>
																	</div>
																</div>
															';
														}
													?>
												</div>

												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-arrow"></span>
														<span class="menu-title text-dark fw-bolder fs-4 px-2">Tomorrow</span>
													</span>
													<?php
														if($tomorrows != null){
															foreach ($tomorrows as $item) {
																$status = "";
																if($item->PRIORITAS_TASK){
																	$status = '
																		<span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
																	';
																}
	
																$date = "";
																if($item->TGL_TASK != null){
																	$date='
																		<span class="text-secondary">'.date_format(date_create($item->TGL_TASK), 'H:i').'</span>
																	';
																}
																echo '
																	<div class="menu-sub menu-sub-accordion">
																		<div class="menu-item">
																			<div class="menu-link">
																				<a><i class="bi bi-three-dots-vertical"></i></a>
																				<label class="ps-lg-3 form-check form-check-custom form-check-solid me-10" >
																					<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="1" />
																					'.$status.'
																					<span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
																				</label>
																				'.$date.'
																			</div>
																		</div>
																	</div>		
																';
															}
														}else{
															echo '
																<div class="menu-sub menu-sub-accordion">
																	<div class="menu-item">
																		<div class="menu-link" style="text-align: center;">
																			<svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																				<g transform="translate(0 512) scale(.1 -.1)">
																				<path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
																				<path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
																				<path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
																				<path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
																				</g>
																			</svg>
																			<span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
																		</div>
																	</div>
																</div>
															';
														}
													?>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-arrow"></span>
														<span class="menu-title text-dark fw-bolder fs-4 px-2">Next 7 Days</span>
													</span>
													<?php
														if($nxtWeeks != null){
															foreach ($nxtWeeks as $item) {
																$status = "";
																if($item->PRIORITAS_TASK){
																	$status = '
																		<span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
																	';
																}
	
																$date = "";
																if($item->TGL_TASK != null){
																	$date='
																		<span class="text-secondary">'.date_format(date_create($item->TGL_TASK), 'j M Y H:i').'</span>
																	';
																}
																echo '
																	<div class="menu-sub menu-sub-accordion">
																		<div class="menu-item">
																			<div class="menu-link">
																				<a><i class="bi bi-three-dots-vertical"></i></a>
																				<label class="ps-lg-3 form-check form-check-custom form-check-solid me-10" >
																					<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="1" />
																					'.$status.'
																					<span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
																				</label>
																				'.$date.'
																			</div>
																		</div>
																	</div>		
																';
															}
														}else{
															echo '
																<div class="menu-sub menu-sub-accordion">
																	<div class="menu-item">
																		<div class="menu-link" style="text-align: center;">
																			<svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																				<g transform="translate(0 512) scale(.1 -.1)">
																				<path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
																				<path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
																				<path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
																				<path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
																				</g>
																			</svg>
																			<span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
																		</div>
																	</div>
																</div>
															';
														}
														
													?>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-arrow"></span>
														<span class="menu-title text-dark fw-bolder fs-4 px-2">Undated</span>
													</span>
													<div class="menu-sub menu-sub-accordion">
														<?php
															if($undates != null){
																foreach ($undates as $item) {
																	$status = "";
																	if($item->PRIORITAS_TASK){
																		$status = '
																			<span class="ps-4 '.$item->COLOR_MP.'" style="font-weight: 700;" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
																		';
																	}
																	echo '
																	<div class="menu-sub menu-sub-accordion">
																		<div class="menu-item">
																			<div class="menu-link">
																				<a><i class="bi bi-three-dots-vertical"></i></a>
																				<label class="ps-lg-3 form-check form-check-custom form-check-solid me-10">
																					<input class="form-check-input h-20px w-20px" type="checkbox" name="" value="today1" />
																					'.$status.'
																					<span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
																				</label>
																			</div>
																		</div>
																	</div>		
																	';
																}
															}else{
																echo '
																	<div class="menu-sub menu-sub-accordion">
																		<div class="menu-item">
																			<div class="menu-link" style="text-align: center;">
																				<svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																					<g transform="translate(0 512) scale(.1 -.1)">
																					<path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
																					<path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
																					<path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
																					<path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
																					</g>
																				</svg>
																				<span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
																			</div>
																		</div>
																	</div>
																';
															}
														?>
													</div>
												</div>

												<div data-kt-menu-trigger="click" class="menu-item menu-accordion show">
													<span class="menu-link">
														<span class="menu-arrow"></span>
														<span class="menu-title text-dark fw-bolder fs-4 px-2">Completed</span>
													</span>
														<?php
															if($completeds != null){
																foreach ($completeds as $item) {
																	$status = "";
																	if($item->PRIORITAS_TASK){
																		$status = '
																			<span class="ps-4" data-bs-toggle="tooltip" data-bs-placement="top" title="'.$item->NAMA_MP.'">'.$item->ALIAS_MP.'&nbsp;</span>
																		';
																	}
																	echo '
																	<div class="menu-sub menu-sub-accordion">
																		<div class="menu-item">
																			<div class="menu-link">
																				<a><i class="bi bi-three-dots-vertical"></i></a>
																				<label class="ps-lg-3 form-check form-check-custom form-check-solid me-10">
																					<input class="form-check-input h-20px w-20px bg-secondary" type="checkbox" name="" value="today1" checked />
																					'.$status.'
																					<span class="fw-bold ps-4">'.$item->NAMA_TASK.'</span>
																				</label>
																			</div>
																		</div>
																	</div>		
																	';
																}
															}else{
																echo '
																	<div class="menu-sub menu-sub-accordion">
																		<div class="menu-item">
																			<div class="menu-link" style="text-align: center;">
																				<svg width="24pt" height="24pt" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																					<g transform="translate(0 512) scale(.1 -.1)">
																					<path fill="#A1A5B7" d="m2495 4466c-41-18-83-69-90-109-4-18-5-118-3-224 3-210 5-218 72-267 39-29 133-29 172 0 68 51 69 53 69 294 0 205-1 220-21 246-11 15-32 37-46 47-33 25-113 32-153 13z"/>
																					<path fill="#A1A5B7" d="m1416 3977c-71-39-100-127-68-203 13-31 264-263 314-290 59-33 155-6 195 55 27 40 31 117 9 160-21 40-270 270-311 287-49 20-94 17-139-9z"/>
																					<path fill="#A1A5B7" d="m3550 3979c-50-31-279-247-296-280-23-45-18-119 10-160 44-65 136-88 203-51 46 25 281 238 304 275 81 133-87 297-221 216z"/>
																					<path fill="#A1A5B7" d="m415 2866c-41-18-83-69-90-109-3-18-4-478-3-1024 3-984 3-992 24-1019 11-15 33-37 48-48l27-21h2139 2139l27 21c15 11 37 33 48 48 21 27 21 33 21 1046s0 1019-21 1046c-11 15-33 37-48 48-27 20-39 21-406 21s-379-1-406-21c-15-11-37-33-48-48-21-27-21-39-24-642l-2-614h-1280-1280l-2 614c-3 603-3 615-24 642-11 15-33 37-48 48-26 20-41 21-394 23-290 2-373 0-397-11zm545-906c0-666-2-645 66-696l37-29h1497 1497l37 29c68 51 66 30 66 696v600h160 160v-800-800h-1920-1920v800 800h160 160v-600z"/>
																					</g>
																				</svg>
																				<span class="ps-3 pt-2 text-gray-500 fw-bold">Empty</span>
																			</div>
																		</div>
																	</div>
																';
															}
														?>
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