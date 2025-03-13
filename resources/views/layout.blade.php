<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <style>
        ::-webkit-scrollbar {
            width: 6px;
            height: 8px;
            background-color: #000000;
        }

        ::-webkit-scrollbar-thumb {
            width: 150%;
            background: #6C5B7B;
            border: 1px solid white;
            /* border-color: white; */
            border-radius: 10px;
        }
    </style>
</head>
<body>
    
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</body>
</html>