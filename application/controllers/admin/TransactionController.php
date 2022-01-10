<?php

class TransactionController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('User');
        $this->load->model('Transaction');
        $this->load->library('emailing');
    }
    public function index()
    {
        $dataTransaction = $this->Transaction->getAll();

        $data['title']          = "List Transaction";
        $data['transactions']   = $dataTransaction;
        $data['transactions']   = $this->Transaction->getAll();

        $this->template->admin('admin/VTransaksi', $data);
    }

    public function aksiUpgradePremium($Id_Transaction)
    {
        //verif
        $this->Transaction->upgradePremium($Id_Transaction);
        
        // $status_transaction = $this->Transaction->getById($Id_Transaction);
        // if ($status_transaction == 1) {
        //     $this->User->upgradePremiumUser($Id_Transaction);            
        // }

        $email['to']        = 'deblenk.dh@gmail.com';
        $email['subject']   = 'Upgrade Premium';
        $email['message']   = $this->templateUpgrade();

        $this->emailing->send($email);
        redirect('admin/transaction');
    }
    public function templateUpgrade()
    {
        return '
        <!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../">
    <title>MengList | Upgrade Premium</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="MengList" />
    <link rel="shortcut icon" href="https://menglist.bgskr-project.my.id/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <style>
        body {
            font-family: "Poppins";
            font-size: 20px;
        }

        .bg-body {
            --bg-color: 255, 255, 255;
            background-color: #fff !important;
        }

        .bg-body {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-body-bg-rgb),
                    var(--bs-bg-opacity)) !important;
        }

        .d-flex {
            display: flex !important;
        }

        .flex-column {
            flex-direction: column !important;
        }

        .flex-root {
            flex: 1;
        }

        .flex-column-fluid {
            flex: 1 0 auto;
        }

        .text-center {
            text-align: center !important;
        }

        .p-10 {
            padding: 1.5rem !important;
        }

        .py-lg-15 {
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .mb-10 {
            margin-bottom: 1.75rem !important;
        }

        .pt-lg-10 {
            padding-top: 0.25rem !important;
        }

        .fw-bolder {
            font-weight: 600 !important;
        }

        .fs-2qx {
            font-size: calc(1rem + 1.2vw) !important;
        }

        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .text-gray-800 {
            color: #3f4254 !important;
        }

        .mb-7 {
            margin-bottom: 1.25rem !important;
        }

        .fs-3 {
            font-size: calc(1.1rem + 0.12vw) !important;
        }

        .fs-2 {
            font-size: calc(1rem + 0.3vw) !important;
        }
        .fs-1 {
            font-size: calc(0.7rem + 0.3vw) !important;
        }

        .fw-bold {
            font-weight: 500 !important;
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: #a1a5b7 !important;
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) * -0.5);
            margin-left: calc(var(--bs-gutter-x) * -0.5);
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-top: var(--bs-gutter-y);
        }

        .col {
            flex: 1 0 0%;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .justify-content-md-center {
            justify-content: center !important;
        }

        .btn {
            display: inline-block;
            font-weight: 500;
            line-height: 1.5;
            color: #181c32;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            border-radius: 0.65rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
            }
        }

        .btn-lg {
            padding: 0.825rem 1.75rem;
            font-size: 1.15rem;
            border-radius: 0.65rem;
        }

        a {
            text-decoration: none;
        }

        .btn.btn-primary {
            color: #fff;
            border-color: #009ef7;
            background-color: #009ef7;
        }

        .btn.btn-primary i {
            color: #fff;
        }

        .btn-primary {
            color: #000;
            background-color: #009ef7;
            border-color: #009ef7;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),
                0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .btn-primary:hover {
            color: #000;
            background-color: #26adf8;
            border-color: #1aa8f8;
        }

        .flex-center {
            justify-content: center;
            align-items: center;
        }

        .flex-column-auto {
            flex: none;
        }

        .align-items-center {
            align-items: center !important;
        }

        .h-40px {
            height: 40px !important;
        }

        .mh-40px {
            max-height: 40px !important;
        }

        .min-h-40px {
            min-height: 40px !important;
        }

        .mb-5 {
            margin-bottom: 1.25rem !important;
        }

        .text-hover-primary {
            transition: color 0.2s ease, background-color 0.2s ease;
        }

        .text-hover-primary i {
            transition: color 0.2s ease, background-color 0.2s ease;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 600;
            line-height: 1.2;
            color: #181c32;
        }

        @media (min-width: 992px) {

            div,
            ol,
            pre,
            span,
            ul {
                scrollbar-width: thin;
                scrollbar-color: #eff2f5 transparent;
            }

            div::-webkit-scrollbar,
            ol::-webkit-scrollbar,
            pre::-webkit-scrollbar,
            span::-webkit-scrollbar,
            ul::-webkit-scrollbar {
                width: 0.4rem;
                height: 0.4rem;
            }

            div::-webkit-scrollbar-thumb,
            ol::-webkit-scrollbar-thumb,
            pre::-webkit-scrollbar-thumb,
            span::-webkit-scrollbar-thumb,
            ul::-webkit-scrollbar-thumb {
                background-color: #eff2f5;
            }

            div:hover,
            ol:hover,
            pre:hover,
            span:hover,
            ul:hover {
                scrollbar-color: #e9edf1 transparent;
            }

            div:hover::-webkit-scrollbar-thumb,
            ol:hover::-webkit-scrollbar-thumb,
            pre:hover::-webkit-scrollbar-thumb,
            span:hover::-webkit-scrollbar-thumb,
            ul:hover::-webkit-scrollbar-thumb {
                background-color: #e9edf1;
            }
        }

        body a:active,
        body a:focus,
        body a:hover,
        html a:active,
        html a:focus,
        html a:hover {
            text-decoration: none !important;
        }

        body {
            display: flex;
            flex-direction: column;
            color: #181c32;
        }

        .flex-row-auto {
            flex: 0 0 auto;
        }

        .bgi-no-repeat {
            background-repeat: no-repeat;
        }

        .bgi-position-x-center {
            background-position-x: center;
        }

        .bgi-size-contain {
            background-size: contain;
        }

        .bgi-position-y-bottom {
            background-position-y: bottom;
        }

        .min-h-100px {
            min-height: 100px !important;
        }

        .min-h-lg-350px {
            min-height: 350px !important;
        }
    </style>
</head>

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Signup Verify Email -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
                <!--begin::Logo-->
                <a href="https://menglist.bgskr-project.my.id/task" class="mb-10 pt-lg-10">
                    <img alt="Logo" src="https://menglist.bgskr-project.my.id/assets/media/logos/favicon.ico" class="h-40px mb-5" />
                    <img alt="Logo" src="https://menglist.bgskr-project.my.id/assets/media/logos/logo.png" class="h-40px mb-5" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="pt-lg-10 mb-10">
                    <!--begin::Logo-->
                    <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Welcome to Menglist Premium</h1>
                    <!--end::Logo-->
                    <!--begin::Message-->
                    <div class="fs-3 fw-bold text-muted mb-10">Congratulations, you have successfully upgraded to a Menglist premium
                        <br /> enjoy our premium features to support your activities
                        <br>Manage Your Task Manage Your Life
                    </div>
                    <!--end::Message-->
                    <!--begin::Action-->
                    <div class="text-center mb-10">
                        <a href="https://menglist.bgskr-project.my.id/" class="btn btn-lg btn-primary fw-bolder">Go to homepage</a>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Wrapper-->
               <!--begin::Illustration-->
               <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(https://menglist.bgskr-project.my.id/assets/media/illustrations/dozzy-1/17.png)"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-1">
                    <a href="https://menglist.bgskr-project.my.id/" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:menglist.company@gmail.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://menglist.bgskr-project.my.id/" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Signup Verify Email-->
    </div>
    <!--end::Main-->

</body>
<!--end::Body-->

</html>
        ';
    }
}
