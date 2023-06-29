<head>

{{header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");}}
{{header("Cache-Control: post-check=0, pre-check=0", false);}}
{{header("Pragma: no-cache");}}
{{header('Content-Type: text/html');}}
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ env('APP_NAME') }} :: @yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="dSpace Ltd">
    <link rel="shortcut icon" href="{{--getAppSetting()->getFrontLogoLink()--}}">
    

    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome-free/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/modules/izitoast/dist/css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/modules/Parsley.js/src/parsley.css')}}" />

    @stack('styles')
    @yield('role_template_styles')


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mobilestyle.css')}}" />

    <?php //@toastr_css?>
    <link rel="stylesheet" href="{{asset('assets/css/general.css')}}">


      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id={{env('GOOGLE_ANALYTICS')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '{{env("GOOGLE_ANALYTICS")}}');
    </script>
    <!--- For Local and Qa ---->

    <!-- advertisment code -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3575086330262680" crossorigin="anonymous"></script>

</head>