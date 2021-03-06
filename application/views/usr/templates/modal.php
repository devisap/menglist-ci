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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('task/store') ?>" method="post">
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
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="NAMA_TASK" required />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Description</label>
                        <textarea class="form-control form-control-solid" rows="3" name="DESKRIPSI_TASK" placeholder="Type Description Details"></textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-bold mb-2">Priority</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Priority" name="PRIORITAS_TASK">
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
                            <label class="fs-6 fw-bold mb-2">Due Date</label>
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
                                <input id="kt_datepicker_3" class="form-control form-control-solid ps-12" placeholder="Select a date" name="TGL_TASK" />
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
                            <span>Reminder</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i> -->
                        </label>
                        <!--end::Label-->
                        <input id="kt_tagify_1" data-name="kt_tagify_1" class="form-control form-control-solid inptReminder" value="" name="PENGINGAT_TASK" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Tags</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i> -->
                        </label>
                        <!--end::Label-->
                        <input id="kt_tagify_2" class="form-control form-control-solid" value="" name="TAGS_TASK" />
                    </div>
                    <!--end::Input group-->
                    <!-- begin input -->
                    <div class="col-md-6 mb-8 fv-row">
                        <label class="fs-6 fw-bold mb-2">Folder</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Folder" name="ID_FOLDER">
                            <option value="">Select Folder...</option>
                            <?php
                            foreach ($folders as $item) {
                                echo '
                                        <option value="' . $item->ID_FOLDER . '">' . $item->NAMA_FOLDER . '</option>
                                    ';
                            }
                            ?>
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
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
<!--begin::Modal - Edit New Target-->
<div class="modal fade" id="mdlEditTask" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-between">
                <h5 class="modal-title text-left fs-1">Edit Task</h5>
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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('task/edit') ?>" method="post">
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
                        <input type="text" id="mdlEdit_title" class="form-control form-control-solid" placeholder="Enter Title" name="NAMA_TASK" required />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Description</label>
                        <textarea id="mdlEdit_desc" class="form-control form-control-solid" rows="3" name="DESKRIPSI_TASK" placeholder="Type Description Details"></textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-bold mb-2">Priority</label>
                            <select id="mdlEdit_prior" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Priority" name="PRIORITAS_TASK">
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
                            <label class="fs-6 fw-bold mb-2">Due Date</label>
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
                                <input id="kt_datepicker_4" class="form-control form-control-solid ps-12" placeholder="Select a date" name="TGL_TASK" />
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
                            <span>Reminder</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i> -->
                        </label>
                        <!--end::Label-->
                        <input id="kt_tagify_3" data-name="kt_tagify_3" class="form-control form-control-solid inptReminder" value="" name="PENGINGAT_TASK" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Tags</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i> -->
                        </label>
                        <!--end::Label-->
                        <input id="kt_tagify_4" class="form-control form-control-solid" value="" name="TAGS_TASK" />
                    </div>
                    <!--end::Input group-->
                    <!-- begin input -->
                    <div class="col-md-6 mb-8 fv-row">
                        <label class="fs-6 fw-bold mb-2">Folder</label>
                        <select id="mdlEdit_folder" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Folder" name="ID_FOLDER">
                            <option value="">Select Folder...</option>
                            <?php
                            foreach ($folders as $item) {
                                echo '
                                        <option value="' . $item->ID_FOLDER . '">' . $item->NAMA_FOLDER . '</option>
                                    ';
                            }
                            ?>
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="reset" onclick="deleteTask()" id="" class="btn btn-danger me-3">Delete</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
                        <input type="hidden" id="mdlEdit_id" name="ID_TASK">
                    </div>
                    <!--end::Actions-->
                </form>
                <form id="frmDelete" action="<?= site_url('task/destroy') ?>" method="post">
                    <input type="hidden" name="ID_TASK" id="mdlDelete_id">
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
<!--begin::Modal - New Target-->
<div class="modal fade" id="mdl_newFolder" tabindex="-1" aria-hidden="true">
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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('folder/store') ?>" method="post">
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
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="NAMA_FOLDER" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center mt-8">
                        <button type="reset" id="" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
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
<!--begin::Modal - Edit New Target-->
<div class="modal fade" id="mdl_editFolder" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-between">
                <h5 class="modal-title text-left fs-1">Edit Folder</h5>
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
                <form id="mdl_editFolder" class="form" action="<?= site_url('folder/update') ?>" method="post">
                    <!--begin::Heading-->
                    <div class="mb-13"></div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Name Folder</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" id="mdl_editFolder_nama" class="form-control form-control-solid" placeholder="Enter Title" name="NAMA_FOLDER" required />
                        <input type="hidden" id="mdl_editFolder_id" class="form-control form-control-solid" placeholder="Enter Title" name="ID_FOLDER" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
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
<!--begin::Modal - New Target-->
<div class="modal fade" id="mdl_newTag" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-between">
                <h5 class="modal-title text-left fs-1">Add Tag <i class="bi bi-tag-fill fs-2x"></i></h5>
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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('tags/store') ?>" method="post">
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
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="NAMA_TAG" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--end::Label-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-bold mb-2">Choose a color</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Priority" name="WARNA_TAG">
                                <option value="1">Default</option>
                                <option value="2">Blue</option>
                                <!-- <option value="3">Gray</option> -->
                                <option value="4">Green</option>
                                <option value="5">Magenta</option>
                                <option value="6">Yellow</option>
                                <option value="7">Red</option>
                                <option value="8">Dark</option>
                            </select>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center mt-8 mb-8">
                        <button type="reset" id="" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
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
<!--begin::Modal - New Target-->
<div class="modal fade" id="mdl_deleteTag" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-between">
                <h5 class="modal-title text-left fs-1">Delete Tag <i class="bi bi-tag-fill fs-2x"></i></h5>
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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('tags/destroy') ?>" method="post">
                    <!--begin::Heading-->
                    <div class="mb-13"></div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row" style="text-align: center;">
                        <h3>Are you sure to remove the tag ?</h3>
                        <input type="hidden" class="form-control form-control-solid" id="mdl_deleteTag_id" name="ID_TAG" required />
                    </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center mt-5 mb-8">
                        <button type="reset" id="" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
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
<!--begin::Modal - New Target-->
<div class="modal fade" id="mdl_deleteFolder" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-between">
                <h5 class="modal-title text-left fs-1">Delete Folder <i class="bi bi-tag-fill fs-2x"></i></h5>
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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('folder/destroy') ?>" method="post">
                    <!--begin::Heading-->
                    <div class="mb-13"></div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row" style="text-align: center;">
                        <h3>Are you sure to remove the folder ?</h3>
                        <input type="hidden" class="form-control form-control-solid" id="mdl_deleteFolder_id" name="ID_FOLDER" required />
                    </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center mt-8 mb-8">
                        <button type="reset" id="" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
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
<!--begin::Modal - New Target-->
<div class="modal fade" id="mdl_editTag" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-between">
                <h5 class="modal-title text-left fs-1">Edit Tag <i class="bi bi-tag-fill fs-2x"></i></h5>
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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('tags/update') ?>" method="post">
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
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Title" id="mdl_editTag_nama" name="NAMA_TAG" required />
                        <input type="hidden" class="form-control form-control-solid" id="mdl_editTag_id" name="ID_TAG" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--end::Label-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-bold mb-2">Choose a color</label>
                            <select class="form-select form-select-solid" data-control="select2" id="mdl_editTag_color" data-hide-search="true" data-placeholder="Select a Priority" name="WARNA_TAG">
                                <option value="1">Default</option>
                                <option value="2">Blue</option>
                                <!-- <option value="3">Gray</option> -->
                                <option value="4">Green</option>
                                <option value="5">Magenta</option>
                                <option value="6">Yellow</option>
                                <option value="7">Red</option>
                                <option value="8">Dark</option>
                            </select>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center mt-8 mb-8">
                        <button type="reset" id="" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email') ?>">
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

