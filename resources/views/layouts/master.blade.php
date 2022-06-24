<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Notification - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @include('layouts.admin.css')
</head>

<body>

    @include('layouts.admin.sidebar')

    <div class="page-wrapper">

        @include('layouts.admin.topbar')

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('layouts.admin.footer')
        </div>

    </div>
    @include('layouts.admin.scripts')
</body>

</html>
