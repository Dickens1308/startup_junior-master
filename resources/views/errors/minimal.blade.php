<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('code') | @yield('title')</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- style -->
    <!-- build:css ../assets/css/site.min.css -->
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/style.css') }}" type="text/css" />
    <!-- endbuild -->
</head>

<body class="layout-row">
    <div class="d-flex flex align-items-center h-v info theme">
        <div class="text-center p-5 w-100">
            <h1 class="display-5 my-5">@yield('message')</h1>
            <p>Go back to
                <a href="/" class="b-b b-white">home</a> or
                <a href="/pages/contact" class="b-b b-white">contact us</a> about a problem.
            </p>
            <p class="my-5 text-muted h4">
                -- 404 --
            </p>
        </div>
    </div>

    <!-- endbuild -->
</body>

</html>