<!--begin::Modal Premium Calendar - New Target-->
<div class="modal hide fade" id="mdl_premCalendar">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal body-->
            <div class="modal-body scroll-x px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13"></div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <img src="<?= base_url() ?>assets/media/portfolio/calendar.PNG" alt="Premium">
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center mt-10">
                    <h2 class="text-center">Calendar View</h2>
                    <label class="text-center fw-bold mb-4">Upgrade to Premium, view your monthly tasks in the calendar and to display your weekly plans with a timeline, it's always good to keep everything under control at a glance</label>
                    <a href="<?php echo site_url('premium'); ?>" type="button" id="" class="btn btn-primary">
                        <span class="indicator-label">Upgrade Now</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </a>
                </div>
                <!--end::Actions-->
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

<!--begin::Modal Statistik - New Target-->
<div class="modal hide fade" id="mdl_premStatistic">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal body-->
            <div class="modal-body scroll-x px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13"></div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <img src="<?= base_url() ?>assets/media/portfolio/statistic.PNG" alt="Premium">
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center mt-10">
                    <h2 class="text-center">Statistic View</h2>
                    <label class="text-center fw-bold mb-4">To see your statistics, please upgrade to create unlimited text. Please upgrade premium by pressing the upgrade button below.</label>
                    <a href="<?php echo site_url('premium'); ?>" type="button" id="" class="btn btn-primary">
                        <span class="indicator-label">Upgrade Now</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </a>
                </div>
                <!--end::Actions-->
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

