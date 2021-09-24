<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/finance-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 13:02:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{$pageTitle ?? 'Unknown'}}</title>
    <base href="{{ asset('/') }}" />
    <link rel="icon" href="backend/images/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="backend/css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="backend/vendors/themefy_icon/themify-icons.css" />
    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="backend/vendors/swiper_slider/css/swiper.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="backend/vendors/select2/css/select2.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="backend/vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="backend/vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="backend/vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="backend/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="backend/vendors/tagsinput/tagsinput.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="backend/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="backend/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="backend/vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="backend/vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="backend/vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="backend/vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="backend/css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="backend/css/style.css" />
    <link rel="stylesheet" href="backend/css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



<!-- main content part here -->

<!-- sidebar  -->
<!-- sidebar part here -->
@include('admin.layouts.slide_bar')
<!-- sidebar part end -->
<!--/ sidebar  -->


<section class="main_content dashboard_part">
    <!-- menu  -->
    @include('admin.layouts.header')
    <!--/ menu  -->
    <div class="main_content_iner ">
        @yield('content')
    </div>

    <!-- footer part -->
    @include('admin.layouts.footer')
</section>
<!-- main content part end -->

<!-- footer  -->
<!-- jquery slim -->
<script src="backend/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="backend/js/popper.min.js"></script>
<!-- bootstarp js -->
<script src="backend/js/bootstrap.min.js"></script>
<!-- sidebar menu  -->
<script src="backend/js/metisMenu.js"></script>
<!-- waypoints js -->
<script src="backend/vendors/count_up/jquery.waypoints.min.js"></script>
<!-- waypoints js -->
<script src="backend/vendors/chartlist/Chart.min.js"></script>
<!-- counterup js -->
<script src="backend/vendors/count_up/jquery.counterup.min.js"></script>
<!-- swiper slider js -->
<script src="backend/vendors/swiper_slider/js/swiper.min.js"></script>
<!-- nice select -->
<script src="backend/vendors/niceselect/js/jquery.nice-select.min.js"></script>
<!-- owl carousel -->
<script src="backend/vendors/owl_carousel/js/owl.carousel.min.js"></script>
<!-- gijgo css -->
<script src="backend/vendors/gijgo/gijgo.min.js"></script>
<!-- responsive table -->
<script src="backend/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="backend/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="backend/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="backend/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="backend/vendors/datatable/js/jszip.min.js"></script>
<script src="backend/vendors/datatable/js/pdfmake.min.js"></script>
<script src="backend/vendors/datatable/js/vfs_fonts.js"></script>
<script src="backend/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="backend/vendors/datatable/js/buttons.print.min.js"></script>

<script src="backend/js/chart.min.js"></script>
<!-- progressbar js -->
<script src="backend/vendors/progressbar/jquery.barfiller.js"></script>
<!-- tag input -->
<script src="backend/vendors/tagsinput/tagsinput.js"></script>
<!-- text editor js -->
<script src="backend/vendors/text_editor/summernote-bs4.js"></script>

<script src="backend/vendors/apex_chart/apexcharts.js"></script>

<!-- custom js -->
<script src="backend/js/custom.js"></script>

<!-- active_chart js -->
<script src="backend/js/active_chart.js"></script>
<script src="backend/vendors/apex_chart/radial_active.js"></script>
<script src="backend/vendors/apex_chart/stackbar.js"></script>
<script src="backend/vendors/apex_chart/area_chart.js"></script>
<!-- <script src="vendors/apex_chart/pie.js"></script> -->
<script src="backend/vendors/apex_chart/bar_active_1.js"></script>
<script src="backend/vendors/chartjs/chartjs_active.js"></script>

</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 13:03:26 GMT -->
</html>
