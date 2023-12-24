


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} || {{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min.css') }}">
    <!-- <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0"> -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

    <!-- Google Tag Manager -->


    <!-- End Google Tag Manager -->
</head>

<body class="  ">
    <!-- loader Start -->
    {{-- <div id="loading">
        <div id="loading-center">
        </div>
    </div> --}}
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <x-navbar />
        <x-aside />
        {{ $body }}
        <x-footer />
        <!-- Backend Bundle JavaScript -->
        <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>

        <script src="{{ asset('assets/js/select2.min.js') }}"></script>

        <!-- Table Treeview JavaScript -->
        <script src="{{ asset('assets/js/table-treeview.js') }}"></script>

        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('assets/js/customizer.js') }}"></script>

        <!-- Chart Custom JavaScript -->
        <script async src="{{ asset('assets/js/chart-custom.js') }}"></script>

        <!-- app JavaScript -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/mehtod.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('.select2-dropdown').select2();
            });
        </script>


</body>

</html>
