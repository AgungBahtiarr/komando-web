<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">
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
      @yield('content')
    </div>
  </div>
  <!-- Sidebar -->
  @include('layouts.sidebar')
</div>

</body>
</html>
