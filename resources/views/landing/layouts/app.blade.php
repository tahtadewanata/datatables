<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Small Apps | Bootstrap App Landing Template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bootstrap App Landing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Small Apps Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="small-apps" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../landing/images/favicon.png" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="../../landing/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../landing/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../landing/plugins/slick/slick.css">
    <link rel="stylesheet" href="../../landing/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="../../landing/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../landing/plugins/aos/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="../../landing/css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

    @include('landing.layouts.navbar')
    @yield('content')
    @include('landing.layouts.footer')

    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="../../landing/plugins/jquery/jquery.min.js"></script>
    <script src="../../landing/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../../landing/plugins/slick/slick.min.js"></script>
    <script src="../../landing/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="../../landing/plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="../../landing/plugins/aos/aos.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="../../landing/plugins/google-map/gmap.js"></script>

    <script src="../../landing/js/script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
