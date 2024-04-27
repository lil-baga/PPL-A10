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
    <link rel="icon" type="image" href="logoicon.png">
    <title>Chick&Check @yield('title')</title>
</head>

<body class="overflow-clip">
    <nav class="flex flex-row items-center bg-white p-1">
        <div class="w-full flex flex-wrap items-center justify-between p-2">
            <a href="/" class="flex items-center space-x-3 ">
                <img src="logobrand.png" class="h-8" alt="Chick & Check Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 gap-6">
                <a href="/loginRole"
                    class="text-white bg-[#F5682A] hover:bg-[#F54C2A] focus:bg-transparent focus:text-[#F5682A] focus:ring-2 focus:ring-[#F5682A] font-medium rounded-lg text-sm px-4 py-2 text-center">Login</a>
            </div>
            <div class="items-center justify-evenly hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="text-sm flex flex-row font-medium rounded-lg bg-transparent gap-24">
                    <li>
                        <a href="#"
                            class="block px-6 py-2 transition-all text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Subsidi</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-6 py-2 transition-all text-[#F5682A] rounded-lg hover:bg-[#F5682A] hover:text-white">Penyuluhan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
