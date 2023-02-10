<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* hover effects for all tables in child Views */
        tbody tr:hover {
            cursor: pointer;
            /* background-color: #2000d4; */
        }

        .no-hover tr:hover {
            cursor: default;
            /* background-color: transparent; */
        }

        /* Admin is highlighted in green color */
        .admin-color {
            background-color: #32915d;
        }

        /*changes style of input fields and text areas */
        input[type="text"] {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        input[type="text"]:focus {
            border-color: #333;
            box-shadow: 0 0 5px #333;
        }

        textarea {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        textarea:focus {
            border-color: #333;
            box-shadow: 0 0 5px #333;
        }
        
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
