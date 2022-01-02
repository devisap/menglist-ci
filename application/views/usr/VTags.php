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
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<span class="badge <?= $tag->BADGE_MC?>"><i class="bi bi-tag-fill text-<?= $tag->COLOR_MC?>"></i> <?= $tag->NAMA_TAG?></span>
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
									<a href="#" class="btn btn-primary er fs-6 px-6 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Edit</a>&nbsp;
									<a href="#" class="btn btn-danger er fs-6 px-6 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Delete</a>
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
                                                <div id="boxTask" data-kt-menu-trigger="click" class="menu-item menu-accordion show">
                                                    <span class="menu-link">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Task</span>
                                                    </span>
                                                </div>

                                                <div id="boxCompleted" data-kt-menu-trigger="click" class="menu-item menu-accordion show">
                                                    <span class="menu-link">
                                                        <span class="menu-arrow"></span>
                                                        <span class="menu-title text-dark fw-bolder fs-4 px-2">Completed</span>
                                                    </span>
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
                                            <h5 class="modal-title text-left fs-1">Add Tags</h5>
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
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="" />
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
												</div>
												<!--end::Input group-->
                                              
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
		<script>
			$(document).ready(function() {
				getDataTask();
			})
			const getDataTask = () => {
				$.ajax({
					url: '<?= site_url('tags/getDataTask/'.$idTag)?>',
					method: 'get',
					success: function(res){
						res = JSON.parse(res)
						$('#boxTask').html(`
							<span class="menu-link">
								<span class="menu-arrow"></span>
								<span class="menu-title text-dark fw-bolder fs-4 px-2">Task</span>
							</span>
							${res['HTMLTASK']}
						`);
						$('#boxCompleted').html(`
							<span class="menu-link">
								<span class="menu-arrow"></span>
								<span class="menu-title text-dark fw-bolder fs-4 px-2">Completed</span>
							</span>
							${res['HTMLCOMPLETEDS']}
						`);
					}
				})
			}
			const mdlEditOnClick = id => {				
				$.ajax({
					url: "<?= site_url('task/ajxGet')?>",
					method: 'post',
					data: {id},
					success: function(res){
						res = JSON.parse(res)
						date = new Date(res['TASK']['TGL_TASK'])
						tags = [];
						reminders = [];

						$('#mdlEdit_title').val(res['TASK']['NAMA_TASK']);
						$('#mdlEdit_id').val(res['TASK']['ID_TASK']);
						$('#mdlEdit_desc').html(res['TASK']['DESKRIPSI_TASK']);
						$('#mdlEdit_prior').val(res['TASK']['PRIORITAS_TASK']).change();
						$('#mdlEdit_folder').val(res['TASK']['ID_FOLDER']).change();
						$('#mdlDelete_id').val(res['TASK']['ID_TASK']);
						$("#kt_datepicker_4").flatpickr({
							enableTime: true,
							time_24hr: true,
							dateFormat: "j F Y, H:i",
							defaultDate: `${date.getDate()} ${getFullMonth(date.getMonth())} ${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}`,
						});
						
						tagEdit.removeAllTags()
						for(const i of res['TASKTAG']){
							tags.push({value: i['NAMA_TAG'], id: i['ID_TAG']})
						}
						tagEdit.addTags(tags)

						reminderEdit.removeAllTags()
						for(const i of res['TASKREMINDER']){
							reminders.push(i['NAMA_REMINDER'])
						}
						reminderEdit.addTags(reminders)
					}
				})
			}
			const taskCheck = (id, status) => {
				$.ajax({
					url: '<?= site_url('task/changeStat')?>',
					method: 'post',
					data: {id, status},
					success: function(res){
						getDataTask()
						if(status){
							toastr.success("Successfully changed the task status to completed!", "Success");
						}else{
							toastr.success("Successfully changed the task status to progress!", "Success");
						}
					}
				})
			}
			const deleteTask = () => {
				$('#frmDelete').submit();
			}
		</script>
		
	</body>
	<!--end::Body-->
</html>

