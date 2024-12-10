<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Default Title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Georgia', 'serif'], // Use Georgia as the primary font
                    },
                    colors: {
                        customBorder: '#666666',
                        customGray: '#3C3B3B',
                        primary: '#2A4D69',
                        buttonColor: '#FBB249',
                    },
                },
            },
        }
    </script>

    <!-- Scripts -->
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
        @include('partials._navbar')

        <div class="main">
            @yield('content')
        </div>

        @include('partials._footer')
    </div>
</body>

</html>
