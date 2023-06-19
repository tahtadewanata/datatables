<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../../admin/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../admin/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../../admin/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../../admin/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="../../admin/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../admin/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../../admin/css/style.css">
    <link rel="stylesheet" href="../../admin/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('admin.layouts.navbar')
            @include('admin.layouts.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../../admin/modules/jquery.min.js"></script>
    <script src="../../admin/modules/popper.js"></script>
    <script src="../../admin/modules/tooltip.js"></script>
    <script src="../../admin/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../admin/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../../admin/modules/moment.min.js"></script>
    <script src="../../admin/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../../admin/modules/jquery.sparkline.min.js"></script>
    <script src="../../admin/modules/chart.min.js"></script>
    <script src="../../admin/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="../../admin/modules/summernote/summernote-bs4.js"></script>
    <script src="../../admin/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../../admin/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="../../admin/js/scripts.js"></script>
    <script src="../../admin/js/custom.js"></script>
</body>

</html>
