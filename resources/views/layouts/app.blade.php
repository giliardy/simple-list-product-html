<!DOCTYPE html>

<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Front</title>
        <meta name="description" content="Aplicativo web para teste" />
        <meta name="title" content="Test Front" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    </head>

    <body>
        <main id="app">
            <!-- Header -->
            <header id="layout-header">
                <main-header />
            </header>

            <!-- Content -->
            <div role="main" id="layout-main">
                @yield('content')
            </div>
            
        </main>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')

    </body>
</html>