<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Startup Junions | Admin Dashboard</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/style.css') }}" type="text/css" />
</head>

<body class="layout-row">

    @include('layouts.admin.navigation')

    <div id="main" class="layout-column flex">
        <!-- ############ Header START-->
        @include('layouts.admin.header')

        @include('layouts.admin.content')

        @include('layouts.admin.footer')

    </div>


    <!-- Bootstrap -->
    <script src="{{ asset('admin_style/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_style/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin_style/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- lazyload plugin -->
    <script src="{{ asset('admin_style/assets/js/lazyload.config.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/lazyload.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/plugin.js') }}"></script>
    <!-- scrollreveal -->
    <script src="{{ asset('admin_style/libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
    <!-- feathericon -->
    <script src="{{ asset('admin_style/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/theme.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/utils.js') }}"></script>
    <!-- theme -->
    <script src="{{ asset('admin_style/assets/js/theme.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/utils.js') }}"></script>
    <!-- endbuild -->

</body>

</html>
