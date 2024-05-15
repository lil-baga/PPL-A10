<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .remove-arrow::-webkit-inner-spin-button,
        .remove-arrow::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .remove-arrow {
            -moz-appearance: textfield;
        }
    </style>
    <link rel="stylesheet" href="./resources/output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image" href="{{ url('logoicon.png') }}">
    <title>Chick&Check @yield('title')</title>
</head>

<body class="font-[poppins] font-medium overflow-clip">
    <nav class="fixed top-0 left-0 z-20 w-full p-2 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between">
        <div class="w-full flex flex-wrap items-center justify-between p-2">
            <a href="/" class="flex items-center space-x-3 ">
                <img src="{{ url('logobrand.png') }}" class="h-8" alt="Chick & Check Logo" />
            </a>
            <div class="flex order-2 space-x-0 gap-2">
                <a href="/loginRole"
                    class="button text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Login</a>
                <a href="/signupRole"
                    class="button text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Sign Up</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bottom-0 left-0 z-10 w-full p-4 bg-white shadow md:flex md:items-center md:justify-between">
        <span class="text-sm text-[#F5682A] sm:text-center">© 2024 <a href="/" class="hover:underline">Kelompok A10™ - Chick&Check</a>
        </span>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
