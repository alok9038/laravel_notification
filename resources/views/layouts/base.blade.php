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
    <div class="container-fluid bg-danger d-flex justify-content-center align-items-center mx-auto">
        @yield('content')
    </div>
    @include('layouts.admin.scripts')
</body>

</html>
