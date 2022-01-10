<body id="kt_body" class="">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-column-fluid">
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
							<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Transaction List</h1>
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
							<a href="<?php echo site_url('admin/user'); ?>" class="d-flex align-items-center">
								<img alt="Logo" src="<?= base_url() ?>assets/media/logos/favicon.ico" class="h-20px" />
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
						<!--begin::Card-->
						<div class="card">
							<!--begin::Card header-->
							<div class="card-header border-0 pt-6">
								<!--begin::Card title-->
								<div class="card-title">
									<!--begin::Search-->
									<div class="d-flex align-items-center position-relative my-1">
										<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
										<span class="svg-icon svg-icon-1 position-absolute ms-6">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
												<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Transaction" id="InputSearchTransaction" />
									</div>
									<!--end::Search-->
								</div>
								<!--begin::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Table-->
								<table class="table align-middle table-row-dashed fs-6 gy-5" id="datatableTransaction">
									<!--begin::Table head-->
									<thead>
										<!--begin::Table row-->
										<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
											<th class="min-w-125px">Email</th>
											<th class="min-w-125px">Date Transaction</th>
											<th class="min-w-125px">Evidence of Transaction</th>
											<th class="min-w-125px">Status</th>
											<th class="min-w-125px">Action</th>
										</tr>
										<!--end::Table row-->
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody class="fw-bold text-gray-600">
										<?php
										foreach ($transactions as $data) {
											if ($data->STATUS_TRANSACTION == 0) {
												$status = '<span class="badge badge-pill badge-danger">Belum Premium';
											} else {
												$status = '<span class="badge badge-pill badge-success">Premium</span>';
											}

										?>
											<tr>
												<!--begin::Email=-->
												<td>
													<?php echo $data->EMAIL_USER; ?>
												</td>
												<!--end::Email=-->
												<!--begin::Email=-->
												<td>
													<?php echo $data->TGL_TRANSACTION; ?>
												</td>
												<!--end::Email=-->
												<!--begin::Email=-->
												<td>
													<div class="d-flex justify-content-center flex-shrink-0">
														<a data-bs-toggle="modal" data-bs-target="#buktiModal<?= $data->ID_TRANSACTION; ?> " class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<i class="fa fa-image"></i>
															</span>
															<!--end::Svg Icon-->
														</a>
													</div>
												</td>
												<!--end::Email=-->
												<!--begin::Company=-->
												<td><?php echo $status ?></td>
												<td>
													<div class="d-flex justify-content-start flex-shrink-0">
														<a data-bs-toggle="modal" data-bs-target="#detailModal<?= $data->ID_TRANSACTION; ?> " class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen053.svg-->
															<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect x="10" y="10" width="4" height="4" rx="2" fill="black" />
																	<rect x="10" y="3" width="4" height="4" rx="2" fill="black" />
																	<rect x="10" y="17" width="4" height="4" rx="2" fill="black" />
																</svg></span>
															<!--end::Svg Icon-->
														</a>
													</div>
												</td>
												<!--end::Company=-->

											</tr>
											<!-- begin modal  -->
											<div class="modal fade" tabindex="-1" id="buktiModal<?= $data->ID_TRANSACTION; ?>">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Evidence of Transaction</h5>

															<!--begin::Close-->
															<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																<span class="svg-icon svg-icon-2x"></span>
															</div>
															<!--end::Close-->
														</div>
														<div class="modal-body ">
															<div class="col">
																<div class="form-group">
																	<img src="<?= $data->BUKTI_TRANSACTION; ?>" width="200px">
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
															<a href="<?= base_url('admin/transaction/' . $data->ID_TRANSACTION) ?>" type="button" class="btn btn-primary">Upgrade to Premium</a>
														</div>
													</div>
												</div>
											</div>
											<!-- end modal  -->
											<!-- begin modal  -->
											<div class="modal fade" tabindex="-1" id="detailModal<?= $data->ID_TRANSACTION; ?>">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Detail Transaction</h5>

															<!--begin::Close-->
															<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																<span class="svg-icon svg-icon-2x"></span>
															</div>
															<!--end::Close-->
														</div>

														<div class="modal-body">
															<div class="row">
																<div class="col">
																	<div class="form-group">
																		<h6>Email User</h6>
																		<p><?= $data->EMAIL_USER; ?></p>
																	</div>
																</div>
															</div>
															<div class="col">
																<div class="form-group">
																	<h6>Date Transaction</h6>
																	<p><?= $data->TGL_TRANSACTION; ?></p>
																</div>
															</div>
															<div class="col">
																<div class="form-group">
																	<h6>Status Transaction</h6>
																	<p><?= $status ?></p>
																</div>
															</div>
															<div class="col">
																<div class="form-group">
																	<h6>Evidence of Transaction</h6>
																	<img src="<?= $data->BUKTI_TRANSACTION; ?>" width="200px">
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
															<a href="<?= base_url('admin/transaction/' . $data->ID_TRANSACTION) ?>" type="button" class="btn btn-primary">Upgrade to Premium</a>
														</div>
													</div>
												</div>
											</div>
											<!-- end modal  -->
										<?php } ?>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
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
	<!--end::Scrolltop-->
	<!--end::Main-->