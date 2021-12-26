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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('folder/store')?>" method="post">
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
                        <button type="reset" id="" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email')?>">
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
                <form id="kt_modal_new_target_form" class="form" action="<?= site_url('tags/store')?>" method="post">
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
                        <button type="reset" id="" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="EMAIL_USER" value="<?= $this->session->userdata('email')?>">
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