<!--begin::Modal Task Premium- New Target-->
<div class="modal hide fade" id="mdl_premTask">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal body-->
            <div class="modal-body scroll-x px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13"></div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <img src="<?= base_url() ?>assets/media/portfolio/task.PNG" alt="Premium">
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center mt-10">
                    <h2 class="text-center">Task View</h2>
                    <label class="text-center fw-bold mb-4">The task has reached the maximum usage limit, please upgrade to the premium to create unlimited tasks. Please do a premium upgrade by pressing the upgrade button below.</label>
                    <button type="submit" id="" class="btn btn-primary">
                        <span class="indicator-label">Upgrade Now</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

<!--begin::Modal Tags - New Target-->
<div class="modal hide fade" id="mdl_premTags">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal body-->
            <div class="modal-body scroll-x px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13"></div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <img src="<?= base_url() ?>assets/media/portfolio/tags.PNG" alt="Premium">
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center mt-10">
                    <h2 class="text-center">Tags View</h2>
                    <label class="text-center fw-bold mb-4">Your tags have reached the maximum usage limit, please upgrade to premium to create unlimited tags. Please upgrade premium by pressing the upgrade button below.</label>
                    <button type="submit" id="" class="btn btn-primary">
                        <span class="indicator-label">Upgrade Now</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

<!--begin::Modal Folder - New Target-->
<div class="modal hide fade" id="mdl_premFolder">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal body-->
            <div class="modal-body scroll-x px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13"></div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <img src="<?= base_url() ?>assets/media/portfolio/folder.PNG" alt="Premium">
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center mt-10">
                    <h2 class="text-center">Folder View</h2>
                    <label class="text-center fw-bold mb-4">Your folder has reached the maximum usage limit, please upgrade to create unlimited folders. Please upgrade premium by pressing the upgrade button below.</label>
                    <button type="submit" id="" class="btn btn-primary">
                        <span class="indicator-label">Upgrade Now</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

<!--begin::Modal Multiple Reminder - New Target-->
<div class="modal hide fade" id="mdl_premMultipleReminder">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal body-->
            <div class="modal-body scroll-x px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13"></div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <img src="<?= base_url() ?>assets/media/portfolio/task.PNG" alt="Premium">
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center mt-10">
                    <h2 class="text-center">Multiple Reminder View</h2>
                    <label class="text-center fw-bold mb-4">task reminder has reached the maximum usage limit, please upgrade premium to make more task reminders. Please do a premium upgrade by pressing the upgrade button below.</label>
                    <button type="submit" id="" class="btn btn-primary">
                        <span class="indicator-label">Upgrade Now</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

<script>
    let tagsItem = [
        <?php
        foreach ($tags as $item) {
            echo '{value: "' . $item->NAMA_TAG . '", id: "' . $item->ID_TAG . '"},';
        }
        ?>
    ]
    let tagEdit, reminderEdit, reminderAdd;
    $(document).ready(function() {
        var tags1 = document.querySelector("#kt_tagify_1");
        reminderAdd = new Tagify(tags1, {
            whitelist: [{
                    value: "5 minutes ahead",
                    reminder: "-5 minute"
                },
                {
                    value: "30 minutes ahead",
                    reminder: "-30 minute"
                },
                {
                    value: "1 hour ahead",
                    reminder: "-1 hour"
                },
                {
                    value: "1 day ahead",
                    reminder: "-1 day"
                }
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

        var tags3 = document.querySelector("#kt_tagify_3");
        reminderEdit = new Tagify(tags3, {
            whitelist: [{
                    value: "5 minutes ahead",
                    reminder: "-5 minute"
                },
                {
                    value: "30 minutes ahead",
                    reminder: "-30 minute"
                },
                {
                    value: "1 hour ahead",
                    reminder: "-1 hour"
                },
                {
                    value: "1 day ahead",
                    reminder: "-1 day"
                }
            ],
            maxTags: 10,
            dropdown: {
                maxItems: 20, // <- mixumum allowed rendered suggestions
                classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                enabled: 0, // <- show suggestions on focus
                closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
            }
        });

        var tags4 = document.querySelector('#kt_tagify_4');
        tagEdit = new Tagify(tags4, {
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
            time_24hr: true,
            // defaultDate: "today"
        });
    })
    const getFullMonth = month => {
        switch (month) {
            case 0:
                return 'January'
                break;
            case 1:
                return 'February'
                break;
            case 2:
                return 'March'
                break;
            case 3:
                return 'April'
                break;
            case 4:
                return 'May'
                break;
            case 5:
                return 'June'
                break;
            case 6:
                return 'July'
                break;
            case 7:
                return 'August'
                break;
            case 8:
                return 'September'
                break;
            case 9:
                return 'October'
                break;
            case 10:
                return 'November'
                break;
            case 11:
                return 'December'
                break;
            default:
                break;
        }
    }
</script>