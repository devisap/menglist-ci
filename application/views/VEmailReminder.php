<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../">
    <title>MengList | Email Reminder</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="MengList" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
</head>

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Signup Verify Email -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
                <!--begin::Logo-->
                <a href="<?php echo site_url('task'); ?>" class="mb-10 pt-lg-10">
                    <img alt="Logo" src="<?= site_url() ?>assets/media/logos/favicon.ico" class="h-40px mb-5" />
                    <img alt="Logo" src="<?= site_url() ?>assets/media/logos/logo.png" class="h-40px mb-5" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="pt-lg-10 mb-10">
                    <!--begin::Logo-->
                    <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Reminder Your Task</h1>
                    <!--end::Logo-->
                    <!--begin::Message-->
                    <div class="fs-3 fw-bold text-muted mb-10">You have a task to do and
                        <br />the deadline is almost over
                    </div>
                    <!--end::Message-->
                    <div class="row justify-content-center">
                        <div class="col-xs-offset-4 col-xs-4">
                            <h6 class="fw-bolder text-left fs-2 text-gray-800 mb-7">Title</h6>
                        </div>
                        <div class="col-xs-offset-4 col-xs-4">
                            <h1 class="fs-3 fw-bold text-muted mb-10">Reminder Your Task</h1>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-xs-offset-4 col-xs-4">
                            <h6 class="fw-bolder text-left fs-2 text-gray-800 mb-7 align-item-left">Due Date</h6>
                        </div>
                        <div class="col-xs-offset-4 col-xs-4">
                            <h1 class="fs-3 fw-bold text-muted mb-10">19/10/2021</h1>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-xs-offset-4 col-xs-4">
                            <h6 class="fw-bolder text-left fs-2 text-gray-800 mb-7 align-item-left">Description</h6>
                        </div>
                        <div class="col-xs-offset-4 col-xs-4">
                            <h1 class="fs-3 fw-bold text-muted mb-10">lorem ipsum dolor sit amet</h1>
                        </div>
                    </div>
                    <!--begin::Action-->
                    <div class="text-center mb-10">
                        <a href="<?php echo site_url('task'); ?>" class="btn btn-lg btn-primary fw-bolder">Skip for now</a>
                    </div>
                    <!--end::Action-->
                </div>

                <!--end::Wrapper-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/dozzy-1/17.png)"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="<?php echo site_url(''); ?>" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:menglist@gmail.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="<?php echo site_url(''); ?>" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Signup Verify Email-->
    </div>
    <!--end::Main-->
    <script>
        var hostUrl = "<?= base_url() ?>assets/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>