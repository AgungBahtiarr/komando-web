<!DOCTYPE html>
<html lang="en" data-theme="komando">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="drawer lg:drawer-open">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />

        <!-- Page content -->
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- Main content -->
            <div class="p-4">
                <div class="container mx-auto px-4 py-6 rounded-lg shadow-md  border-2">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        @include('layouts.sidebar')
    </div>

    <script src="https://kit.fontawesome.com/d2632f5afd.js" crossorigin="anonymous"></script>

</body>

</html>
