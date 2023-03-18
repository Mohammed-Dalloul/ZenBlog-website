<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ZenBlog - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">


{{--    sidebar--}}
    <link href="assets/sidebar/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/sidebar/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="assets/sidebar/dest/style.css" rel="stylesheet">
{{--    end-sidebar--}}



    <!-- =======================================================
    * Template Name: ZenBlog - v1.0.0
    * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
    * Author: BootstrapMade.com
    * License: https:///bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

@include('frontsite.layout.header')
@include('frontsite.layout.sidebar')
@yield('content')
@include('frontsite.layout.footer')

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


{{--sidebar--}}
<script src="assets/sidebar/js/libs/jquery.min.js"></script>
<script src="assets/sidebar/js/libs/tether.min.js"></script>
<script src="assets/sidebar/js/libs/bootstrap.min.js"></script>
<script src="assets/sidebar/js/libs/pace.min.js"></script>

<!-- Plugins and scripts required by all views -->
<script src="assets/sidebar/js/libs/Chart.min.js"></script>

<!-- CoreUI main scripts -->

<script src="assets/sidebar/js/app.js"></script>

<!-- Plugins and scripts required by this views -->
<!-- Custom scripts required by this view -->
<script src="assets/sidebar/js/views/main.js"></script>

<!-- Grunt watch plugin -->
<script src="//localhost:35729/livereload.js"></script>

{{--end_sidebar--}}
</body>

</html>
