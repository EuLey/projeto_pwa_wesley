<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação Laravel')</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/dist/css/adminlte.min.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
    
    <!-- Estilos do Livewire -->
    @livewireStyles

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    <!-- AdminLTE Scripts -->
    <script src="{{ asset('node_modules/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('node_modules/admin-lte/dist/js/adminlte.min.js') }}"></script>

    <!-- Scripts do Livewire -->
    @livewireScripts

    <!-- Scripts personalizados -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
